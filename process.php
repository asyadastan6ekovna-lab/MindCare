<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $errors = [];

    if (empty($name)) {
        $errors[] = "Аты-жөніңізді енгізіңіз.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email дұрыс емес.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Құпия сөз кемінде 6 таңбадан тұруы керек.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }

        echo '<a href="login.php">Қайта енгізу</a>';

    } else {
        echo "<h1>Сәлем, " . htmlspecialchars($name) . "!</h1>";
        echo "<p>Форма сәтті өңделді.</p>";
        echo '<a href="index.php">Басты бетке оралу</a>';
    }

} else {
    header("Location: login.php");
    exit;
}
?>
