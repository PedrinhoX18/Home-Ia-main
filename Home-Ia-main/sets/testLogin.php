<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('./config/config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $stmt = $conn->prepare("SELECT * FROM dados WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ./register.php');
    } else {
        if ($email === 'admin@gmail.com' || $senha === 'admin134') {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ./admin.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ./about.php');
        }
    }
}
?>