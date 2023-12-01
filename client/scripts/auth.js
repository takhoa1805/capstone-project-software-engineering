document.addEventListener('DOMContentLoaded',()=>{
    const isLogged = localStorage.getItem('user');
    if (!isLogged){
        window.alert("Please log in to continue");
        window.location.href='/client/index.php';
    }
});

