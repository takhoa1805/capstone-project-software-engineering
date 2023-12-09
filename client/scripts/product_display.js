// var product_data= null;


//ON PAGE LOAD
document.addEventListener('DOMContentLoaded',async()=>{
    try{
        const result = await fetch ("http://localhost:3000/product/all/available", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    console.log("Response from backend: ",data);
    // product_data = data;
    await product_loader(data);

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
});

// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------PRODUCT LIST LOADER-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
async function product_loader(product_data){
    try{

        const product_container = document.getElementById('product-container'); //need changes

        var tmp='';

        var result = document.getElementById('result');
        var total_product = 0;


        for (product in product_data){
            if (product_data[product].status !== 'available'){
                continue;
            }
            tmp = await product_item_generator(product_data[product]);
            product_container.appendChild(tmp);
            total_product++;
        }   

        if (total_product ==0 ){
            tmp = document.createElement("div");
            tmp.innerHTML='Không có sản phẩm nào để hiển thị';
            product_container.prepend(tmp);
        }
        result.innerHTML = total_product +" result(s) found";
        // alert(total_product);


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

async function product_item_generator(product_data){

    const image_list = JSON.parse(product_data.image).split(',');
    const specification_list = JSON.parse(product_data.specification);

    const new_product_container = document.createElement('div');
    new_product_container.classList.add('ListingElement-container');
    new_product_container.style.margin='10px';
    new_product_container.style.padding='10px';

    const new_product = document.createElement('div');
    new_product.classList.add('ListingElement');


    const new_line = document.createElement('div');
    new_line.style=('align-self: stretch; height: 0px; border: 1px black solid');

    new_product.innerHTML=
    `
        <a onclick="navigator('${product_data._id}')" style="cursor:pointer" >
        <img style="width: 100px" src="${image_list[0]}" />
        </a>
        <div class="ListingElement-detail">
            <div class="Element-detail">
                <div class="Element-header">
                    <div class="header-price">${product_data.name}</div>
                    <div class="header-price" style="width: 100px; text-align: right;">${product_data.price}đ</div>
                </div>
                <div class="detail-info col-10">
                    <ul>
                        <li class="detail-info">${specification_list.introduction}</li>
                        <li class="detail-info">Danh mục: ${category_generator(product_data.type)}</li>
                        <li class="detail-info">Số lượng: ${product_data.quantity}</li>
                        </ul>
                </div>
                </div>
                </div>
                <div class="float-end p-0 m-0">
                    <button type="button" class="btn btn-primary m-0 align-content-end align-self-end" id="add-to-cart" onclick=add_to_cart('${product_data._id}')>Thêm vào giỏ</button>
                </div>
    `



    


    new_product_container.appendChild(new_product);
    new_product_container.appendChild(new_line);
    return new_product_container;


}
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------PRODUCT LIST LOADER-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------PRODUCT LIST FILTER-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
document.querySelector("#filter-all").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/all/available", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-electronics").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/electronics", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-clothes").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/clothes", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-tickets").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/tickets", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-books").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/books", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-households").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/households", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});

document.querySelector("#filter-else").addEventListener('click',async (event)=>{
    try{
        const result = await fetch ("http://localhost:3000/product/category/else", {method:"GET",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        }
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    const container = document.getElementById('product-container');
    container.innerHTML='';
    await product_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

});


function category_generator (type){
    switch (type){
        case 'electronics':
            return 'Đồ điện tử';
        case 'clothes':
            return 'Quần áo';
        case 'tickets':
            return 'Vé sự kiện';
        case 'books':
            return 'Giáo trình';
        case 'householder':
            return 'Thiết bị gia dụng';
        case 'else':
            return 'Khác';
    }
    return null;
}


// CUSTOMER ADD PRODUCT TO CART
async function add_to_cart(product_id){
    try{
        const result = await fetch ("http://localhost:3000/product/cart/add", {method:"PUT",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        },
        body:`
            {
                "_id":"${product_id}",
                "quantity":"1"
            }
        `
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    window.alert("Sản phẩm đã được thêm vào giỏ");
    window.location.reload();   

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }


}