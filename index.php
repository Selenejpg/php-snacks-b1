<!--
##Snack 1
1) Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
2) Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. 
3) Stampiamo a schermo tutte le partite con questo schema.
-->

<?php

$matches = [
    [
        'team1' => 'Acqua S.Bernardo Cantù',
        'team2' => 'Oriora Pistoia',
        'point_team_1' => 70,
        'point_team_2' => 45
    ],
    [
        'team1' => 'Fortitudo Pompea Bologna',
        'team2' => 'Dolomiti Energia Trentino',
        'point_team_1' => 82,
        'point_team_2' => 83
    ],
    [
        'team1' => 'Pallacanestro Trieste',
        'team2' => 'Virtus Roma',
        'point_team_1' => 72,
        'point_team_2' => 33
    ],
    [
        'team1' => 'Openjobmetis Varese',
        'team2' => 'Germani Basket Brescia',
        'point_team_1' => 101,
        'point_team_2' => 99
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <p>
        <?php
            for ($i=0; $i < count($matches) ; $i++) { 
                echo $matches[$i]['team1'] . " - " . $matches[$i]['team2'] . "|" . $matches[$i]['point_team_1'] . " - " . $matches[$i]['point_team_2'] . "<br>";
            }
        ?>
    </p>
</body>
</html>


<!--
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php

$name = (!empty( $_GET['name'])) ? $_GET['name'] : '';
$email = (!empty( $_GET['email'])) ? $_GET['email'] : '';
$age = (!empty( $_GET['age'])) ? $_GET['age'] : '';

$validazioneName = false;
$validazioneEmail = false;
$validazioneAge = false;

//che name sia più lungo di 3 caratteri
if (strlen($name) < 3) {
    echo "<p>Il nome deve contenere almeno 3 caratteri";
}else {
    $validazioneName = true;
}

//che mail contenga un punto e una chiocciola
if (strpos($email,'@') == 0 || strpos($email,'.') == 0) {
    echo "<p>L'email deve contenere @ e . </p>";
}else {
    $validazioneEmail = true;
}

//age sia un numero
if (!is_numeric($age)) {
    echo "<p>Il valore dell'età deve essere un numero</p>";
}else {
    $validazioneAge = true;
}

if ($validazioneName && $validazioneEmail && $validazioneAge ) {
    echo "<p>Accesso riuscito</p>";
} else {
    echo "<p>Accesso negato</p>";
}

?>

<style>
    
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form method="GET">
        <div>
            <label for="">Name</label>
            <input style="margin-left: 15px;" type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input style="margin-left: 15px;" type="text" name="email">
        </div>
        <div>
            <label for="">Age</label>
            <input style="margin-left: 15px;" type="text" name="age">
        </div>
        <button style="margin-top: 15px;" type="submit">Invia</button>
    </form>
</body>
</html>

<!--
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->