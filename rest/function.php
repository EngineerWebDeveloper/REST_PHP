<?php
    function get_price($find){
        $books = array(
            "java" => 299,
            "c" => 343,
            "php" => 223
        );
        
        foreach($books as $book=>$price){
            if($book == $find)
            {
                return $price;
                break;
            }
        }
    }
?>