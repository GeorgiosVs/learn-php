<?php
$cars = array(
    array("BMW", 22, 18),
    array("Ford", 23, 19),
    array("Volvo", 21, 17)
);

foreach ($cars as $car) {
    echo $car[0] . " " .$car[1] . " " . $car[2] . "<br>";
}