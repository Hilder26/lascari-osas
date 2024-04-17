<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ccnaSesión.css">
</head>
<body>
    <div class="div1">
       <div class="div2">
            <img src="https://tr.rbxcdn.com/b40940ece2558c1fb1a5078c91e469ff/420/420/Image/Png" alt="">
       </div>
       <div class="div3">
            <h2>Inicio de sesión</h2>
            <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); >
                <label for="input1">Correo electrónico <input type="email" id="input1" name="email" required></label>
                <button type="submit">Siguiente</button>
            </form>
       </div>
       <div class="div4">
            <a href="">¿Desbloquear cuenta?</a>
            <a href="">¿Ha olvidado su dirección de correo electrónico?</a>
            <a href="">Ayuda</a>
       </div>
       <hr>
       <div class="div5">
        <p>¿No tiene una cuenta?  <a href="">Regístrese</a></p>
       </div>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            function validateEmail($email) {
                // Filtrar la entrada para evitar ataques de inyección de código
                $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

                // Validar el correo electrónico
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return false;
                }

                return true;
            }

            // Obtener el correo electrónico enviado por el formulario
            $email = $_POST['email'];

            // Validar el correo electrónico
            validateEmail($email);
        }
    ?>
</body>
</html>
