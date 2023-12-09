const products = require('../models/products');
const productsmodel = require('../models/products');
const { formatedata } = require('../side-function/side1');

class productrepository {
  async createproduct({
    uploaduserid,
    name,
    price,
    quantity,
    type,
    status,
    specification,
    reasonforsale,
    image,
  }) {
    try {
      const product = new productsmodel({
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
      const result = await productsmodel.findById({ _id: productid });
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
      const products = await productsmodel
        .find()
        .where('_id')
        .in(selectedIds.map((_id) => _id))
        .exec();
      return products;
    } catch (err) {
      throw err;
    }
  }
  async findproductsbyprice(sortorder, category) {
    try {
      if (category === 'all') {
        const products = await productsmodel
          .find({})
          .sort({ price: sortorder })
          .exec();
        return products;
      } else {
        const products = await productsmodel
          .find({ type: category })
          .sort({ price: sortorder })
          .exec();
        return products;
      }
    } catch (err) {
      throw err;
    }
  }
  async deleteproductbyid(productid) {
    try {
      const result = await productsmodel.deleteMany({ _id: productid }).exec();
      return result;
    } catch (err) {
      throw err;
    }
  }

  async updateproductinformation(newinfo) {
    try {
      return await productsmodel
        .findOneAndUpdate(
          { _id: newinfo._id },
          {
            $set: {
              name: newinfo.name,
              price: newinfo.price,
              quantity: newinfo.quantity,
              type: newinfo.type,
              status: newinfo.status,
              specification: newinfo.specification,
              reasonforsale: newinfo.reasonforsale,
            },
          },
        )
        .exec();
    } catch (err) {
      throw err;
    }
  }

  async getuploadrequestproduct() {
    try {
      //get product that is requested upload
      const result = await productsmodel.find({ status: 'upload-requested' });
      return result;
    } catch (err) {
      throw err;
    }
  }

  async getdeleterequestproduct() {
    try {
      //get product that is requested delete
      const result = await productsmodel.find({
        $and: [
          { status: { $ne: 'upload-requested' } },
          { status: { $ne: 'available' } },
          { status: { $ne: 'out of stock' } },
          { status: { $ne: 'removed' } },

        ],
      });
      return result;
    } catch (err) {
      throw err;
    }
  }

  async getproductbyuploaduserid(userid) {
    try {
      const result = await productsmodel.find({ uploaduserid: userid });
      return result;
    } catch (err) {
      throw err;
    }
  }

  async approveproductbyid(productid) {
    try {
      const myproduct = await productsmodel.find({ _id: productid });
      if (myproduct) {
        if (myproduct[0].quantity <=0) {
          return {
            error: {
              message: 'Sản phẩm không đủ số lượng',
            },
          };
        }
        const result = await productsmodel.findOneAndUpdate(
          { _id: productid },
          { $set: { status: 'available' } },
        );

        return result;
      }

      return {
        error: {
          message: 'Product not found',
        },
      };
    } catch (err) {
      throw err;
    }
  }
  
  async approveremovalbyid(productid) {
    try {
      const myproduct = await productsmodel.find({ _id: productid });
      const remove_check = myproduct[0].status;
      if (myproduct) {
        if (remove_check[0] == 'out of stock') {
          return {
            error: {
              message: 'Sản phẩm đã được bán hết',
            },
          };
        }
        const result = await productsmodel.findOneAndUpdate(
          { _id: productid },
          { $set: { status: 'removed' } },
        );

        return result;
      }

      return {
        error: {
          message: 'Product not found',
        },
      };
    } catch (err) {
      throw err;
    }
  }
  async getavailableproduct() {
    try {
      console.log('this is called');
      const products = await productsmodel.find({ status: 'available' });
      return products;
    } catch (err) {
      throw err;
    }
  }
}

module.exports = productrepository;
