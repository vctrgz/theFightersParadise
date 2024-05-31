<?php

$host = "127.0.0.1";
$database = "thefightersparadise";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($conn);
    

} catch (PDOException $e) {
    die("PDO Connection Error : " . $e->getMessage());
}

$newUsername = $_POST["newUsername"];
$newEmail = $_POST["newEmail"];
$newPassword = $_POST["newPassword"];
$userId = $_POST["userId"];

if (empty($newUsername) || empty($newPassword) || empty($newEmail)){
    echo json_encode(["message" => "Please fill all the fields"]);                // Use exit after header to ensure script termination
} else {
    $statement = $conn->prepare("UPDATE users 
    SET username = :newUsername, email = :newEmail, password = :newPassword 
    WHERE id = :id");
    $statement->bindParam(":newUsername", $newUsername);
    $statement->bindParam(":newEmail", $newEmail);
    $statement->bindParam(":newPassword", $newPassword);
    $statement->bindParam(":id", $userId);
    $statement->execute();

    if ($statement->execute()) {
        // echo "Modificado con exito";
        $response["message"]  = "Usuario actualizado correctamente";
        echo json_encode($response);

    $statement = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $statement->bindParam(":id", $userId);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    $_SESSION["user"] = $user;
    $_SESSION['logged'] = true;
    } else {
        // echo "No se ha modificado correctamente";
        echo json_encode(["message" => "Error al actualizar el evento"]);                // Use exit after header to ensure script termination
    }
    
    unset($conn);
    exit();
}