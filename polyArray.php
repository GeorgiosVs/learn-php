<?php
$cars = array(
    array("BMW", 22, 18),
    array("Ford", 23, 19),
    array("Volvo", 21, 17)
);
echo "<br>" . "First array" . "<br>";
foreach ($cars as $car) {
    echo "<br>" . $car[0] . " " .$car[1] . " " . $car[2] . "<br>";
}
rsort($cars);

echo "<br>" . "Sorted array:" . "<br>";
foreach ($cars as $car) {
    echo "<br>" . $car[0] . " " .$car[1] . " " . $car[2] . "<br>";
}
array_splice($cars, 1,1 );

echo "<br>" . "Second array" . "<br>";
foreach ($cars as $car) {
    echo "<br>" . $car[0] . " " .$car[1] . " " . $car[2] . "<br>";
}
