function navigator (product_id){
    localStorage.setItem('product_id',product_id);
    window.location.href=('/client/pages/product_detail_admin.php');
}