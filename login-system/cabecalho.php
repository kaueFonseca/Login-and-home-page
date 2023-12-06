<div class="nav">
        <div class="logo">
            <p><a href="home.php" title="ir para página inicial">SGI - CITeB</a></p>
        </div>
        <div class="right-links">
            <?php 
                $id= $_SESSION['Id'];
                $query= mysqli_query($con, "SELECT*FROM users WHERE id= $id");

                while($result = mysqli_fetch_assoc($query)){
                  $res_Uname = $result['Username'];
                  $res_Email = $result['Email'];
                  $res_Age = $result['Age'];
                  $res_Id = $result['Id'];
                }
            ?>
            <a href="php/logout.php" title="sair"> <button class="btn" >Sair</button></a>
        </div>
</div>  