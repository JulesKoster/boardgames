function calculateTotalPrice(product_id, divCounter) {
    console.log('functie calculateTotalPrice wordt uitgevoerd');
    var productAmount = event.target.value;
    productTotalPrice = shoppingCartArray[divCounter] * productAmount;
    shoppingCartArray[divCounter] = productTotalPrice;
    shoppingCartTotal = shoppingCartArray.reduce(SumValuesInArray);
    document.getElementById('divTotalPrice').innerHTML = shoppingCartTotal;
    
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById(product_id).innerHTML = "€ " + this.responseText;
            
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    };
    
    xmlhttp.open("GET", "calculation.php?id=" + product_id + "&amount=" + productAmount, true);
    xmlhttp.send();
}

function removeFromCart(product_id) {
    console.log (product_id + ' zal verwijderd worden');
 
     var xmlhttp = new XMLHttpRequest();
 
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
            removeCartId = 'removeCart' + product_id;
              document.getElementById(removeCartId).innerHTML = 'Verwijderd!';
             // console.log(this.responseText);
        
         }else if(this.status == 404){
             console.log("Deze pagina bestaat niet!");
         }
     };
     
     xmlhttp.open("GET", "remove_shoppingcart.php?id=" + product_id, true);
     xmlhttp.send();
 
 }

 function changeAmount(product_id) {
     console.log ('functie changeAmount wordt geopend');
     elementID = ("productAmount" + product_id);
     var productamount = document.getElementById(elementID).value;
     console.log ("product_id is: " + product_id + " and amount is: " + productamount);
     window.open("change_amount.php?id=" + product_id + "&amount=" + productamount, "_self");
 }