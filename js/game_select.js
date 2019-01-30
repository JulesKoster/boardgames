function pawnMover(pos, posEnd, prevQuestion, nextQuestion, btnId) {
    console.log (prevQuestion + ', ' + nextQuestion + ', ' + btnId);
    next(prevQuestion, nextQuestion, btnId);
    var elem = document.getElementById("pawnSelecter");   
    var id = setInterval(frame, 15);
    function frame() {
      if (pos == posEnd) {
        clearInterval(id);
      } else {
        pos++; 
        elem.style.left = pos + "%"; 
      }
    }
  }

function next(prev, next, btn){
    document.getElementById(prev).style.display = 'none';
    document.getElementById(next).style.display = 'block';
    var button = document.getElementById(btn);
    button.parentNode.removeChild(button);
}

function gameChoose() {


    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked

    var age = document.getElementById('age').value;
    var players = document.getElementById('players').value;
    var time = document.getElementById('time').value;
    var category = document.getElementById('category').value;
    var classic = document.getElementById('classic').value;
    var travel = document.getElementById('travel').value;

    // console.log(productid);

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("results").innerHTML = this.responseText;
            console.log(this.responseText);
            console.log(age + ' ' + players + ' ' + time + ' ' + category + ' ' + classic + ' ' + travel);
    
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");
        }
    };
    
    xmlhttp.open("GET", "game_select_script.php?age=" + age + "&players=" + players + "&time=" + time + "&category=" + category +
    "&classic=" + classic + "&travel=" + travel , true);
    xmlhttp.send();

    document.getElementById(6).style.display = 'none';
    document.getElementById('results').style.display = 'block';
}	