const productservice = require ('../service/product-service');
const usersservice = require('../service/users-service');
const { isValidObjectId } = require('mongoose');
const userauth = require('./middlewares/auth');
module.exports = (app)=>{
    const product_service = new productservice();
    const users_service = new usersservice();

    //request to upload new product
    app.post('/sales/upload-request',userauth,async (req,res,next)=>{
        try {
            const status = "upload-requested";
            const {_id} = req.body;
            const uploaduserid =_id;
            const {name,price,quantity,type,specification,reasonforsale} = req.body;
            const {data} = await product_service.createproduct({uploaduserid,name,price,quantity,type,status,specification,reasonforsale});
            return res.json(data);
        }   catch (err){
            next(err);
        }
    })

    app.post('/sales/delete-request/:id',userauth,async (req,res,next)=>{
        try{
            const product=product_service.getproductbyid(id);
            const {_id}=req.user;
            const {status}=req.body.removereason;
            if (product.uploaduserid === _id ) {//remove request is from uploader
                const newinfo ={
                    "name":product.name,
                    "price":product.price,
                    "quantity":product.quantity,
                    "type":product.type,
                    "status":"remove-reason: "+status,
                    "specification":product.specification,
                    "reasonforsale":product.reasonforsale
                }
                const{data} = await product_service.updateproduct(newinfo);
                return res.json(data);
            }   else{
                return res.status(405).json({
                    message:"You are not allowed to perform this operation"
                })
            }
        }   catch (err){
            next(err);
        }
    })
}