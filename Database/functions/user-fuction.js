const  usersmodel  = require("../models/users");
const  addressmodel  = require("../models/address");
const productmodel = require("../models/products");

class usersrepository {
  async createusers({ email,password,name,salt,phone }) {
    try {
      const users = new usersmodel({
        email,
        password,
        name,
        salt,
        phone,
        address: [],
      });
      const usersresult = await users.save();
      return usersresult;
    } catch (err) {
      throw err;
    }
  }
  async createaddress({ _id,country, province, city, street }) {
    try {
      const profile = await usersmodel.findById(_id);

      if (profile) {
        const newAddress = new addressmodel({
          country,
          province,
          city,
          street,
        });
        await newAddress.save();
        profile.address.push(newAddress);
      }
      // save the address if push in
      return await profile.save();
    } catch (err) {
      throw err;
    }
  }

  async findusers({ email }) {
    try {
      const existingusers = await usersmodel.findOne({ email: email });
      return existingusers;
    } catch (err) {
      throw err;
    }
  }

  async findusersbyid({ id }) {
    try {
      const existingusers = await usersmodel.findById(id)
        .populate("address")
        .populate("orders")
        .populate("cart.product");
      return existingusers;
    } catch (err) {
      throw err;
    }
  }
  
  async addcartitem(usersid, productid, quantity, isRemove) {
    try {
      const profile = await usersmodel.findById(usersid);
      const product = await productmodel.findById(productid);

      if (product.status !=="available" && !isRemove){
        return {
          error:{
            message: "This product is not available"
          }
        }
      }
      

      if (profile) {
        const cartItem = {
          product: productid,
          unit: quantity,
        };

        let cartItems = profile.cart;

        if (cartItems.length > 0) {
          let isExist = false;
          cartItems.map((item) => {
            if (item.product.toString() === productid.toString()) {
              if (isRemove) {
                cartItems.splice(cartItems.indexOf(item), 1);
              } else {
                item.unit = quantity;
              }
              isExist = true;
            }
          });

          if (!isExist) {
            cartItems.push(cartItem);
          }
        } else {
          cartItems.push(cartItem);
        }

        profile.cart = cartItems;

        const cartSaveResult = await profile.save();
       // console.log(cartSaveResult.cart)
        return cartSaveResult.cart;
      }

      throw new Error("unable to add to cart");
    } catch (err) {
      throw err;
    }
  }

  async addordertoprofile(customerid, order) {
    try {
      const profile = await usersmodel.findById(customerid);

      if (profile) {
        if (profile.orders == undefined) {
          profile.orders = [];
        }
        profile.orders.push(order);

        profile.cart = [];

        const profileResult = await profile.save();

        return profileResult;
      }

      throw new Error("Unable to add to order!");
    } catch (err) {
      throw err;
    }
  }
}

module.exports = usersrepository;