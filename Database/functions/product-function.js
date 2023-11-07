const products = require("../models/products");
const productsmodel = require("../models/products");

class productrepository {
  async createproduct({
    name,
    price,
    quantity,
    type,
    status,
    specification,
    reasonforsale,
  }) {
    try {
      const product = new productsmodel({
        name,
        price,
        quantity,
        type,
        status,
        specification,
        reasonforsale,
      });

      const productResult = await product.save();
      return productResult;
    } catch (err) {
        throw err;
    }
  }

  async getproducts() {
    try {
      return await productsmodel.find();
    } catch (err) {
      throw err;
    }
  }

  async findbyid(productid) {
    try {
      const result = await productsmodel.find({_id: productid});
      return result;
    } catch (err) {
      throw err;
    }
  }

  async findbycategory(category) {
    try {
      const products = await productsmodel.find({ type: category });
      return products;
    } catch (err) {
      throw err;
    }
  }
  async findselectedproducts(selectedIds) {
    try {
      const products = await productsmodel.find()
        .where("_id")
        .in(selectedIds.map((_id) => _id))
        .exec();
      return products;
    } catch (err) {
      throw err
    }
  }
  async  findproductsbyprice(sortorder,category) {
    try {
      if(category==='all')
      {
        const products = await productsmodel.find({})
        .sort({price: sortorder})
        .exec()
      return products;
      }
      else{
        const products = await productsmodel.find({ type: category })
        .sort({price: sortorder})
        .exec()
      return products;
      }
        
    } catch (err) {
      throw err;
    }
  }
  async deleteproductbyid(productid){
    try{
        const result = await productsmodel.deleteMany({_id : productid})
        .exec()
        return result;
    }
    catch(err){
      throw err;
    }
  }

  async updateproductinformation(newinfo){
    try{  
      const result = await productsmodel.findOneAndUpdate({_id : newinfo._id}, {$set: {
        "name":newinfo.name,
        "price":newinfo.price,
        "quantity":newinfo.quantity,
        "type":newinfo.type,
        "status":newinfo.status,
        "specification":newinfo.specification,
        "reasonforsale":newinfo.reasonforsale
    }})
      .exec()
      .then(result=>{
        return result;
      })
    } catch(err){
      throw err;
    }
  }

  async getuploadrequestproduct(){
    try{
      //get product that is requested upload
      const result = await productsmodel.find({status:"upload-requested"});
      return result;

    } catch(err){
      throw err;
    }
  }

  async getdeleterequestproduct(){
    try {
      //get product that is requested delete
      const result = await productsmodel.find({
        $and:[
          {status: {$ne:"upload-requested"}},
          {status: {$ne:"available"}}
        ]
      });
      return result;
    } catch (err){
      throw err;
    }
  }

}

module.exports = productrepository;