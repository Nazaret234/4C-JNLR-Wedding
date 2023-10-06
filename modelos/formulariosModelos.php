<?php
require_once "conexion.php";
class formulariosModelo
{

    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(`nombre`, `email`, `password`) 
        VALUES (:nombre, :email, :password)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }

    static public function mdlLogin($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("SELECT `id` FROM $tabla WHERE email = :email AND password = :password");

        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch();

        $stmt = null;
    }

    static public function mdSeleccionarRegistros($tabla, $valor, $item)
    {
        if ($valor == null && $item == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') as f FROM $tabla
            ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();

            $stmt = null;
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }
    }

    static public function mdlActualizarRegistros($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }

    static public function mdlBorrarRegistro($valor, $tabla)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :Id");
        $stmt->bindParam(":Id", $valor, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }
}
