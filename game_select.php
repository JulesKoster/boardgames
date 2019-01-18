<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "nav_header.php"?>
    <div class="row justify-content-center align-content-center">

        <div class="col-xl-6">
        
            <form action="game_select_script.php" method="post">

                    <div class="card" id='1'>
                        <div class="card-body">
                            <label for="age">Hoe oud is de jongste speler</label>
                                <input type="text" class="form-control" placeholder="leeftijd" name="age" required autofocus>
                            <div class="btn btn-dark" onclick="javascript:next('1', '2')">next</div>
                        </div>
                    </div> 

                    <div class="card" id='2' style='display:none'>
                        <div class="card-body">
                            <label for="players">Met hoeveel spelers wilt je spelen</label>
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
                                <div class="btn btn-dark" onclick="javascript:next('2', '3')">Volgende</div>
                        </div>
                    </div>

                    <div class="card" id='3' style='display:none'>
                        <div class="card-body">
                            <label for="time">Hoeveel tijd heeft je voor het spellen van een spel</label>
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
                            <div class="btn btn-dark" onclick="javascript:next('3', '4')">Volgende</div>
                        </div>
                    </div>

                    <div class="card" id='4' style='display:none'>
                        <div class="card-body">
                            <label for="category">Van welke soort spelen hou je?</label>
                                <select class="form-control" name="category">
                                    <option value="bordspel"> Bordspellen</option>
                                    <option value="kaartspel"> Kaartspellen</option>
                                    <option value="dobbelspel"> Dobbelspellen</option>
                                    <option value="denkspel">Denkspellen</option>
                                </select>
                            <div class="btn btn-dark" onclick="javascript:next('4', '5')">Volgende</div>
                        </div>
                    </div>


                    <div class="card" id='5' style='display:none'>
                        <div class="card-body">
                            <label for="classic">Bent je een fan van de classieke gezeldschapspellen, zoals ganzebord</label>
                                <div class="radio">
                                    <input  type="radio" value="1" name="classic"> Ja
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="0" name="classic"> Nee
                                </div>

                                <div class="radio">
                                    <input  type="radio" value="0 OR 1" name="classic"> Maakt mij niet uit
                                </div>
                            <div class="btn btn-dark" onclick="javascript:next('5', '6')">Volgende</div>
                        </div>
                    </div>

                    <div class="card" id='6' style='display:none'>
                        <div class="card-body">
                            <label for="travel">Bent u van plan om dit speel te spelen terwijl u op reis bent</label>
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
    <script src="js/game_select.js"></script>   

</body>
</html>