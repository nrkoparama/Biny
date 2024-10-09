<?php
include_once 'pdo.php';
function check_signin($email, $password)
{
    $conn = connect();
    $sql = "SELECT * FROM users WHERE email = '$email' AND userPassword = '$password'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($data);
    return $data;
}
function user_signup($fullname, $email, $password)
{
    $conn = connect();
    $sql = "INSERT INTO users(userName,email,userPassword) VALUES ('$fullname','$email','$password')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_getAll() {
    $conn = connect();
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function user_delete($userID){
    $conn = connect();
    $sql = "DELETE FROM users WHERE userID = '$userID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_getOne($userID){
    $conn = connect();
    $sql = "SELECT * FROM users WHERE userID = '$userID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
function update_user($userID, $userName, $role, $email, $password, $phone, $address, $img) {
    $conn = connect();
    $sql = "UPDATE users SET `userName` = '$userName', `role` = '$role', `email` = '$email', `password` = '$password', phone = '$phone', `address`='$address', img = '$img' WHERE userID = '$userID'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function user_add($userName, $role, $email, $password, $phone, $address, $img, $userID) {
    $conn = connect();
    $sql = "INSERT INTO users (`userName`, `role`, `email`, `password`, `phone`, `address`, `img`, `userID`)
            VALUES ('$userName', '$role', '$email', '$password', '$phone', '$address', '$img', '$userID')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
?>