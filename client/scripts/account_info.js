var user_data=null;


async function product_item_generator(input_data){

    const result = await fetch(`localhost:3000/product/${input_data.product}`, { method: "GET", 
    headers:{
            "Content-Type": "application/json",
            "Authorization":`Beaer ${JSON.parse(localStorage.getItem('user')).token}`
            },
    });
    const data = await result.json();
    if (data.error){
        alert(data);
        return;
    }

    const new_product = document.createElement("div");
    new_product.classList.add("ListingElement");
    new_product.innerHTML =
    `
    <div class="ListingElement-frame">
    <img style="width: 99px; height: 130px" src="${data.image[0]}"/>
    <div class="ListingElement-detail">
    <div class="Element-detail">
        <div class="Element-header">
        <div class="header-price">${data.name}</div>
        <div class="header-price" style="width: 70px; text-align: right;">${data.price}đ</div>
        </div>
        <ul>
        <li class="detail-info">Tình trạng: ${data.status}</li>
        <li class="detail-info">Số lượng: ${input_data.unit}</li>
        </ul>
    </div>
    <button type="button" class="btn btn-primary btn-sm" style="place-self: end;">Yêu cầu đổi/trả</button>
    </div>
</div>
<div class="Line4" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
`
    return new_product;

  
}



//FILL ACCOUNT INFORMATIONS
async function account_information_filler(user_data){

    //email field
    var user_email = document.getElementById("user-email");
    user_email.value = user_data.email;

    //name field
    var user_name = document.getElementById('user-name');
    user_name.value = user_data.name;

    //country
    var user_country = document.getElementById('country-choices');
    switch(user_data.address[0].country.toLowerCase()){
        case 'vietnam':
            user_country.value=1;
            break;
        case 'canada':
            user_country.value=2;
            break;
        case 'korea':
            user_country.value=3;
            break;
        default:
            user_country.value = 1;
            break;
    };

    //city
    var user_city = document.getElementById('user-city');
    user_city.value = user_data.address[0].city;

    //street
    var user_street = document.getElementById('user-street');
    user_street.value=user_data.address[0].street;

    //phone
    var user_phone = document.getElementById('user-phone');
    user_phone.value = user_data.phone;

}

async function product_item_filler(data){
    try{
        const title =`<div style="color: black; font-size: 24px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Đơn hàng ${data._id}</div>`
        const order_list = document.createElement("div");
        order_list.classList.add("Order-list");
        order_list.innerHTML = title;

        var tmp='';

        for (item in data.items){
            tmp = await product_item_generator(item);
            order_list.appendChild(tmp);
        }

    } catch(error){
        console.log("Error ",error);
        alert(error);
    }
}

//FILL BUYING ORDERS
async function account_order(user_data){
    try{
        const result = await fetch("http://localhost:3000/shopping/orders", { method: "GET", 
        headers:{
                "Content-Type": "application/json",
                "Authorization":`Beaer ${JSON.parse(localStorage.getItem('user')).token}`
                },
        });
        const data = await result.json();
        if (data.error){
            alert(data);
            return;
        }

        console.log("All orders: ",data);

        const buy_order_container = document.getElementById('buy-order-container');

        var tmp='';
        var tmp_container='';
        for (order in data){
            tmp_container= document.createElement("div");
            tmp = await product_item_filler(order);
            tmp_container.innerHTML=tmp;
            buy_order_container.appendChild(tmp_container);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

//ON PAGE LOAD
document.addEventListener('DOMContentLoaded',()=>{
    fetch("http://localhost:3000/users/profile", { method: "GET", 
    headers:{
        "Content-Type": "application/json",
        "Authorization":`Beaer ${JSON.parse(localStorage.getItem('user')).token}`
    },
})
    .then((response) => response.json())
    .then((data)=>{
        if (data.error){
            alert(data);
        }
        console.log("Response from backend: ",data);
        user_data = data;
        account_information_filler(user_data);
        account_order(user_data);
    })
    .catch((error=>{
        console.log("Error",error);
        alert(error);
    }))
});


//SEND SELLING REQUEST
document.querySelector('#send-selling-request').addEventListener('click',(event)=>{
    const uploaduserid = user_data.id;
    const name = document.getElementById('product-name').value;
    const price = document.getElementById('product-price').value;
    const quantity = document.getElementById('product-quantity').value;
    const introduction = document.getElementById('product-introduction').value;
    const specification = document.getElementById('product-specification').value;
    const status = document.getElementById('product-status').value;
    const reasonforsale = document.getElementById('product-reason-for-sale').value;
    const note = document.getElementById('product-note').value;
    const images = document.getElementById('product-images').value.replace(/\s/g, '').split(','); //need processing
    const type = document.getElementById('product-type').value;
    const img = JSON.parse(JSON.stringify(images));


    if (name === '' || price === null || quantity === null || introduction === null || reasonforsale === '' || images[0]==''){
        window.alert("Không được bỏ trống bất kỳ trường nào");
        window.location.reload();
        return;
    }

    const upload_info=`
        {
            "uploaduserid":"${uploaduserid}",
            "name":"${name}",
            "price":"${price}",
            "quantity":"${quantity}",
            "type":"${type}",
            "specs":{
                "introduction": "${introduction}",
                "specification":"${specification}",
                "status":"${status}",
                "note":"${note}"
            },
            "reasonforsale":"${reasonforsale}",
            "img":"${img}"
            
        }
    `;

    

    fetch("http://localhost:3000/sales/product/upload", { method: "POST", 
    headers:{
        "Content-Type": "application/json",
        "Authorization":`Beaer ${JSON.parse(localStorage.getItem('user')).token}`
    },
    body:upload_info,
})
    .then((response) => response.json())
    .then((data)=>{
        if (data.error){
            alert(data.error.message);
            console.log("Response from backend: ",data.error.message);
            throw data.error;
        }  else{
            window.alert("Gửi yêu cầu đăng bán thành công");
            window.location.reload();
        }

    })
    .catch((error=>{
        console.log("Error",error);
        alert(error);
    }))
});







// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// ------------------------OBSOLETE BUTTONS-----------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
document.querySelector('#change-button').addEventListener('click',()=>{
    window.alert('Tính năng đang được hoàn thiện');
});

document.querySelector('#password-change-button').addEventListener('click',()=>{
    window.alert('Tính năng đang được hoàn thiện');
});

document.querySelector('#save-changes-button').addEventListener('click',()=>{
    window.alert('Tính năng đang được hoàn thiện');
});

document.querySelector('#cancel-button').addEventListener('click',()=>{
    window.location.reload();
});
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// ------------------------OBSOLETE BUTTONS-----------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //

