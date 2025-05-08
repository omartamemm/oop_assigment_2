<?php
include "config.php";
include "./core/function.php";

class product
{
    public  ?int $descount=null;
    public  ?string $image=null;

    public function __construct(public string $name, public int $price, public string $description) {

    }

   
}

class book extends product {

    public array $publisher =["omar","adel","tamem"];
    public  string $writer ;
    public  string $color ;
    public  string $suppler;


}












$page = (isset($_GET['page'])) ? $_GET['page'] : "home";
switch ($page) {
    case 'home':
        include "home.php";
        break;

    case 'admin':
        include "admin.php";
        break;

        case 'add':
            include "./controller/product/add.php";
            break;
    default:
        # code...
        break;
}
