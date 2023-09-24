<?php

require_once "Character.php";
require_once "utils.php";

$batman = new Character("Batman", Character::MEDIUM);
$superman = new Character("Superman", Character::NOVICE);

$title = "{$batman->getName()} vs. {$superman->getName()}";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batman</title>
</head>

<body>
<h1> <?= $title ?></h1>

<h2>Présentation</h2>

<fieldset>
    <legend>Personnage 1</legend>
    <div>
        Batman <br>
        name : <?= $batman->getName(); ?> <br/>
        health : <?= $batman->getHp() ?> <br/>
        experience : <?= $batman->getXp() ?>
    </div>
</fieldset>


<fieldset>
    <legend>Personnage 2</legend>
    <div>
        SuperMan <br>
        name : <?=  $superman->getName(); ?> <br/>
        health : <?= $batman->getHp() ?> <br/>
        experience : <?= $superman->getXp() ?>
    </div>
</fieldset>

<h2>Salutation</h2>
<div>
    <?= $batman->sayHello($superman) ?>
    <?= score($batman, $superman) ?> <br/>
</div>
<div>
    <?= $superman->sayHello($batman) ?>
    <?= score($batman, $superman) ?>
</div>

<h2>Le combat</h2>
<div>
    Batman tape Superman
    <?php $batman->attack($superman) ?>
    <?= score($batman, $superman) ?>
</div>

<div>
    Superman riposte
    <?php $superman->attack($batman) ?>
    <?= score($batman, $superman) ?>
</div>

<div>
    Suivi d'une super attaque
    <?php $batman->superAttack($superman) ?>
    <?= score($batman, $superman) ?>
</div>
</body>
</html>
