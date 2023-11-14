<?php

class Product {
    private $id;
    private $desc;
    private $price;
    private $quantity;
    // the product id : 1, 2, 3,...
    private static $sequence = 1;
    
    public function __construct($description, $price, $quantity){
        $this->id = self::$sequence++;
        $this->desc = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public static function getSequence()
    {
        return Product::$sequence;
    }
    
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

//     public function setPrice($price)
//     {
//         $this->price = $price;
//     }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    public function setSequence($sequence)
    {
        Product::$sequence = $sequence;
    }
    
    public static function getHeader(){
        $str = "<table border='1'>";
        $str = "$str<tr> <th>Id</th> <th>Description</th> <th>Quantity</th> <th>Price</th> </tr>";
        
        return $str;
    }

    public static function getFooter(){
        return "</table>";
    }
    
    public function __toString(){
        $str = "<tr> <td>$this->id</td> <td>$this->desc</td> <td>$this->quantity</td> <td>$this->price</td> </tr>";
        return $str;
    }
    
    public function __call($methodName, $args){
        if ($methodName == "setPrice"){
            if (count($args) == 2){
                $arg0 = $args[0];
                $arg1 = $args[1];
                
                if ($arg1 == "N"){
                    $this->price = $arg0;
                } elseif ($arg1 == "P") {
                    $this->price = $this->price + $this->price*$arg0/100;
                }
            }
        }
    }
    
    
}

?>