<?php

class Product{
    var $product_name;
    var $cost_price;
    var $sales_price;

    function calculate_sales_price(){
         $this->sales_price = round($this-> cost_price=1.2,2);
    }
}

class Computer extends Product{
    
    var $processor;
    var $hard_disk;
    var $ram;

}

class Garment extends Product{

}

$my_product = new Computer;
$my_product->product_name ='apple macbook air 2020';
$my_product->cost_price = 190000;
$my_product-> calculate_sales_price();
$my_product->processor ='intel core i3';

$my_garment = new Garment;



$my_array = get_object_vars($my_product);

echo 'object variables for my_product';
echo '<pre>';
print_r($my_array);
echo '</pre>';

echo 'get parent class of garment <br>';
echo get_parent_class($my_garment);


?>