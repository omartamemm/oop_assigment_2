<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

    $name=$_POST['name'];
    $price=$_POST['price'];
    $desc=$_POST['desc'];
    $image=$_POST['image'];

    $discout=$_POST['discount'];
    if ($discout=="") {
        $discout=null;
    }
    echo $name ,"<br>",$price,"<br>",$desc,"<br>",$image,"<br>",$discout;
    echo var_dump($discout);

    $product1=new product($name,$price,$desc);
    $product1->descount=$discout;
    if ($product1->descount == null) {

       echo "no discount in this product";
    }

   add_product($product1->name,$product1->price,$product1->description,$product1->image);
    



}