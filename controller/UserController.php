<?php
session_start();

$user = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $user->login();
    }
    if (isset($_POST["register"])) {
        $user->register();
    }   
    if (isset($_POST["logout"])) {
        $user->logout();
    }   
    if (isset($_POST["registerPromotor"])) {
        $user->register();
    }
    if (isset($_POST["updateUser"])) {
        $user->update();
    }
    if (isset($_POST["editUser"])) {
        $user->edit();
    }
    if (isset($_POST["backToProfile"])) {
        $user->backToProfile();
    }
    if (isset($_POST["editAjax"])) {
        echo "hola";
        $user->editAjax();
    }
}

class UserController{
    private $conn;
    public function __construct(){
        // $servername = "localhost";
        // $dbname = "thefightersparadise";
        // $user = "root";
        // $password = "";

        // $this->conn = new mysqli($servername, $user, $password, $dbname);
        // if ($this->conn->connect_error) {
        //     die("Connection Error : " . $this->conn->connect_error);
        // }
        // echo "Connected succesfully";

        $host = "127.0.0.1";
        $database = "thefightersparadise";
        $user = "root";
        $password = "";
        
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            var_dump($this->conn);
            
            echo "Connected succesfully";

        } catch (PDOException $e) {
            die("PDO Connection Error : " . $e->getMessage());
        }
    }

    public function register() : void{
        
        if (isset($_POST['registerPromotor'])) {
            $promotor = 1;
        } else {
            $promotor = 0;
        }

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $city = $_POST["city"];

        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])){
            echo "Please fill all the fields";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "Invalid email format";

                header("Location: /TheFightersParadise/views/login.php");
                exit();
            }
            var_dump($this->conn);
            $statement = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
            $statement->bindParam(":email", $email);
            $statement->execute();

            if ($statement->rowCount() > 0) {
                echo "This email exists.";
                header("Location: /TheFightersParadise/views/login.php");
                unset($this->conn);
            } else {
                $statement = $this->conn->prepare("INSERT INTO users (username, email, password, ciudad, promotor) 
                VALUES (:username, :email, :password, :city, :promotor)");

                $statement->bindParam(":username", $username);
                $statement->bindParam(":email", $email);
                $statement->bindParam(":password", $password);
                $statement->bindParam(":city", $city);
                $statement->bindParam(":promotor", $promotor);
                
                if ($statement->execute()) {
                    $statement = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
                    $statement->bindParam(":email", $email);
                    $statement->execute();
                    $user = $statement->fetch(PDO::FETCH_ASSOC);


                        $_SESSION["user"] = $user;
                        $_SESSION['logged'] = true;
                        header("Location: /TheFightersParadise/views/perfil.php");
                        unset($this->conn);
                        exit();
                    

                } else {
                    echo "No se ha ejecutado correctamente";
                    header("Location: /TheFightersParadise/views/login.php");
                    exit();
                }
            }
        }

        // $statement = $this->conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        // $statement->bind_param("sss", $username, $password, $email);

        // if ($statement->execute()) {
        //     $_SESSION["logged"] = true;
        //     $_SESSION["username"] = $username;
        //     header("Location: /TheFightersParadise/views/perfil.php");
        // } else {
        //     echo "Error: " . $statement->error;
        //     header("Location: /TheFightersParadise/views/login.php");
        // }

        // $statement->close();
        // $this->conn->close();
    }

    public function login() : void{

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($_POST["username"]) || empty($_POST["password"])){
            echo "Please fill all the fields";
        } else {
            $statement = $this->conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1");
            $statement->bindParam(":username", $username);
            $statement->bindParam(":password", $password);
            $statement->execute();

            if ($statement->rowCount() == 0) {
                echo "Invalid Credentials";
                header("Location: /TheFightersParadise/views/login.php");
                $_SESSION['logged'] = false;
            } else {
                $user = $statement->fetch(PDO::FETCH_ASSOC);

                // if (!password_verify($_POST["password"], $user["password"])) {
                //     echo "Invalid Credentials";
                //     $_SESSION['logged'] = false;
                //     header("Location: /TheFightersParadise/views/login.php");
                //     unset($this->conn);
                // } else {
                    $_SESSION["user"] = $user;
                    $_SESSION['logged'] = true;
                    header("Location: /TheFightersParadise/views/perfil.php");
                    unset($this->conn);
                    exit();
                // }
            }
        }
        
        // $username= $_POST["username"];
        // $password = $_POST["password"];
        
        // $statement = $this->conn->prepare("SELECT username, password
        //                                 FROM users where username=? AND password=?");
        // $statement->bind_param("ss", $username, $password);
        // $statement->execute();
        
        // if ($statement->fetch()) {
        //     $_SESSION['logged'] = true;
        //     $_SESSION['user'] = $username;
        //     $this->conn->close();

        //     header("Location: /TheFightersParadise/views/perfil.php");
        //     exit();
        // } else {
        //     $_SESSION['logged'] = false;
        //     $_SESSION['error'] = "Nombre de usuario o contraseña inválidos.";
        //     $this->conn->close();

        //     header("Location: /TheFightersParadise/views/login.php");
        // }
    }

    public function logout() : void{
        unset($_SESSION["logged"]);
        unset($_SESSION["user"]);

        session_destroy();
        header("Location: /TheFightersParadise/views/index.php");
    }

    public function edit() : void {
        header("Location: /TheFightersParadise/views/updateUser.php");
    }

    public function editAjax() : void {
        header("Location: /TheFightersParadise/views/updateUserAjax.php");
    }
    public function update() : void {
        $newUsername = $_POST["newUsername"];
        $newEmail = $_POST["newEmail"];
        $newPassword = $_POST["newPassword"];
        $userId = $_POST["userId"];
        $newCity = $_POST["newCity"];

        if (empty($newUsername) || empty($newPassword) || empty($newEmail)){
            echo "Please fill all the fields";
        } else {
            $statement = $this->conn->prepare("UPDATE users 
            SET username = :newUsername, email = :newEmail, password = :newPassword,  ciudad = :newCity 
            WHERE id = :id");
            $statement->bindParam(":newUsername", $newUsername);
            $statement->bindParam(":newEmail", $newEmail);
            $statement->bindParam(":newPassword", $newPassword);
            $statement->bindParam(":newCity", $newCity);
            $statement->bindParam(":id", $userId);
            $statement->execute();

            if ($statement->execute()) {
            echo "Modificado con exito";

            $statement = $this->conn->prepare("SELECT * FROM users WHERE id = :id");
            $statement->bindParam(":id", $userId);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            header("Location: /TheFightersParadise/views/perfil.php");
            $_SESSION["user"] = $user;
            $_SESSION['logged'] = true;
            } else {
                echo "No se ha modificado correctamente";
            }
            
            unset($this->conn);
            exit();
        }
    }
    public function backToProfile() : void{
        header("Location: /TheFightersParadise/views/perfil.php");
    }
}

