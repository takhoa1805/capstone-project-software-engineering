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
            total_cost+=product_data[product].product.price*product_data[product].unit;
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
    container.className='Product-detail';

    const new_product=
    `

    <img style="width: 60px; height: 60px; border-radius: 5px" src="${image_list[0]}" />
    <div class="detail-frame">
        <div class="Text" style="font-size: 16px;">${product_data.product.name}</div>
        <div class="Text" style="text-align: right;font-size: 16px;">Số lượng: ${product_data.unit}</div>
    </div>

    `
    container.innerHTML = new_product;


    return container;


}


function summary(){
    document.getElementById('total-cost').innerHTML=total_cost+'đ';
    document.getElementById('final-cost').innerHTML=total_cost+'đ';
}


document.querySelector('#order-button').addEventListener('click',async ()=>{
    try{
    // const product_id = localStorage.getItem('product_id');
    const result = await fetch (`http://localhost:3000/shopping/place/order`, {method:"POST",
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

    window.alert("Đặt hàng thành công");
    window.location.href='/client/pages/product.php';
    }   catch(error){
        console.log("Error ",error);
        alert(error);
    }
})