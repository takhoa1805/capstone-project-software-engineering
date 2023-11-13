const mongoose = require('mongoose');

const productschema= mongoose.Schema({
    uploaduserid: {type:String, required: true},
    name: String,
    price : Number,
    quantity: Number,
    type: String,
    status: String, //upload-requested, <reason to remove>, available
    specification: String, 
    reasonforsale: String,
    image:{type:String}
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