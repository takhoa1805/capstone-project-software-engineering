// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------UPLOAD REQUESTS-----------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
//ON PAGE LOAD
//FOR UPLOAD REQUESTS
document.addEventListener('DOMContentLoaded',async()=>{
    try{
        const result = await fetch ("http://localhost:3000/product/admin/upload-requests", {method:"GET",
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

    console.log("Product requested: ",data);
    // product_data = data;
    await product_loader(data);

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
});

async function product_loader(product_data){
    try{

        const product_container = document.getElementById('upload-requests-container'); //need changes

        var tmp='';

        if (product_data.length ==0){
            tmp = document.createElement("div");
            tmp.innerHTML='Không có sản phẩm nào để hiển thị';
            product_container.prepend(tmp);
            return;
        }

        for (product in product_data){
            tmp = await product_item_generator(product_data[product]);
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

    const container = document.createElement('div');
    container.className='ListingElement';


    const new_product=
    `
    <img style="width: 100px;" src="${image_list[0]}" />
    <div class="ListingElement-detail">
    <a onclick="navigator('${product_data._id}')" style="cursor:pointer" >

        <div class="Element-detail">
            <div class="Element-header">
                <div class="header-price">${product_data.name}</div>
                <div class="header-price" style="width: 100px; text-align: right;">${product_data.price}đ</div>
            </div>
            <div class="detail-info col-10">
                <ul>
                <li class="detail-info">Số lượng: ${product_data.quantity}</li>
                <li class="detail-info">Lý do bán: ${product_data.reasonforsale}</li>
                <li class="detail-info">Giới thiệu: ${specification_list.introduction}</li>
                <li class="detail-info">Phân loại: ${product_data.type}</li>
                <li class="detail-info">Ngày gửi yêu cầu: ${Date(product_data.createdAt).toString()}</li>
                </ul>
    </a>

                <div style="align-self: stretch; height: 0px; border: 1px black solid" ></div>
            </div>
        </div>
    </div>
    `
    container.innerHTML=(new_product);

    // console.log(container);

    return container;


}



// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------UPLOAD REQUESTS-----------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //



// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------REMOVE REQUESTS-----------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //


//ON PAGE LOAD
//FOR REMOVE REQUESTS
document.addEventListener('DOMContentLoaded',async()=>{
    try{
        const result = await fetch ("http://localhost:3000/product/admin/delete-requests", {method:"GET",
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

    console.log("Product requested: ",data);
    // product_data = data;
    await remove_product_loader(data);

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
});

async function remove_product_loader(product_data){
    try{

        const product_container = document.getElementById('remove-requests-container'); //need changes

        var tmp='';

        if (product_data.length ==0){
            tmp = document.createElement("div");
            tmp.innerHTML='Không có sản phẩm nào để hiển thị';
            product_container.prepend(tmp);
            return;
        }

        for (product in product_data){
            tmp = await remove_product_item_generator(product_data[product]);
            product_container.appendChild(tmp);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}



async function remove_product_item_generator(product_data){

    const image_list = JSON.parse(product_data.image).split(',');
    const specification_list = JSON.parse(product_data.specification);

    const container = document.createElement('div');
    container.className='ListingElement';
    const removereason = product_data.status.split(':');
    container.style="margin: 10px";


    const new_product=
    `
    <img style="width: 100px;" src="${image_list[0]}" />
    <div class="ListingElement-detail">
    <a onclick="navigator('${product_data._id}')" style="cursor:pointer" >

        <div class="Element-detail">
            <div class="Element-header">
                <div class="header-price">${product_data.name}</div>
                <div class="header-price" style="width: 100px; text-align: right;">${product_data.price}đ</div>
            </div>
            <div class="detail-info col-10">
                <ul>
                <li class="detail-info">Lý do gỡ sản phẩm: ${removereason[1]}</li>
                <li class="detail-info">Số lượng: ${product_data.quantity}</li>
                <li class="detail-info">Phân loại: ${product_data.type}</li>
                </ul>
                </a>
                <button type="button" class="btn btn-danger btn-sm" style="place-self: end;" onclick="takedown('${product_data._id}')">Duyệt và gỡ bỏ</button>

                <div style="align-self: stretch; height: 0px; border: 1px black solid;margin:10px" ></div>
            </div>
        </div>
    </div>
    `
    container.innerHTML=(new_product);

    // console.log(container);

    return container;

}

async function takedown(product_id){
    try{
        const result = await fetch (`http://localhost:3000/product/admin/approve-removal/${product_id}`, {method:"PATCH",
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

    window.alert("Sản phẩm đã được gỡ khỏi sàn");
    window.location.reload();

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }

}


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------REMOVE REQUESTS-----------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //