
<?php
    require_once 'config.php';

    $message = ''; // Variável para armazenar a mensagem de sucesso ou erro

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        try {
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
        
            $stmt->execute();
        
            $message = 'Cadastro realizado com sucesso.';
        } catch (PDOException $e) {
            $message = 'Erro ao cadastrar: ' . $e->getMessage();
        }
    }
?>