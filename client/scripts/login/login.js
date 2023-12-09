//User hit sign-in button
var sign_in=document.querySelector("#login-button").addEventListener('click', (event)=>{
    let email = document.querySelector("#login-email").value;
    let password = document.querySelector("#login-password").value;
    let logInInformation= `
        {
            "email": "${email}",
            "password": "${password}"
        }
    `;

    fetch("http://localhost:3000/users/login", { method: "POST", 
    headers:{
        "Content-Type": "application/json",
    },
    body: logInInformation,
})
    .then((response) => response.json())
    .then((data) => {
        console.log("Response from backend:", data);

        //login successfully
        if (data.token){


            localStorage.setItem("user",JSON.stringify(data));


            window.location.href = '/client/pages/product.php';

            
        }   else{
            window.alert("Login failed");        
            return;    
        }

    })
    .catch((error) => {
        console.error("Error:", error);
        alert(error);
    });

    

});


