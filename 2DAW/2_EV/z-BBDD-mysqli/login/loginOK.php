<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $usuario = trim($_POST['usuario']);
    $password = ($_POST['password']);
    $recaptcha  = $_POST['g-recaptcha-response']; 
    $secret_key = '6Lcg5YopAAAAAL0j8UGObhWHpwdVAdN6McO8X5gx'; 

    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secret_key . '&response=' . $recaptcha; 

    $response = file_get_contents($url); 

    try {
        $response = json_decode($response); 

        if($response->success == true){
            echo json_encode(['success' => "Google reCAPTACHA verified"]);
            $conexion = new mysqli('localhost', 'denys', 'denys', 'php_db');
            if ($conexion->connect_error) die("Error en la BBDD $conexion->connect_error");
        
            $sql_verifica = "SELECT name, lastname, email FROM user
                            WHERE (name = ? OR email = ?) AND password = ?";
                            
            $sentenciaDatos = $conexion->prepare($sql_verifica);
            $sentenciaDatos->bind_param("sss", $usuario, $usuario, $password);
            $sentenciaDatos->execute();
        
            $resultado = $sentenciaDatos->get_result()->fetch_all(MYSQLI_ASSOC);
        
            if ($resultado) {
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $usuario;
                echo json_encode(['success' => true, 'data' => $resultado]);
            } else { echo json_encode(['success' => false]); }
            $sentenciaDatos->close();
            $conexion->close();
        } else { echo json_encode(['success' => false]); }
    } catch (Exception $e) { echo json_encode(['success' => false, 'error' => $e->getMessage()]); }
} else { echo json_encode(['success' => false]); }