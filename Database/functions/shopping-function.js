const usersmodel  = require("../models/users");
const ordermodel  = require("../models/order");
const productsmodel = require("../models/products");
const { v4: uuidv4 } = require('uuid'); //generate uniq id
const productrepository  = require('../functions/product-function');
const order = require("../models/order");


//Dealing with data base operations
class shoppingrepository {
    //payment
    async getorder(userid){
        try{
            const orders = await usersmodel.find({userid}).populate('items.product');        
            return orders;
        }catch(err){
            throw err;
        }
    }
    async deleteorder(userid,orderid){
        try{
            const profile = await usersmodel.findById(userid);
            if(profile)
            {
                let orderitem = profile.orders;
                if(orderitem.length>0)
                {
                    orderitem.map((id)=>{
                        if(id.toString() === orderid.toString())
                        {
                            orderitem.splice(orderitem.indexOf(id),1);
                        }
                        else{
                            throw new Error("order not exist"); 
                        }
                    })
                }
                else
                {
                    throw new Error("order is empty");
                }
            }
            else
            {
                throw new Error("invalid profile");
            }
            const order = await profile.save()
            return order.orders
        }
        catch(err){
            throw err
        }
    }
    async createneworder(userid){
        //check transaction for payment Status
        try{
            const profile = await usersmodel.findById(userid).populate("cart.product");
            if(profile){
                let amount = 0;   
                let cartItems = profile.cart;
                if(cartItems.length > 0){
                    cartItems.map(item => {
                        amount += parseInt(item.product.price) *  parseInt(item.unit);   
                        //quantity decrement from database
                        // productrepository.updateproductquantity(item.product._id,item.unit);
                        let currentProduct = productsmodel.findById(item.product._id)
                        .exec()
                        .then((result)=>{
                            let productLeft = result.quantity - item.unit;
                            if (productLeft < 0){
                                throw "Number of product exceeds current quantity";
                            }   else{
                                productsmodel.findOneAndUpdate({_id: item.product._id},{$set:{
                                    "quantity":productLeft
                                }})
                            }
                        });

                        // let productLeft = productmodel.findById(item.product._id)[0]-item.unit;

                    });
                    const orderid = uuidv4();
                    let orderdate = new Date(year, month, day, hour, minute);
                    const order = new ordermodel({
                        userid,
                        orderid,
                        orderdate,
                        status:'processing',
                        amount,
                        items: cartItems
                    })
        
                    profile.cart = [];
                    
                    order.populate('items.product');
                    const orderResult = await order.save();
                   
                    profile.orders.push(orderResult);
                    await profile.save();
                    return orderResult;
                }
            }
    
          return {};

        }catch(err){
            throw err;
        }
        

    }
}

module.exports = shoppingrepository;