<?php

function add_product($name,$price,$desc,$image){
    $conn=$GLOBALS['conn'];

    $sql = "INSERT INTO product (name,price,descripation,image) VALUES('$name','$price','$desc','$image');";
    $stmt=$conn->query($sql);

}