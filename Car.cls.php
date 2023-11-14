<?php


class Car {
    private $code;
    private $year;
    private $price;
    private $color;
    private static $nbCars = 0;
    
    public function __construct($code, $year, $price, $color){
        $this->code = $code;
        $this->year = $year;
        $this->price = $price;
        $this->color = $color;
        self::$nbCars++;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }

    public static function getNbCars()
    {
        return Car::$nbCars;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public static function getHeader(){
        $str = "<table border='1'>";
        $str = "$str<tr> <th>Instance</th> <th>Code</th> <th>Year</th> <th>Price</th> <th>Color</th> </tr>";
        
        return $str;
    }
    
    public static function getFooter(){
        return "</table>";
    }
    
    public function __toString(){
        $str = "<td>$this->code</td> <td>$this->year</td> <td>$this->price</td> <td>$this->color</td>";
        return $str;
    }
    

}

?>