<?php

include 'Car.cls.php';

$c0 = new Car(100, 2006, 5500, "Blue");
$c1 = new Car(200, 2005, 6000, "Black");
$c2 = new Car(300, 2000, 2500, "Green");
$c3 = new Car(400, 2017, 10000, "Gray");
$c4 = new Car(500, 2020, 12000, "Red");

$carList[0] = $c0;
$carList[1] = $c1;
$carList[2] = $c2;
$carList[3] = $c3;
$carList[4] = $c4;

displayCars(array($c0, $c1));

$c0->setColor("Red");
$c1->setPrice(6200);
echo "After changing <br/>";
displayCars(array($c0, $c1));

echo "The total number of cars is: " . Car::getNbCars() . "<br/>";

echo "All cars <br/>";
displayCars($carList);

echo "Cars where the price is greater than 6000 <br/>";
displayCarsPriceGreaterThan($carList, 6000);
    
function displayCars($arr){
    echo Car::getHeader();
    foreach ($arr as $key=>$oneObj) {
        $key = $key + 1;
        echo "<tr> <td>C{$key}</td>" . $oneObj . "</tr>";
    }
    echo Car::getFooter();
}

function displayCarsPriceGreaterThan($arr, $pr){
    echo Car::getHeader();

    foreach ($arr as $key=>$oneObj) {
        $key = $key + 1;
        if ($oneObj->getPrice() > $pr){
            echo "<tr> <td>C{$key}</td>" . $oneObj . "</tr>";
        }
    }
    echo Car::getFooter();
}