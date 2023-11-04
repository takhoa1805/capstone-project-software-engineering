const mongoose = require('mongoose');

const productschema= mongoose.Schema({
    uploaduserid: {type:String, requested: true},
    name: String,
    price : Number,
    quantity: Number,
    type: String,
    status: String, //upload-requested, <reason to remove>, available
    specification: String, 
    reasonforsale: String,
}
,{
    toJSON: {
        transform(doc, ret){
            delete ret.__v;      
        }
    },
    timestamps: true
})
module.exports = mongoose.model('products',productschema);