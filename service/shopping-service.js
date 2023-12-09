const { shoppingrepository } = require('../Database');
const { formatedata } = require('../Database/side-function/side1');

// All Business logic will be here
class shoppingservice {
  constructor() {
    this.repository = new shoppingrepository();
  }

  async placeorder(userinput) {
    const { _id } = userinput;
    try {
      const orderresult = await this.repository.createneworder(_id);
      if (orderresult == '') {
        console.log(orderresult);
        return formatedata({
          message: 'Nothing in cart',
        });
      }
      return formatedata(orderresult);
    } catch (err) {
      throw err;
    }
  }

  async deleteorders(userid, orderid) {
    try {
      const orders = await this.repository.deleteorder(userid, orderid);
      return formatedata(orders);
    } catch (err) {
      throw err;
    }
  }
  async getorders(customerid) {
    try {
      const orders = await this.repository.getorder(customerid);
      return formatedata(orders);
    } catch (err) {
      throw err;
    }
  }

  async getallorders() {
    try {
      const orders = await this.repository.getallorders();
      return formatedata(orders);
    } catch (err) {
      throw err;
    }
  }

  async getorderbyid(orderid) {
    try {
      const order = await this.repository.getoneorder(orderid);
      return formatedata(order);
    } catch (err) {
      next(err);
    }
  }
}

module.exports = shoppingservice;
