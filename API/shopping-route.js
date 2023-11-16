const shoppingservice = require('../service/shopping-service');
const userservice = require('../service/users-service');
const userauth = require('./middlewares/auth');

module.exports = (app) => {
  const shopservice = new shoppingservice();
  const usersservice = new userservice();

  //place an order
  app.post('/shopping/place/order', userauth, async (req, res, next) => {
    const { _id } = req.user;
    try {
      const { data } = await shopservice.placeorder({ _id });
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
  //delete an order
  app.delete('/shopping/admin/delete/orders/', async (req, res, next) => {
    const _id = req.body._id;
    const orderid = req.body.orderid;
    try {
      const { data } = await shopservice.deleteorders(_id, orderid);
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
  //get self's order info
  app.get('/shopping/orders', userauth, async (req, res, next) => {
    const { _id } = req.user;
    try {
      const { data } = await usersservice.getprofile(_id);
      return res.status(200).json(data.orders);
    } catch (err) {
      next(err);
    }
  });
  //get cart info
  app.get('/shopping/cart', userauth, async (req, res, next) => {
    const { _id } = req.user;
    try {
      const { data } = await usersservice.getprofile(_id);
      return res.status(200).json(data.cart);
    } catch (err) {
      next(err);
    }
  });

  //get someone's order
  app.get('/shopping/orders/:id', async (req, res, next) => {
    const id = req.params.id;
    try {
      const { data } = await shopservice.getorders(id);
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });

  //get all order
  app.get('/shopping/all/orders', async (req, res, next) => {
    try {
      const { data } = await shopservice.getallorders();
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });

  app.get('/shopping/orders/detail/:id', async (req, res, next) => {
    const orderid = req.params.id;
    try {
      const data = await shopservice.getorderbyid(orderid);
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
};
