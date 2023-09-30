const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const usersschema = new Schema({
    email: String,
    password:String,
    name: String,
    salt:String,
    phone: String,
    address:[
        { type: Schema.Types.ObjectId, ref: 'address', require: true }
    ],
    cart: [
        {
          product: { type: Schema.Types.ObjectId, ref: 'products', require: true},
          unit: { type: Number, require: true}
        }
    ]
    ,
    orders: [ 
        { type: Schema.Types.ObjectId, ref: 'order', require: true }
    ]
},{
    toJSON: {
        transform(doc, ret){
            delete ret.password;
            delete ret.salt;
            delete ret.__v;
            
        }
    },
    timestamps: true
}
)
module.exports = mongoose.model('users',usersschema);