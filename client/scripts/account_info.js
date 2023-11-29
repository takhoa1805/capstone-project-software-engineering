var user_data=null;

document.addEventListener('DOMContentLoaded',()=>{
    fetch("http://localhost:3000/users/profile", { method: "GET", 
    headers:{
        "Content-Type": "application/json",
        "Authorization":`Beaer ${JSON.parse(localStorage.getItem('user')).token}`
    },
})
    .then((response) => response.json())
    .then((data)=>{
        console.log("Response from backend: ",data);
        user_data = data;
    })
    .catch((error=>{
        console.log("Error",error);
        alert(error);
    }))
});

