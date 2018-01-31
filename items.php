<?php
//items4.php

$myItem = new Item(1,"Taco","Our Tacos are awesome!",4.95);
$myItem->addExtra("Sour Cream", 0.25);
$myItem->addExtra("Cheese", 0.25);
$myItem->addExtra("Guacamole", 0.25);
$config->items[] = $myItem;

$myItem = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
$myItem->addExtra("Sprinkles", 0.25);
$myItem->addExtra("Chocolate Sauce", 0.25);
$myItem->addExtra("Nuts", 0.25);
$config->items[] = $myItem;

$myItem = new Item(3,"Salad","Our Salads are awesome!",5.95);
$myItem->addExtra("Croutons", 0.25);
$myItem->addExtra("Bacon", 0.25);
$myItem->addExtra("Lemon Wedges", 0.25);
$myItem->addExtra("Avacado", 0.25);
$config->items[] = $myItem;


//create a counter to load the ids...
//$items[] = new Item(1,"Taco","Our Tacos are awesome!",4.95);
//$items[] = new Item(2,"Sundae","Our Sundaes are awesome!",3.95);
//$items[] = new Item(3,"Salad","Our Salads are awesome!",5.95);

/*
echo '<pre>';
var_dump($items);
echo '</pre>';
die;
*/


class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
    public function __construct($ID,$Name,$Description,$Price)
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        
    }#end Item constructor
    
    public function addExtra($extra)
    {
        $this->Extras[] = $extra;
        
    }#end addExtra()

}#end Item class











