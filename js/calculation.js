
// function putPriceinJSArray(indexCounter, product_price) {
//     shoppingCartArray.push(product_price);
//     console.log("divCounter = " + indexCounter + " and price is: " + product_price);
//     console.log (shoppingCartArray);
//     var shoppingCartTotal = shoppingCartArray.reduce(SumValuesInArray);
//     shoppingCartTotal = shoppingCartTotal.toFixed(2);
//     console.log (shoppingCartTotal);
//     document.getElementById('divTotalPrice').innerHTML = shoppingCartTotal;
//     }

// function SumValuesInArray(total, value) {
//     return total + value;
// }

function calculateTotalPrice(product_id, divCounter) {
    console.log('functie calculateTotalPrice wordt uitgevoerd');
    var productAmount = event.target.value;
    productTotalPrice = shoppingCartArray[divCounter] * productAmount;
    shoppingCartArray[divCounter] = productTotalPrice;
    shoppingCartTotal = shoppingCartArray.reduce(SumValuesInArray);
    document.getElementById('divTotalPrice').innerHTML = shoppingCartTotal;
    
    // console.log(shoppingCartArray);

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

function calculator(divCounter, product_id) {
    amountDivId = 'productDivId' + divCounter;
    amount = document.getElementById(amountDivId).value;
    console.log('de waarde van ' + amountDivId + ' is: ' + amount);

    // var xmlhttp = new XMLHttpRequest();

    // xmlhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
            
    //         document.getElementById(amountDivId).innerHTML = this.responseText;
            
    //     }else if(this.status == 404){
    //         console.log("Deze pagina bestaat niet!");
    //     }
    // };
    
    // xmlhttp.open("GET", "calculation1.php?id=" + product_id + "&amount=" + amount, true);
    // xmlhttp.send();

}
;





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