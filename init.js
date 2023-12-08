const express = require('express');
const cors = require('cors');
const { users, products, shopping, sales } = require('./API');
const morgan = require('morgan');
module.exports = async (app) => {
  app.use(express.json()); // handle json request
  app.use(express.urlencoded({ extended: false })); // handle form data request
  app.use(morgan('dev'));

  app.use(
    cors({
      origin: 'http://localhost:5500',
      methods: 'GET,POST,PUT,DELETE,PATCH',
      credentials: true,
    }),
  );

  //api
  users(app);
  products(app);
  shopping(app);
  sales(app);
  app.use((req, res, next) => {
    const error = new Error('Not Found');
    error.status = 404;
    next(error);
  });
  app.use((error, req, res, next) => {
    res.status(error.status || 500);
    res.json({
      error: {
        message: error.message,
      },
    });
  });
};
