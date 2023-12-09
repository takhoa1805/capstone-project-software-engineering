const mongoose = require('mongoose');

module.exports = async () => {
  try {
    mongoose.connect('mongodb://127.0.0.1:27017/bkpee').then(() => {
      console.log('Connected to database successfully');
    });
  } catch (error) {
    console.log(error);
    process.exit(1);
  }
};
