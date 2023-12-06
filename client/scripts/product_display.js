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
        alert(data);
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


async function product_loader(product_data){
    try{

        const product_container = document.getElementById('product-container'); //need changes

        var tmp='';

        var result = document.getElementById('result');
        result.innerHTML = product_data.length +" result(s) found";

        if (product_data.length ==0 ){
            tmp = document.createElement("div");
            tmp.innerHTML='Không có sản phẩm nào để hiển thị';
            product_container_container.appendChild(tmp);
            return;
        }
        for (product in product_data){
            tmp = await product_item_generator(product_data[product]);
            console.log(product_data[product]);
            product_container.appendChild(tmp);
        }   


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

    const new_product = document.createElement('div');
    new_product.classList.add('ListingElement');

    const new_line = document.createElement('div');
    new_line.style=('align-self: stretch; height: 0px; border: 1px black solid');

    new_product.innerHTML=
    `
        <img style="width: 99px; height: 130px" src="${image_list[0]}" />
        <div class="ListingElement-detail">
            <div class="Element-detail">
                <div class="Element-header">
                <div class="header-price">${product_data.name}</div>
                <div class="header-price" style="width: 100px; text-align: right;">${product_data.price}đ</div>
                </div>
                <div class="detail-info">
                    <ul>
                        <li class="detail-info">${specification_list.introduction}</li>
                        <li class="detail-info">Số lượng: ${product_data.quantity}</li>
                    </ul>
                </div>
            </div>
        </div>
    `
    new_product_container.appendChild(new_product);
    new_product_container.appendChild(new_line);
    return new_product_container;


}