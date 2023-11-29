const email = JSON.parse(localStorage.getItem('user')).email;

document.addEventListener('DOMContentLoaded',()=>{
    document.getElementById('email').innerHTML=email;
});



function logout(){
    localStorage.removeItem('user');
    window.location.href = '/client/index.php';
}