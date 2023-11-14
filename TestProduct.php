<?php

include 'Product.cls.php';

$p0 = new Product("Keyboard", 10, 5);
$p1 = new Product("Mouse", 20, 35);
$p2 = new Product("LCD Screen", 120, 4);

$prodList[0] = $p0;
$prodList[1] = $p1;
$prodList[2] = $p2;
//$prodList[3] = $p0;


displayProducts($prodList);

$p0->setPrice(20, "N");
$p1->setPrice(20, "P");
$p2->setPrice(-10, "P");

displayProducts($prodList);

echo "The total number of product is: " . Product::getSequence()-1 . "<br/>";

// display the product description of the p2
//echo $p2->getDesc(). "<br/>";

//$p3 = $p0;
//$p3 = new Product("Pen", 10, 20);

//if ($p3 == $p0)
//    echo "Referencing the same product with the id: ".$p0->getId(). "<br>";
//else
//    echo "Different product <br/>";

function displayProducts($arr){
    echo Product::getHeader();
    foreach ($arr as $oneObj)
        echo $oneObj;
    
    echo Product::getFooter();
    
}