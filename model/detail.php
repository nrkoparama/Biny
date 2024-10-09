<?php
function productdeltail($productID){
    $sql ="select * from product where productID = $productID";
    return get_one($sql);
}

?>