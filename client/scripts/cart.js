var total_cost=0;
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
        const result = await fetch (`http://localhost:3000/shopping/cart`, {method:"GET",
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
    total_cost=0;
    await product_loader(data);
    summary();

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
});


async function product_loader(product_data){
    try{

        const product_container = document.getElementById('product-container'); //need changes

        var tmp='';

        if (product_data.length ==0){
            tmp = document.createElement("div");
            tmp.innerHTML='Không có sản phẩm nào để hiển thị';
            product_container.prepend(tmp);
            return;
        }

        for (product in product_data){
            tmp = await product_item_generator(product_data[product]);
            total_cost+=product_data[product].product.price * product_data[product].unit;
            product_container.appendChild(tmp);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}



async function product_item_generator(product_data){

    const image_list = JSON.parse(product_data.product.image).split(',');
    const specification_list = JSON.parse(product_data.product.specification);

    const container = document.createElement('div');
    container.className='CartElement';

    const new_product=
    `

        <div class="Cart-item">
            <div class="Cart">
                <img src="${image_list[0]}" style="width: 100px"/>
                <div class="Cart-detail">
                    <div class="LabelName">
                        <div class="Name">${product_data.product.name}</div>
                        <div class="Price">${product_data.product.price} đ</div>
                    </div>
                    <div class="description">
                    ${specification_list.introduction}
                    </div>
                    <div class="Quantity">
                        <div class="Quantity-text">Số lượng: ${product_data.unit}</div>
                        <button class="btn" id="remove-from-cart" onclick="remove_from_cart('${product_data.product._id}')"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
            <div class="Line"></div>
        </div>


    `
    container.innerHTML = new_product;


    return container;


}

async function remove_from_cart (product_id){
    try{
        const result = await fetch ("http://localhost:3000/product/cart/delete", {method:"DELETE",
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        },
        body:`
            {
                "_id":"${product_id}"
            }
        `
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }

    window.location.reload();   

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }


}


function summary(){
    document.getElementById('total-cost').innerHTML=total_cost+'đ';
    document.getElementById('final-cost').innerHTML=total_cost+'đ';
}

document.querySelector('#cart-continue').addEventListener('click',()=>{
    const cost = document.getElementById('final-cost').innerText;
    if (cost=='0đ'){
        window.alert("Thêm sản phẩm vào giỏ hàng để tiếp tục");
        window.location.href=('/client/pages/product.php');
    }   else{
        window.location.href=('/client/pages/checkout.php');
    }
})