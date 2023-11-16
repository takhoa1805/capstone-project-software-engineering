const mongoose = require('mongoose');

const Schema = mongoose.Schema;

const orderschema = new Schema({
  usersid: String, //unique
  orderid: String, //unique
  orderdate: String,
  status: String, //{done,cash-back-requested }
  amount: Number,
  deliveryway: String,
  items: [
    {
      product: { type: Schema.Types.ObjectId, ref: 'products', required: true },
      unit: { type: Number, require: true },
    },
  ],
});

module.exports = mongoose.model('order', orderschema);
