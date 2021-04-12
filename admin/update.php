<h3> Nouveau mot de passe </h3>
        <form method="post">
            <table>
                <tr><td>Login </td><td><input type="text" name="loginadmin" value=""></td></tr>
                <tr><td>Password </td><td><input type="password" name="passwordadmin" value=""></td></tr>
                <tr><td><input type="submit" name="admin" value="Entrer"> </td></tr>
            </table>
        </form>   
<?php
/* Connexion à la bdd */

        if(isset($_POST["admin"]))
            {
                $loginadmin=$_POST["loginadmin"];
                $passwordadmin=$_POST["passwordadmin"];
                
                //2)connexion avec la base de donne "bonnebouffe'
                $connect = mysqli_connect('localhost','root','','bonnebouffe')
                    or die("Erreur de connexion avec la BD!");
                //3)Requete SQL avec PHP-mysql
                $insertion=mysqli_query($connect,"update admin set password = '$passwordadmin' where login='$loginadmin'") or die("Erreur de requête sql!!");
                //4)Analyse et affichage des resultats de la requete
                $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Changement de $nbre réussi";
                    }
                    else
                    {
                        echo "aucun changement de livre!";
                    }
            }

?>