const usersmodel = require('../models/users');
const ordermodel = require('../models/order');
const productsmodel = require('../models/products');
const { v4: uuidv4 } = require('uuid'); //generate uniq id

//Dealing with data base operations
class shoppingrepository {
  //payment
  async getorder(userid) {
    try {
      // const orders = await usersmodel.find({userid}).populate('items.product');
      // const orders = await usersmodel.find({_id:userid});
      // console.log(orders.order)
      const result = await ordermodel.find({ usersid: userid });
      return result;
    } catch (err) {
      throw err;
    }
  }

  async getallorders() {
    try {
      const result = await ordermodel.find();
      return result;
    } catch (err) {
      throw err;
    }
  }

  async getoneorder(orderid) {
    try {
      const result = await ordermodel.findById(orderid);
      return result;
    } catch (err) {
      throw err;
    }
  }

  async deleteorder(userid, orderid) {
    try {
      const profile = await usersmodel.findById(userid);
      if (profile) {
        let orderitem = profile.orders;
        if (orderitem.length > 0) {
          orderitem.map((id) => {
            if (id.toString() === orderid.toString()) {
              orderitem.splice(orderitem.indexOf(id), 1);
            } else {
              throw new Error('order not exist');
            }
          });
        } else {
          throw new Error('order is empty');
        }
      } else {
        throw new Error('invalid profile');
      }
      const order = await profile.save();
      await ordermodel.findByIdAndDelete(orderid);
      return order;
    } catch (err) {
      throw err;
    }
  }
  async createneworder(userid) {
    //check transaction for payment Status
    try {
      const profile = await usersmodel
        .findById(userid)
        .populate('cart.product');
      if (profile) {
        let amount = 0;
        let cartItems = profile.cart;
        if (cartItems.length > 0) {
          cartItems.map((item) => {
            amount += parseInt(item.product.price) * parseInt(item.unit);
            //Update product quantity
            const productLeft =
              parseInt(item.product.quantity) - parseInt(item.unit);
            if (productLeft < 0) {
              console.log(item.product.name);
              throw {
                error: {
                  message:
                    'Number of product ' +
                    item.product.name +
                    " exceeds product's current quantity",
                },
              };
            } else if (productLeft === 0) {
              productsmodel
                .updateOne({ _id: item.product._id }, {$set:{status:'out of stock',quantity:productLeft}})
                .exec()
                .then((result) => {
                  return result;
                })
                .catch((err) => {
                  console.log(err);
                  throw err;
                });
            } else {
              productsmodel
                .findOneAndUpdate(
                  { _id: item.product._id },
                  {
                    $set: {
                      quantity: productLeft,
                    },
                  },
                )
                .exec()
                .catch((err) => {
                  throw err;
                });
            }
          });
          const orderid = uuidv4();
          // let orderdate = new Date(year, month, day, hour, minute);
          let orderdate = Date.now();
          const order = new ordermodel({
            usersid: userid,
            orderid,
            orderdate,
            status: 'done',
            amount,
            items: cartItems,
          });

          profile.cart = [];

          order.populate('items.product');
          const orderResult = await order.save();

          profile.orders.push(orderResult);
          await profile.save();
          return orderResult;
        }
      }

      return {};
    } catch (err) {
      return err;
    }
  }
}

module.exports = shoppingrepository;
