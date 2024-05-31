<?php
session_start();

$event = new eventController();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Crear'])) {
        $event->createEvent();
    }
    if (isset($_POST['Actualizar'])) {
        $event->updateEvent();
    }
    if (isset($_POST['Buscar'])) {
        $event->searchEvent();
    }
    if (isset($_POST['Eliminar'])) {
        $event->deleteEvent();
    }
}

class eventController{
    private $conn;
    public function __construct(){
        $host= "127.0.0.1";
        $database= "thefightersparadise";
        $user= "root";
        $password= "";
        $dsn = "mysql:host=$host;dbname=$database";
        try {
            $this->conn = new PDO($dsn, $user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo json_encode(["message" => "Connection error: " . $e->getMessage()]);
        }
    }
    public function createEvent() : void{
        $nombre = $_POST['nombre'];
        $ubicacion = $_POST['ubicacion'];
        $fecha = $_POST['fecha'];
        $informacion = $_POST['informacion'];

        $statement = $this->conn->prepare("SELECT * FROM events where nombre = :nombre");
        $statement->bindParam(":nombre", $nombre);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            echo json_encode(["message" => "Este evento ya existe"]);
            //quitar el header?
            //header("Location: /TheFightersParadise/views/index.php");
            //unset($this->conn);
        }else {
            $statement = $this->conn->prepare("INSERT INTO events (nombre, ubicacion, fecha, informacion) VALUES (:nombre, :ubicacion, :fecha, :informacion)");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":ubicacion", $ubicacion);
            $statement->bindParam(":fecha", $fecha);
            $statement->bindParam(":informacion", $informacion);
            if ($statement->execute()) {
                echo json_encode(["message" => "Evento creado correctamente"]);
            }else {
                echo json_encode(["message" => "Error al crear el evento"]);
            }
            //header("Location: /TheFightersParadise/views/index.php");
        }
    }
    public function updateEvent() : void{
        $nombre = $_POST['nombre'];
        $nombreNuevo = $_POST['nombreNuevo'];
        $ubicacion = $_POST['ubicacion'];
        $fecha = $_POST['fecha'];
        $informacion = $_POST['informacion'];

        $statement = $this->conn->prepare("SELECT * FROM events where nombre = :nombre");
        $statement->bindParam(":nombre", $nombre);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            echo json_encode(["message" => "Este evento no existe"]);
            //header("Location: /TheFightersParadise/views/index.php");
            //unset($this->conn);
        }else {
            $statement = $this->conn->prepare("UPDATE events SET nombre = :nombreNuevo, ubicacion = :ubicacion, fecha = :fecha, informacion = :informacion WHERE nombre = :nombre");
            $statement->bindParam(":nombre", $nombre);
            $statement->bindParam(":nombreNuevo", $nombreNuevo);
            $statement->bindParam(":ubicacion", $ubicacion);
            $statement->bindParam(":fecha", $fecha);
            $statement->bindParam(":informacion", $informacion);
            if ($statement->execute()) {
                //header("Location: /TheFightersParadise/views/index.php");
                echo json_encode(["message" => "Evento actualizado correctamente"]);
            }else {
                //header("Location: /TheFightersParadise/views/index.php");
                echo json_encode(["message" => "Error al actualizar el evento"]);
            }
        }
        
    }
    public function searchEvent() : void{
        $nombre = $_POST['nombre'];

        $statement = $this->conn->prepare("SELECT * FROM events where nombre = :nombre");
        $statement->bindParam(":nombre", $nombre);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            echo json_encode(["message" => "Este evento no existe"]);
            //header("Location: /TheFightersParadise/views/index.php");
            //unset($this->conn);
        }else {
            $event = $statement->fetch(PDO::FETCH_ASSOC);
            echo json_encode(["message" => "Evento encontrado: ". json_encode($event)]);
        }
    }
    public function deleteEvent() : void{
        $nombre = $_POST['nombre'];

        $statement = $this->conn->prepare("SELECT * FROM events where nombre = :nombre");
        $statement->bindParam(":nombre", $nombre);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            echo json_encode(["message" => "Este evento no existe"]);
            //header("Location: /TheFightersParadise/views/index.php");
            //unset($this->conn);
        }else {
            $statement = $this->conn->prepare("DELETE FROM events where nombre = :nombre");
            $statement->bindParam(":nombre", $nombre);

            if ($statement->execute()) {
                //header("Location: /TheFightersParadise/views/index.php");
                echo json_encode(["message" => "Evento eliminado correctamente"]);
            }else {
                //header("Location: /TheFightersParadise/views/index.php");
                echo json_encode(["message" => "Error al eliminar el evento"]);
            }
        }
    }
}