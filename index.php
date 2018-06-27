<?php

abstract class Product
{
    private $weight;
    private $type;
    private $color;
    private $price;
    private $namemarket='MyMarket';



    abstract public function Discount();

    public function Comment(){
        echo "<br>";
        echo "<br>";
        return 'Name - '.$this->namemarket;
    }

    public function Delivery($weight){
        if ($weight>10){
            return  $this->Delivery=300;
        }
        else {
            return  $this->Delivery=250;
        }
    }

}


interface iCars
{
    public function Mileage();

    public function State();
}

interface iPEn{
    public function Year();
}

interface iDuck{
    public function State();
}

interface iTV{
    public function Type();
}


function MyAutoload($classNameWithNamespace)
{
    $pathToFile=$_SERVER['DOCUMENT_ROOT'].str_replace('\\',DIRECTORY_SEPARATOR,$classNameWithNamespace).'php';
if (file_exists($pathToFile))
    include $pathToFile;

}

spl_autoload_register('MyAutoload');


//namespace home\sergey\PhpstormProjects\NameSpacePHP\Auto\Cars;

$BMV = new Cars;
$BMV->CarsMethod(1000,5,"BMV");


$Audi = new Cars;
$Audi->CarsMethod(2000,25,"Audi");

$Samsung=new TV;
$Samsung->TVMethod(500,"white");

$Duck=new Duck;
$Duck->DuckMethod(100,"grey");

$Pen=new Pen;
$Pen->PenMethod(200,"red");

$Pen->Comment();