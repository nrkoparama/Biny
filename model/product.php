<?php

function product_select_all($trang, $limit, $kyw)
{

    $limit_start = ($trang - 1) * $limit;

    $sql = "select * from product where 1";

    if ($kyw != "")
        $sql .= " AND name like '%" . $kyw . "%'";
    if ($limit > 0) {

        $sql .= " order by productID asc limit " . $limit_start . "," . $limit;

    } else
        $sql .= " order by productID desc";

    return get_all($sql);
}


function product_new($idcat, $limit)
{
    $sql = "select * from product where 1";

    if ($idcat > 0)
        $sql .= " categoryID=" . $idcat;

    if ($limit > 0) {

        $sql .= " order by productID desc limit " . $limit;

    } else
        $sql .= " order by productID desc";
    return get_all($sql);
}



// function product_select_all_view(){
//     $sql ="select * from product where view>40 order by view desc limit 4";
//     return get_all($sql);
// }

function product_hot()
{
    $sql = "select * from product where noibat = 1";
    return get_all($sql);
}

// product
function cat_select_all()
{
    $sql = "select * from category";
    return get_all($sql);
}

// sort danh muc
function sort_cat()
{
    $sql = "select * from product where categoryID = $categoryID";
    return get_all($sql);
}

// phan trang
function phantrang($trang, $kyw)
{
    $tongsp = count(product_select_all(1, 0, $kyw));
    $soluongsp = SOLUONGSP;
    $sotrang = ceil($tongsp / $soluongsp);
    $html_sotrang = '';
    for ($i = 0; $i < $sotrang; $i++) {
        if (($i + 1) == $trang)
            $acti = 'class="active"';
        else
            $acti = '';
        $link = "?pg=product&trang=" . ($i + 1);
        $html_sotrang .= '<li ' . $acti . ' ><a href="' . $link . '">' . ($i + 1) . '</a></li>';
    }
    return $html_sotrang;
}

function product_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function product_add($productID, $categoryID, $brandID, $name, $price, $stock, $description, $img)
{
    $conn = connect();
    $sql = "INSERT INTO product (productID,categoryID, brandID, `name`, price, stock, `description`, img)
                VALUES ('$productID','$categoryID', '$brandID', '$name', '$price', '$stock', '$description', '$img')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

function product_delete($productID)
{
    $conn = connect();
    $sql = "DELETE FROM product WHERE productID = '$productID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function product_getOne($productID)
{
    $conn = connect();
    $sql = "SELECT * FROM product WHERE productID = :productID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productID', $productID, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function product_edit($productID, $categoryID, $brandID, $name, $price, $stock, $description, $img)
{
    $conn = connect();
    $sql = "UPDATE product SET  categoryID = '$categoryID', brandID ='$brandID', `name` = '$name', price = '$price', stock = '$stock', `description` = '$description', img = '$img' 
        WHERE productID = '$productID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
?>