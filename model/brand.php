<?php
include_once 'pdo.php';
function brand_getAll()
{
    $conn = connect();
    $sql = "SELECT * FROM brand";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
// function category_add($categoryID, $name)
// {
//     $conn = connectS();
//     $check_sql = "SELECT categoryID FROM category WHERE categoryID = $categoryID";
//     $check_stmt = $conn->prepare($check_sql);
//     $check_stmt->execute();
//     $existing_category = $check_stmt->fetch(PDO::FETCH_ASSOC);
//     if ($existing_category) {
//         echo "categoryID đã tồn tại trong bảng.";
//     } else {
//         $sql = "INSERT INTO category(categoryID, `name`)
//             VALUES (:categoryID, :name)";
//         $stmt = $conn->prepare($sql);

//         // Bind các giá trị của biến categoryID và name vào câu lệnh SQL
//         $stmt->bindParam(':categoryID', $categoryID);
//         $stmt->bindParam(':name', $name);

//         // Thực hiện chèn dữ liệu mới vào cơ sở dữ liệu
//         $stmt->execute();
//     }
// }
// function category_delete($categoryID)
// {
//     $conn = connectS();
//     $sql = "DELETE FROM category WHERE categoryID = '$categoryID'";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
// }
// function category_getOne($categoryID)
// {
//     $conn = connectS();
//     $sql = "SELECT * FROM category WHERE categoryID = '$categoryID'";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data;
// }
// function category_edit($name, $categoryID)
// {
//     $conn = connectS();
//     $sql = "UPDATE category SET `name` = :name WHERE categoryID = :categoryID";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':name', $name);
//     $stmt->bindParam(':categoryID', $categoryID);
//     $stmt->execute();
// }

?>