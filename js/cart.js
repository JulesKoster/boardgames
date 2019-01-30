function addToCart(product_id) {

   // var category = document.getElementById('category').value;
    var productid = product_id;

    // console.log(productid);

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            // document.getElementById("countShoppingCart").innerHTML = this.responseText;
            // console.log(this.responseText);
            if (this.responseText == "match match ") {
                // console.log ("hier moet een modal komen dat item al in winkelmandje zit");
                $('[data-toggle="popover"]').popover();
            }
       
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    }
    // console.log (searchForId(product_id, shoppingCartArray);
    location.reload();
    ;
    xmlhttp.open("GET", "add_shoppingcart.php?id=" + productid + "&amount=1", true);   
    xmlhttp.send();

}