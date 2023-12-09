document.querySelector('#approve-button').addEventListener('click',async ()=>{
    const product_id = localStorage.getItem('product_id');
    try{
        const result = await fetch (`http://localhost:3000/product/admin/approve-product/${product_id}`, {method:"PATCH",
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

    window.alert("Sản phẩm đã được duyệt");
    window.location.href="/client/pages/product_admin_request.php";

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
})

document.querySelector('#remove-button').addEventListener('click',async ()=>{
    const product_id = localStorage.getItem('product_id');
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

    window.alert("Sản phẩm đã được xóa");
    window.location.href="/client/pages/product_admin_request.php";

    }   catch (error){
        console.log("Error ",error);
        alert(error);   
    }
})



