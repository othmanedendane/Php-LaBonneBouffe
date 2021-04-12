<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "photos/tacos.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td> 
        <h3> Branchez-vous membre! </h3>
        <form method="post">
            <table>
                <tr><td>Login </td><td><input type="text" name="loginmembre" value=""></td></tr>
                <tr><td>Password </td><td><input type="password" name="passwordmembre" value=""></td></tr>
                <tr><td><input type="submit" name="membre" value="Entrer"></td>
                    <td> <a href="index.php?lien=nonmembre"> Non membre </a> </td></tr>
            </table>
        </form>   
        
        <h3> Administrateur </h3>
        <form method="post">
            <table>
                <tr><td>Login </td><td><input type="text" name="loginadmin" value=""></td></tr>
                <tr><td>Password </td><td><input type="password" name="passwordadmin" value=""></td></tr>
                <tr><td><input type="submit" name="admin" value="Entrer"> </td></tr>
            </table>
        </form>   
        <!-- Section PHP-->
        <?php
            session_start();
        $_SESSION["tesst"]=$_POST['loginmembre'];
        $_SESSION["test"]=$_POST['loginadmin'];
            //1)recuperation des donnees par $POST
            if(isset($_POST["membre"]))
            {
                $loginmembre=$_POST["loginmembre"];
                $passwordmembre=$_POST["passwordmembre"];
                
                //2)connexion avec la base de donne "bonnebouffe'
                $connect = mysqli_connect('localhost','root','','bonnebouffe')
                    or die("Erreur de connexion avec la BD!");
                //3)Requete SQL avec PHP-mysql
                $requete=mysqli_query($connect,"select * from membre where login ='$loginmembre' and password ='$passwordmembre'")
                    or die("Erreur de requete SQL!");
                //4)Analyse et affichage des resultats de la requete
                $nbre=mysqli_num_rows($requete);
                if($nbre >0)
                {
                    //Redirection vers la page MEMBRE
                    //header() fonction PHP
                    echo"<script> window.location.href='membre/indexmembre.php' </script>";
                }
                else
                {
                    echo"Login et/ou password incorrects!";
                }
                
                
            }

            //1)recuperation des donnees par $POST
            if(isset($_POST["admin"]))
            {
                $loginadmin=$_POST["loginadmin"];
                $passwordadmin=$_POST["passwordadmin"];
                
                //2)connexion avec la base de donne "bonnebouffe'
                $connect = mysqli_connect('localhost','root','','bonnebouffe')
                    or die("Erreur de connexion avec la BD!");
                //3)Requete SQL avec PHP-mysql
                $requete=mysqli_query($connect,"select * from admin where login ='$loginadmin' and password ='$passwordadmin'")
                    or die("Erreur de requete SQL!");
                //4)Analyse et affichage des resultats de la requete
                $nbre=mysqli_num_rows($requete);
                if($nbre >0)
                {
                    //Redirection vers la page MEMBRE
                    //header() fonction PHP
                    echo"<script> window.location.href='admin/indexadmin.php' </script>";
                }
                else
                {
                    echo"Login et/ou password incorrects!";
                }
            }

        ?>
    </td>
</tr>

</table>