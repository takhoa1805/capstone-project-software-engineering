const mongoose = require('mongoose');

const productschema = mongoose.Schema(
  {
    uploaduserid: { type: String, required: true },
    name: String,
    price: Number,
    quantity: Number,
    type: String,
    status: { type: String, default: 'upload-requested' }, //upload-requested, <reason to remove>, available
    specification: String,
    reasonforsale: String,
    image: String,
  },
  {
    toJSON: {
      transform(doc, ret) {
        delete ret.__v;
      },
    },
    timestamps: true,
  },
);
module.exports = mongoose.model('products', productschema);
