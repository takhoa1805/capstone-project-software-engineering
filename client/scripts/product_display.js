var product_data= null;


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
    product_data = data;
    await product_loader(product_data);


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
            // console.log(tmp);
            product_container.appendChild(tmp);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

async function product_item_generator(product_data){

}