<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/estilo/index.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
                include("php/config.php");

                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result= mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("deu error aí");
                    $row = mysqli_fetch_assoc($result);

                    if (!empty($row)) {
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['Username'] = $row['Username'];
                        $_SESSION['Age'] = $row['Age'];
                        $_SESSION['Id'] = $row['Id'];
                    } else {
                        echo "<div class='message'>
                                  <p>Ocorreu um erro ao efetuar o login!</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Voltar</button>";
                    }
                    
                    if(isset($_SESSION['valid'])){
                        header("Location: home.php");
                    }
                }else{
            ?>
            <h1>SGI-CITeB</h1>
            <header>LOGIN</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" autocomplete="off" required>
                </div>
                <div class="links">
                    Não tem conta? <a href="registrar.php">Registrar-se</a>
                </div>
            </form>

        </div>
        <?php } ?>            
    </div>
</body>
</html>