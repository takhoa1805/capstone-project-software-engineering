const { productrepository } = require('../Database');
const { formatedata } = require('../Database/side-function/side1');
//const { APIError } = require('../utils/app-errors');

// All Business logic will be here
class productservice {
  constructor() {
    this.repository = new productrepository();
  }

  async createproduct(productinputs) {
    try {
      const productresult = await this.repository.createproduct(productinputs);
      return formatedata(productresult);
    } catch (err) {
      throw err;
    }
  }
  async deleteproductbyid(productid) {
    try {
      const result = await this.repository.deleteproductbyid(productid);
      return formatedata(result);
    } catch (err) {
      throw err;
    }
  }

  async approveproduct(productid) {
    try {
      const result = await this.repository.approveproductbyid(productid);
      // console.log(result);
      return result;
    } catch (err) {
      throw err;
    }
  }
  async approveremoval(productid) {
    try {
      const result = await this.repository.approveremovalbyid(productid);
      // console.log(result);
      return result;
    } catch (err) {
      throw err;
    }
  }

  async getproducts() {
    try {
      const products = await this.repository.getproducts();
      let categories = {};
      products.map(({ type }) => {
        categories[type] = type;
      });
      return formatedata(products);
    } catch (err) {
      throw err;
    }
  }

  async getproductsbycategory(category) {
    try {
      const products = await this.repository.findbycategory(category);
      return formatedata(products);
    } catch (err) {
      throw err;
    }
  }

  async getselectedproducts(selectedIds) {
    try {
      const products = await this.repository.findselectedproducts(selectedIds);
      return formatedata(products);
    } catch (err) {
      throw err;
    }
  }

  async getproductbyid(productId) {
    try {
      const product = await this.repository.findbyid(productId);
      return formatedata(product);
    } catch (err) {
      throw err;
    }
  }

  async getproductinpriceorder(sortorder, category) {
    // 1  ascending , -1 descending
    try {
      const product = await this.repository.findproductsbyprice(
        sortorder,
        category,
      );
      return formatedata(product);
    } catch (err) {
      throw err;
    }
  }

  async updateproduct(newinfo) {
    try {
      const product = await this.repository.updateproductinformation(newinfo);
      return 'Product delete request sent';
    } catch (err) {
      throw err;
    }
  }

  async getrequestingproduct(request) {
    try {
      //get upload request
      if (request === 'upload-requested') {
        const product = await this.repository.getuploadrequestproduct();
        return formatedata(product);
      } else if (request === 'delete') {
        //get delete request
        const product = await this.repository.getdeleterequestproduct();
        return formatedata(product);
      } else {
        return {};
      }
    } catch (err) {
      throw err;
    }
  }

  async getproductbyuploaduser(userid) {
    try {
      const product = await this.repository.getproductbyuploaduserid(userid);
      return formatedata(product);
    } catch (err) {
      throw err;
    }
  }

  async getavailableproducts() {
    try {
      const products = await this.repository.getavailableproduct();
      // let categories = {};
      // products.map(({ type }) => {
      //   categories[type] = type;
      // });
      console.log(products);
      return formatedata(products);
    } catch (err) {
      throw err;
    }
  }
}

module.exports = productservice;
