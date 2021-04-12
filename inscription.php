<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "photos/tacos.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> Inscription de membre </h3>
        <form method="post"> <!--formulaire-->
           <table>
               <tr><td>Nom </td><td><input type="text" name="nom" value=""> </td> </tr>
               <tr><td>Prenom </td><td><input type="text" name="prenom" value=""> </td> </tr>
               <tr><td>Telephone </td><td><input type="text" name="telephone" value=""> </td> </tr>
               <tr><td>adresse </td><td><input type="text" name="adresse" value=""> </td> </tr>
               <tr><td>naissance </td><td><input type="date" name="naissance" value=""> </td> </tr>
               <tr><td>Login </td><td><input type="text" name="login" value=""> </td> </tr>
               <tr><td>Password </td><td><input type="password" name="password" value=""> </td> </tr>
               <tr><td></td><td><input type="submit" name="inscrire" value="Inscrire"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
            <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["inscrire"]))
                {
                    $nom=$_POST["nom"];
                    $prenom=$_POST["prenom"];
                    $telephone=$_POST["telephone"];
                    $adresse=$_POST["adresse"];
                    $naissance=$_POST["naissance"];
                    $login=$_POST["login"];
                    $password=$_POST["password"];
                    $idmembre=substr($nom,0,3).substr($prenom,0,2);
                    //2)connection avec mysql
                    include("connexion.php");
                    //3)Requete sql d'ajout de nouveau membre
                    $insertion=mysqli_query($connect,"insert into membre values(
                    '$idmembre','$nom','$prenom','$telephone','$adresse','$naissance','$login',
                    '$password')") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Ajout de $nbre réussi";
                    }
                    else
                    {
                        echo "aucun ajout de membre!";
                    }
                    
                    
                }
              ?>      
                    
               
         <!-- Debut :::Section PHP-->      
        </td>
</tr>

</table>