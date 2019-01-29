<?php 
    if(!isset($_SESSION)) {
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/game_select.css">
    <title>Spelwijzer</title>
    </head>
    <?php
        if(!isset($_SESSION)) {
            session_start(); 
        }
        include 'nav_header.php';
    ?>

    
    <div class="row justify-content-center align-content-center backGround">

        <div class="col-xl-6">
        
            <form action="game_select_script.php" method="post">

                    <div class="card" id='1'>
                        <div class="card-body">
                            <label for="age">Hoe oud is de jongste deelnemer in het spel?</label>
                                <input type="text" class="form-control" placeholder="Voer hier een leeftijd in" name="age" required autofocus>
                            <button id="btn1" class="btn btn-dark mt-3" onclick="javascript:next('1', '2', 'btn1')">Volgende</button>
                        </div>
                    </div> 

                    <div class="card" id='2' style='display:none'>
                        <div class="card-body">
                            <label for="players">Met hoeveel spelers wil je spelen?</label>
                                <div class="radio">
                                    <input type="radio" value="1" name="players"> 1
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="2" name="players"> 2
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="3 OR 4" name="players"> 3 - 4
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="5 OR 8" name="players"> 5 - 8
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="9" name="players"> 8+
                                </div>
                                <div>
                                <button id="btn2" class="btn btn-dark" onclick="javascript:next('2', '3', 'btn2')">Volgende</button>
                                </div>
                        </div>
                    </div>

                    <div class="card" id='3' style='display:none'>
                        <div class="card-body">
                            <label for="time">Hoe lang mag de speelduur zijn?</label>
                                <div class="radio">
                                    <input  type="radio" value="15" name="time"> 15 minuten
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="30" name="time"> 30 minuten
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="45" name="time"> 45 minuten
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="60" name="time"> 1 uur
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="90" name="time"> 1 uur en 30 minuten
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="120" name="time"> 2 uur of langer
                                </div>
                            <button id="btn3" class="btn btn-dark" onclick="javascript:next('3', '4', 'btn3')">Volgende</button>
                        </div>
                    </div>

                    <div class="card" id='4' style='display:none'>
                        <div class="card-body">
                            <label for="category">Van welk soort spellen hou je?</label>
                                <select class="form-control" name="category">
                                    <option value="bordspel">Bordspellen</option>
                                    <option value="kaartspel">Kaartspellen</option>
                                    <option value="dobbelspel">Dobbelspellen</option>
                                    <option value="denkspel">Denkspellen</option>
                                </select>
                            <button id="btn4" class="btn btn-dark" onclick="javascript:next('4', '5', 'btn4')">Volgende</button>
                        </div>
                    </div>


                    <div class="card" id='5' style='display:none'>
                        <div class="card-body">
                            <label for="classic">Ben je een fan van de klassieke gezelschapspellen, zoals bijvoorbeeld Ganzenbord?</label>
                                <div class="radio">
                                    <input  type="radio" value="1" name="classic"> Ja
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="0" name="classic"> Nee
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="0 OR 1" name="classic"> Maakt me niet uit
                                </div>
                            <button id="btn5" class="btn btn-dark" onclick="javascript:next('5', '6', 'btn5')">Volgende</button>
                        </div>
                    </div>

                    <div class="card" id='6' style='display:none'>
                        <div class="card-body">
                            <label for="travel">Ben je van plan om dit spel te spelen terwijl je op reis bent?</label>
                                <div class="radio">
                                    <input  type="radio" value="1" name="travel"> Ja
                                </div>
                                <div class="radio">
                                    <input  type="radio" value="0" name="travel"> Nee
                                </div>

                            <button type="submit" class="btn btn-dark">Finish</button>

                        </div>
                    </div>

            </form>
    </div>
    </div>
        <?php
            include 'footer.php';
        ?>

        </div>

    </div> 
    <script src="js/game_select.js"></script>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript">
    $(document).keypress(function (e) {
                if (e.which == 13 || event.keyCode == 13) {
                    e.preventDefault();
                }
            });
    </script> -->

</body>
</html>