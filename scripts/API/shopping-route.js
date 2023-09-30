const shoppingservice = require("../service/shopping-service");
const userservice = require('../service/users-service');
const userauth = require('./middlewares/auth');

module.exports = (app) => {
    
    const shopservice = new shoppingservice();
    const usersservice = new userservice();

    //place an order
    app.post('/shopping/place/order',userauth, async (req,res,next) => {
        const { _id } = req.user;
        try {
            const { data } = await shopservice.placeorder({_id});
            return res.status(200).json(data);
        } catch (err) {
            next(err)
        }
    });
    //delete an order
    app.delete('/shopping/delete/orders',userauth,async(req,res,next)=>{
        const {_id} = req.user;
        const {orderid} = req.body;
        try{
            const {data} = await shopservice.deleteorders(_id,orderid)
            return res.status(200).json(data);
        }
        catch(err){
            next(err)
        }
    }) 
    //get orders info
    app.get('/shopping/orders',userauth, async (req,res,next) => {
        const { _id } = req.user;
        try {
            const { data } = await usersservice.getprofile(_id);
            return res.status(200).json(data.orders);
        } catch (err) {
            next(err);
        }

    });
    //get cart info
    app.get('/shopping/cart', userauth, async (req,res,next) => {
        const { _id } = req.user;
        try {
            const { data } = await usersservice.getprofile(_id);
            return res.status(200).json(data.cart);
        } catch (err) {
            next(err);
        }
    });
}