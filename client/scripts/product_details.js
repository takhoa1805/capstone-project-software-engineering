//ON PAGE LOAD
document.addEventListener('DOMContentLoaded',async()=>{
    const product_id = localStorage.getItem('product_id');
    if (!product_id){
        window.alert("Product not found");
        window.location.href = "/client/pages/product.php";
        return;
    }   

    try{
        // const product_id = localStorage.getItem('product_id');
        const result = await fetch (`http://localhost:3000/product/${product_id}`, {method:"GET",
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
    // window.location.href=('/client/pages/product_detail.php');
    console.log("Response from backend: ",data);
    await product_detail_loader(data);


    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
});


async function product_detail_loader(product_data){
    var image_list = JSON.parse(product_data.image).split(',');

    for (image in image_list){
        if (image_list[image] ==''){
            image_list.splice(image,1);
        }
    }
    
    // console.log(image_list);
    
    document.getElementById('product-left').innerHTML='Số lượng: '+product_data.quantity;
    document.getElementById('product-name').innerHTML = product_data.name;
    document.getElementById('product-price').innerHTML="Giá: "+product_data.price+"đ";
    document.getElementById('first-image').src=`${image_list[0]}`;


    const carousel_container = document.getElementById('carousel-container');
    for(image in image_list){
        if (image==0){
            continue;
        }
        carousel_container.appendChild(carousel_generator(image_list[image]));
    }

    //INTRODUCTION SECTION
    document.getElementById('introduction').innerHTML=introduction_section(product_data,image_list[0]);

    //SPECIFICATION SECTION
    document.getElementById('specification').innerHTML=specification_section(product_data,image_list[1]);

    //STATUS SECTION
    document.getElementById('status').innerHTML=status_section(product_data,image_list[2]);

    //REASON FOR SALE SECTION
    document.getElementById('reasonforsale').innerHTML=reasonforsale_section(product_data);

    //NOTE SECTION
    document.getElementById('note').innerHTML=note_section(product_data);
    
}

function carousel_generator(image){
    const new_item = document.createElement('div');
    new_item.className='carousel-item';
    new_item.innerHTML=
    `
    <div class="col-12">
        <img src="${image}" class="img-fluid" style="height:500px">
    </div>
    `
    return new_item;
}

function introduction_section(product_data,image){
    const specification_list = JSON.parse(product_data.specification);



    const result =
    `
    <div class="Specs-label" style="margin: left 10px">Giới thiệu</div>
    <div class="Specs-detail">
        <div class="detail-text">
                <ul class="detail-text">
                    <li>${specification_list.introduction}</li>
                </ul>
                </div>
                <img style="width: 500px; height: auto" src="${image}" />
                </div>
    `
    return result;
}

function specification_section(product_data,image){
    const specification_list = JSON.parse(product_data.specification);


    const result =
    `
    <div class="Specs-label" style="margin: left 10px">Mô tả</div>
    <div class="Specs-detail">
        <ul class="detail-text">
            <li>${specification_list.specification}</li>
        </ul>
        <img style="width: 500px; height: auto" src="${image}" />
    </div>

    `
    return result;
}

function status_section(product_data,image){
    const specification_list = JSON.parse(product_data.specification);

    const result =
    `
    <div class="Specs-label" style="margin: left 10px">Tình trạng</div>
    <div class="Specs-detail">
        <ul class="detail-text">
            <li>${specification_list.status}</li>
        </ul>
        <img style="width: 500px; height: auto" src="${image}" />
    </div>

    `
    return result;
}

function reasonforsale_section(product_data){
    const result=
    `
    <div class="Specs-label" style="margin: left 10px">Lý do cần bán</div>
    <div class="Specs-detail">
        <ul class="detail-text">
            <li>${product_data.reasonforsale}</li>
        </ul>
    </div>
    `
    return result;
}

function note_section(product_data){
    const specification_list = JSON.parse(product_data.specification);

    const result=
    `
    <div class="Specs-label" style="margin: left 10px">Ghi chú khác</div>
    <div class="Specs-detail">
        <ul class="detail-text">
            <li>${specification_list.note}</li>
        </ul>
    </div>
    `
    return result;
}


// CUSTOMER ADD PRODUCT TO CART
document.querySelector("#add-to-cart").addEventListener('click',async()=>{
    try{
        const product_id = localStorage.getItem('product_id');
        if (!product_id){
            window.alert("Product not found");
            window.location.href = "/client/pages/product.php";
            return;
        }
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


}) 