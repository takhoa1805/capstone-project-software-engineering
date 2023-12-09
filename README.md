## capstone-project-software-engineering
Đồ án tổng hợp hướng Công nghệ phần mềm - HCMUT Học kỳ 231 

## Lưu ý
- Nhóm đồng thời thực hiện kiến trúc `monolithic` lẫn `microservice`cho dự án này. Tuy nhiên do thời gian gấp rút nên nhóm vẫn chưa kịp chuyển toàn bộ kiến trúc monolithic sang microservice kịp.
- Vì vậy code cho phần kiến trúc microserver sẽ được nhóm cập nhật sau tại link github: `https://github.com/takhoa1805/capstone-project-software-engineering/` (được phát triển trên branch backend, sau đó sẽ merge vào main)


## ✋Introduction
BKPee is an online e-commerce platform for entire students at Ho Chi Minh city University of Technology to trade, buy and sell their product those no longer in use.

## Tech Stack

**Front-end:** NodeJS, Bootstrap

**Back-end:** NodeJS, ExpressJS, Multer, Mongoose

**Database:** MongoDB with Mongoose ODM

**Security:** JWT, Bcrypt


## Installation
**Node.js**
  - First, clone this branch to your local storage. 
  - Then download and install Node.js 20.10.0 version at: https://nodejs.org/en.

**Front-end:** 
  - Install `PHP Server` extension (required).

**Back-end:**
  - Open Terminal on project's root folder
  - Use `npm i` command to install all required packages for Back-end

**Database**
  - Step 1: Download and install MongoDB Community Server application at: https://www.mongodb.com/try/download/community
  
  - Step 2: Start the MongoDBCompass application. At 'New Connection' box, enter the URI: "mongodb://localhost:27017". Then in the 'Advanced Connection Options', choose the "mongodb" option in Connection String Scheme. And in the 'host' box, enter value "localhost:27017". Finally click 'Connect button'
  
  - Step 3: On the left side of the application screen, click on 'Databases' bar. Choose 'Create database'. Enter 'bkpee' as database name and 'users' as collection name
  
  - Step 4: Add the other collections to the database. Click on the 'bkpee' database, on the right side of the screen, click 'Create Collection', then create the following collections: users, products, orders, addresses
  
  - Step 5: Click on each collection, on the right side screen, click on 'ADD DATA' -> 'Import JSON or CSV file'. Then choose the suitable bkpee.<colection>.JSON where 'collection' is also the name of the collection that you clicked on. All of the JSON files are stored in `/Database/mongodb/database_collections` folder. After adding all the collections' initial data, the setup and config process have now done and database is ready to use.

Notice: 
- After Step 5, each time you run the application, run MongoDBCompass first, then just hit 'connect' button.


## Start the website
- Run and connect database at `mongodb://localhost:27017`
- Navigate to root folder on your terminal, type `npm start` command to start backend server
- Open VSCode or any editor that already have *PHP Server* extension installed
- Start *Live Server* on `./client/index.php` file at `localhost` port `5500`
- Default login information is:
  - username: `user@email.com`
  - password: `example` 

