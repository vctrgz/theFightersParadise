<?php

session_start();

$host = "127.0.0.1";
$database = "thefightersparadise";
$user = "root";
$password = "";

$response = [];

$newUsername = $_POST["newUsername"];
$newEmail = $_POST["newEmail"];
$newPassword = $_POST["newPassword"];
$userId = $_POST["userId"];
$newCity = $_POST["newCity"];


try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die(json_encode(["message" => "PDO Connection Error : " . $e->getMessage()]));
}


if (empty($newUsername) || empty($newPassword) || empty($newEmail)){
    echo json_encode(["message" => "Please fill all the fields"]);     
    exit();
} else {
    $statement = $conn->prepare("UPDATE users 
    SET username = :newUsername, email = :newEmail, password = :newPassword, ciudad = :newCity 
    WHERE id = :id");
    $statement->bindParam(":newUsername", $newUsername);
    $statement->bindParam(":newEmail", $newEmail);
    $statement->bindParam(":newPassword", $newPassword);
    $statement->bindParam(":newCity", $newCity);
    $statement->bindParam(":id", $userId);

    if ($statement->execute()) {
        // echo "Modificado con exito";
        $response["message"]  = "Usuario actualizado correctamente";
        
        $statement = $conn->prepare("SELECT * FROM users WHERE id = :id");
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION["user"] = $user;
        $_SESSION['logged'] = true;
    } else {
        // echo "No se ha modificado correctamente";
        echo json_encode(["message" => "Error al actualizar el evento"]);
    }
    
    echo json_encode($response);
    unset($conn);
    exit();
}