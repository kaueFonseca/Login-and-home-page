<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Registrar</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <?php
            
                include("php/config.php");

                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];

                    // verificar se o email é unico:
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");
                    if(mysqli_num_rows($verify_query) !=0){
                        echo "<div class='message'
                                 <p>esse email está sendo usado, tente outro pfv!</p>
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Voltar</button>";
                    }
                    else{
                        mysqli_query($con, "INSERT INTO users(Username, Email, Age, Password) VALUES('$username','$email', '$age', '$password')") or die("Ocorreu um ERRO.");
                        
                        echo "<div class='message'
                                 <p>Cadastro realizado com SUCESSO!</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Faça seu Login</button></a>";
                    }
                }else{

                

            ?>




            <header>Cadastrar</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="username">Nome</label>
                    <input type="text" name="username" id="username" autocomplete="off" required >
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Idade</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Já é um Membro? <a href="index.php">Faça seu Login</a>
                </div>
            </form>

        </div>
        <?php } ?>
    </div>
</body>
</html>