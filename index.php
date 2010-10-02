<?php

require_once './ga.php';

//CREAMOS UN NUEVO OBJETO GA
$ga = new GA(1);

//ESTABLECEMOS EL OBJETIVO
$ga->setObjective(0, 'Lorem Ipsum Dolo Sit Amet');

//INICIALIZAMOS EL OBJETO
$ga->startUp(0);

//EMPEZAMOS LA EVOLUCIÓN
$bests = $ga->start(0);

?>