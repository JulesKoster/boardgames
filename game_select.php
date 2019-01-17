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
    <div class="row justify-content-center">

        <div class="col-xl-6">
        
            <form action="game_select_script.php" method="get">

                <label for="age">Hoe oud is de jongste speler</label>
                    <input type="text" class="form-control" placeholder="leeftijd" name="age" required autofocus>

                <label for="players">met hoeveel spelers wilt u spelen</label>
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

                <label for="time">hoeveel tijd heeft u voor het spellen van een spel</label>
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

                <label for="category">van welke soort spelen hou je?</label>
                    <select class="form-control" name="category">
                        <option value="bordspel">bordspellen</option>
                        <option value="kaartspel">kaartspellen</option>
                        <option value="dobbelspel">dobbelspellen</option>
                        <option value="denkspel">denkspellen</option>
                    </select>

                <label for="classic">bent u een fan van de classieke gezeldschapspellen, zoals ganzebord</label>
                    <div class="radio">
                        <input  type="radio" value="1" name="classic"> ja
                    </div>

                    <div class="radio">
                        <input  type="radio" value="0" name="classic">nee
                    </div>

                    <div class="radio">
                        <input  type="radio" value="0 OR 1" name="classic"> maakt mij niet zoveel uit
                    </div>

                <label for="travel">bent u van plan om dit speel te spelen terwijl u op reis bent</label>
                    <div class="radio">
                        <input  type="radio" value="1" name="travel"> ja
                    </div>
                    <div class="radio">
                        <input  type="radio" value="0" name="travel"> nee
                    </div>

                <button type="submit" class="btn btn-dark">Toevoegen</button>

            </form>

        </div>

    </div>    

</body>
</html>