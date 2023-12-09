const { isValidObjectId } = require('mongoose');
const productservice = require('../service/product-service');
const usersservice = require('../service/users-service');
const userauth = require('./middlewares/auth');

module.exports = (app) => {
  const proservice = new productservice();
  const useservice = new usersservice();

  //create product
  app.post('/product/admin/create', async (req, res, next) => {
    try {
      const {
        uploaduserid,
        name,
        price,
        quantity,
        type,
        specs,
        reasonforsale,
        img,
      } = req.body;
      // validation
      const status = 'available';
      const specification = JSON.stringify(specs);
      const image = JSON.stringify(img);
      // console.log(img);
      const { data } = await proservice.createproduct({
        uploaduserid,
        name,
        price,
        quantity,
        type,
        status,
        specification,
        reasonforsale,
        image,
      });
      return res.json(data);
    } catch (err) {
      next(err);
    }
  });
  //product delete
  app.delete('/product/admin/delete/:id', async (req, res, next) => {
    try {
      const id = req.params.id;
      if (isValidObjectId(id)) {
        await proservice.deleteproductbyid(id);
        return res.status(200).json({ message: 'item deleted' });
      } else {
        return res.status(400).json({
          error: {
            message: 'invalid id',
          },
        });
      }
    } catch (err) {
      next(err);
    }
  });

  app.patch(
    '/product/admin/approve-product/:productid',
    async (req, res, next) => {
      const productid = req.params.productid;
      try {
        const data = await proservice.approveproduct(productid);
        return res.status(200).json(data);
      } catch (err) {
        next(err);
      }
    },
  );
  app.patch(
    '/product/admin/approve-removal/:productid',
    async (req, res, next) => {
      const productid = req.params.productid;
      try {
        const data = await proservice.approveremoval(productid);
        return res.status(200).json(data);
      } catch (err) {
        next(err);
      }
    },
  );

  // get stuff by type (books,ticket,...)
  app.get('/product/category/:type', async (req, res, next) => {
    const type = req.params.type;
    try {
      const { data } = await proservice.getproductsbycategory(type);
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
  //get stuff by stuff's id
  app.get('/product/:id', async (req, res, next) => {
    const productid = req.params.id;
    try {
      if (isValidObjectId(productid)) {
        const { data } = await proservice.getproductbyid(productid);
        return res.status(200).json(data);
      } else {
        return res.status(400).json({
          error: {
            message: 'invalid id',
          },
        });
      }
    } catch (err) {
      next(err);
    }
  });

  // get the order by id list in cart
  app.get('/product/ids', async (req, res, next) => {
    try {
      const { ids } = req.body;
      const products = await proservice.getselectedproducts(ids);
      return res.status(200).json(products);
    } catch (err) {
      next(err);
    }
  });
  // add to  user's cart
  app.put('/product/cart/add', userauth, async (req, res, next) => {
    const { _id, quantity } = req.body;
    try {
      if (isValidObjectId(_id)) {
        const { data } = await useservice.addtocart(
          req.user._id,
          _id,
          quantity,
          false,
        ); //false === add
        return res.status(200).json(data);
      } else {
        return res.status(400).json({
          error: {
            message: 'invalid id',
          },
        });
      }
    } catch (err) {
      next(err);
    }
  });
  //delete stuff in cart
  app.delete('/product/cart/delete', userauth, async (req, res, next) => {
    const { _id } = req.body; //product id to remove from cart
    const quantity = 0;
    try {
      if (isValidObjectId(_id)) {
        const { data } = await useservice.addtocart(
          req.user._id,
          _id,
          quantity,
          true,
        ); // true === remove
        return res.status(200).json(data);
      } else {
        return res.status(400).json({ error: { message: 'invalid id' } });
      }
    } catch (err) {
      next(err);
    }
  });
  //get the list of all products
  app.get('/product', async (req, res, next) => {
    try {
      const { data } = await proservice.getproducts();
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
  //get products with price frow low to high
  app.get('/product/ascending/category/:type', async (req, res, next) => {
    try {
      const { data } = await proservice.getproductinpriceorder(
        1,
        req.params.type,
      );
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
  //get products with price frow high to low
  app.get('/product/descending/category/:type', async (req, res, next) => {
    try {
      const { data } = await proservice.getproductinpriceorder(
        -1,
        req.params.type,
      );
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });

  //get all products that being requested to upload
  app.get('/product/admin/upload-requests', async (req, res, next) => {
    try {
      //find product that status = upload-requested
      const { data } =
        await proservice.getrequestingproduct('upload-requested');
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });

  //get all products that being requested to delete
  app.get('/product/admin/delete-requests', async (req, res, next) => {
    try {
      //find product that status != "upload-requested" && != available
      const { data } = await proservice.getrequestingproduct('delete');
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });

  app.get('/product/all/available', async (req, res, next) => {
    try {
      console.log('data');
      const { data } = await proservice.getavailableproducts();
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
};
