const { isValidObjectId } = require('mongoose');
const productservice = require('../service/product-service');
const usersservice = require('../service/users-service');
const userauth = require('./middlewares/auth');

module.exports = (app) => {
  const product_service = new productservice();
  const users_service = new usersservice();

  //request to upload new product
  app.post('/sales/product/upload', userauth, async (req, res, next) => {
    try {
      // const status = "upload-requested";
      // const {_id} = req.body;
      // const uploaduserid =_id;
      // const {name,price,quantity,type,specification,reasonforsale} = req.body;
      // const {data} = await product_service.createproduct({uploaduserid,name,price,quantity,type,status,specification,reasonforsale});

      const { name, price, quantity, type, specs, reasonforsale, img } =
        req.body;
      const status = 'upload-requested';
      const { _id } = req.user;
      const uploaduserid = _id;
      const specification = JSON.stringify(specs);
      const image = JSON.stringify(img);
      //validation
      const { data } = await product_service.createproduct({
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

  app.post(
    '/sales/product/delete-request/:id',
    userauth,
    async (req, res, next) => {
      const productid = req.params.id;
      try {
        const { data } = await product_service.getproductbyid(productid);
        const { _id } = req.user;
        const status = req.body.remove_reason;
        // console.log(_id);
        console.log(data);

        if (data.uploaduserid === _id) {
          //remove request is from uploader
          const newinfo = {
            _id: productid,
            uploaduserid: data.uploaduserid,
            name: data.name,
            price: data.price,
            quantity: data.quantity,
            type: data.type,
            status: 'remove-reason: ' + status,
            specification: data.specification,
            reasonforsale: data.reasonforsale,
          };
          const result = await product_service.updateproduct(newinfo);
          return res.json({
            message: result,
          });
        } else {
          return res.status(405).json({
            error: {
              message: 'You are not allowed to perform this operation',
            },
          });
        }
      } catch (err) {
        next(err);
      }
    },
  );

  // get one's upload product
  app.get('/sales/products/:id', async (req, res, next) => {
    const userid = req.params.id;
    try {
      const { data } = await product_service.getproductbyuploaduser(userid);
      return res.status(200).json(data);
    } catch (err) {
      next(err);
    }
  });
};
