var user_data=null;

//ON PAGE LOAD
document.addEventListener('DOMContentLoaded',async ()=>{
    try{
        const result = await fetch("http://localhost:3000/users/profile", { method: "GET", 
        headers:{
                "Content-Type": "application/json",
                "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
                },
        });
        const data = await result.json();
        if (data.error){
            alert(data.error.message);
            return;
        }
        console.log("Response from backend: ",data);
        user_data = data;
        // console.log(user_data);
        await account_information_filler(user_data);
        await account_buy_order(user_data);
        await account_sell_order(user_data);



    }   catch(error){
        console.log("Error ",error);
        alert(error);
    }
})


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------DISPLAY SELL ORDERS-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
async function account_sell_order(user_data){
    try{
        const result = await fetch(`http://localhost:3000/sales/products/${user_data._id}`, { method: "GET", 
        headers:{
                "Content-Type": "application/json",
                "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
                },
        });
        const data = await result.json();
        if (data.error){
            alert(data.error.message);
            return;
        }

        const sell_order_container = document.getElementById('sell-order-container');

        var tmp=document.createElement('div');

        if (data.length ==0 ){
            tmp = document.createElement("div");
            tmp.innerHTML='Bạn không có đơn bán nào';
            sell_order_container.appendChild(tmp);
            return;
        }
        for (order in data){
            tmp = await sell_product_item_filler(data[order]);
            // console.log(tmp);
            sell_order_container.appendChild(tmp);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

async function sell_product_item_filler (data){
    try{
        const title =`<div style="color: black; font-size: 24px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Mã sản phẩm ${data._id}</div>`
        const order_list = document.createElement("div");
        order_list.classList.add("Order-list");
        order_list.innerHTML = title;

        var tmp=document.createElement('div');

        tmp = await sell_product_item_generator(data);
        // console.log(order_list);
        order_list.appendChild(tmp);
        return order_list;


    } catch(error){
        console.log("Error ",error);
        alert(error);
    }
}

async function sell_product_item_generator(input_data){

    const result = await fetch(`http://localhost:3000/product/${input_data._id}`, { method: "GET", 
    headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
            },
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }
    // console.log("return data",data);

    const image_list = JSON.parse(data.image).split(',');
    // console.log("image",(image_list));

    const new_product = document.createElement("div");
    new_product.classList.add("ListingElement");
    new_product.innerHTML =
    `
    <div class="ListingElement">
    <div class="ListingElement-frame">
      <img style="width: 100px" src="${image_list[0]}" />
      <div class="ListingElement-detail">
    <a onclick="navigator('${data._id}')" style="cursor:pointer" >

        <div class="Element-detail">
          <div class="Element-header">
            <div class="header-price">${data.name}</div>
            <div class="header-price" style="width: 70px; text-align: right;">${data.price}đ</div>
          </div>
          <ul>
            <li class="detail-info">Tình trạng: ${data.status}</li>
            <li class="detail-info">Số lượng: ${input_data.quantity}</li>
          </ul>
          </a>
        </div>
        <button type="button" class="btn btn-danger btn-sm mb-1" style="place-self: end;" onclick="remove_request('${input_data._id}','${data.status}')">Gửi yêu cầu hủy đơn hàng</button>
        <button type="button" class="btn btn-primary btn-sm" style="place-self: end;" onclick="obsolete_alert()">Gửi yêu cầu chỉnh sửa thông tin sản phẩm</button>
      </div>
    </div>
    <div class="Line4" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
  </div>


`
    return new_product;

  
}


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------DISPLAY SELL ORDERS-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------DISPLAY BUY ORDERS--------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
async function product_item_generator(input_data){

    const result = await fetch(`http://localhost:3000/product/${input_data.product}`, { method: "GET", 
    headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
            },
    });
    const data = await result.json();
    if (data.error){
        alert(data.error.message);
        return;
    }
    // console.log("return data",data);

    const image_list = JSON.parse(data.image).split(',');
    // console.log("image",(image_list));

    const new_product = document.createElement("div");
    new_product.classList.add("ListingElement");
    new_product.innerHTML =
    `
    <div class="ListingElement-frame">
    <img style="width: 100px" src="${image_list[0]}"/>
    <div class="ListingElement-detail" >
    <a onclick="navigator('${data._id}')" style="cursor:pointer" >
    <div class="Element-detail"  >
        <div class="Element-header">
            <div class="header-price">${data.name}</div>
            <div class="header-price" style="width: 70px; text-align: right;">${data.price}đ</div>

        </div>
        <ul>
        <li class="detail-info">Số lượng: ${input_data.unit}</li>
        </ul>
        </a>
    </div>
    <button type="button" class="btn btn-primary btn-sm " style="place-self: end;" onclick="obsolete_alert()">Yêu cầu đổi/trả</button>
    </div>
</div>
<div class="Line4" style="align-self: stretch; height: 0px; border: 1px black solid"></div>
`
    // console.log(new_product);
    return new_product;

  
}


async function product_item_filler(data){
    try{
        const title =`<div style="color: black; font-size: 24px; font-family: Inconsolata; font-weight: 700; line-height: 54px; word-wrap: break-word">Đơn hàng ${data._id}</div>`
        const order_list = document.createElement("div");
        order_list.classList.add("Order-list");
        order_list.innerHTML = title;

        var tmp=document.createElement('div');

        for (item in data.items){
            tmp = await product_item_generator(data.items[item]);
            // tmp_container.innerHTML=tmp;
            order_list.appendChild(tmp);
        }

        return order_list;

    } catch(error){
        console.log("Error ",error);
        alert(error);
    }
}

//FILL BUYING ORDERS
async function account_buy_order(user_data){
    try{
        const result = await fetch("http://localhost:3000/shopping/orders", { method: "GET", 
        headers:{
                "Content-Type": "application/json",
                "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
                },
        });
        const data = await result.json();
        if (data.error){
            alert(data.error.message);
            return;
        }


        const buy_order_container = document.getElementById('buy-order-container');

        var tmp=document.createElement('div');
        if (data.length ==0 ){
            tmp = document.createElement("div");
            tmp.innerHTML='Bạn không có đơn mua nào';
            buy_order_container.appendChild(tmp);
            return;
        }
        
        tmp=document.createElement('div');

        for (order in data){
            tmp = await product_item_filler(data[order]);
            // tmp_container.innerHTML=tmp;
            buy_order_container.appendChild(tmp);
        }   


    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------DISPLAY BUY ORDERS--------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //



// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------FILL ACCOUNT INFORMATIONS-------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
async function account_information_filler(user_data){

    //email field
    var user_email = document.getElementById("user-email");
    user_email.value = user_data.email;

    //name field
    var user_name = document.getElementById('user-name');
    user_name.value = user_data.name;

    //country
    //city
    //street
    var user_country = document.getElementById('country-choices');
    var user_city = document.getElementById('user-city');
    var user_street = document.getElementById('user-street');

    if (user_data.address[0]){
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
        user_city.value = user_data.address[0].city;
        user_street.value=user_data.address[0].street;
    }   else{
        user_city.value="Unknown";
        user_street.value="Unknown";
    }


    //phone
    var user_phone = document.getElementById('user-phone');
    user_phone.value = user_data.phone;

}
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------FILL ACCOUNT INFORMATIONS-------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //


// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------SEND SELLING REQUEST------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
document.querySelector('#send-selling-request').addEventListener('click',(event)=>{
    const uploaduserid = localStorage.getItem('user').id;
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
        "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
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
// -------------------SEND SELLING REQUEST------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //

// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------SEND REMOVE REQUEST-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //

async function remove_request(product_id,status){
    try{
        if(status =="removed"){
            window.alert("Sản phẩm đã được gỡ bỏ khỏi sàn");
            return;
        }
        var remove_reason = window.prompt("Vui lòng cho biết lý do gỡ bài đăng sản phẩm (bắt buộc)");
        if (remove_reason =='' ){
            // alert('your reason is shit')
            return;
        }

        const remove_info = `
        {
            "remove_reason":"${remove_reason}"
        }
        `
        // // console.log(product_id);

        // const result = await fetch(`http://localhost:3000/sales/product/delete-request/656b43dd95c04d3e58cde1c0`, { method: "POST", 
        // headers:{
        //         "Content-Type": "application/json",
        //         "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        //         },
        // body: {
        //     reasonforsale:reasonforsale
        // }
        // });
        // const data = await result.json();
        // if (data.error){
        //     alert(data);
        //     return;
        // }

        // window.alert('Yêu cầu gỡ bỏ sản phẩm đã được gửi đi');
        // window.location.reload();
        // return;

        fetch(`http://localhost:3000/sales/product/delete-request/${product_id}`, { method: "POST", 
        headers:{
            "Content-Type": "application/json",
            "Authorization":`Bearer ${JSON.parse(localStorage.getItem('user')).token}`
        },
        body:remove_info,
    })
        .then((response) => response.json())
        .then((data)=>{

            console.log(remove_reason);

            if (data.error){
                alert(data.error.message);
                console.log("Response from backend: ",data.error.message);
                throw data.error;
            }  else{
                window.alert('Yêu cầu gỡ bỏ sản phẩm đã được gửi đi');
                window.location.reload();
                return;
            }
    
        })
        .catch((error=>{
            console.log("Error",error);
            alert(error);
        }))



    }   catch (error){
        console.log("Error ",error);
        alert(error);
    }
        
}

// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------SEND REMOVE REQUEST-------------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //



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

function obsolete_alert(){
    window.alert('Tính năng đang được hoàn thiện');
}
function obsolete_alert_reload(){
    window.alert('Tính năng đang được hoàn thiện');
    window.location.reload();
    return;
}

// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// ------------------------OBSOLETE BUTTONS-----------------------//
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //
// -------------------------------------------------------------- //

