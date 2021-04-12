<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../photos/tacos.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> Ajout d'une recette </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
               <tr><td>Idrecette </td><td><input type="text" name="isbn" value=""> </td> </tr>
               <tr><td>Nom </td><td><input type="text" name="titre" value=""> </td> </tr>
               <tr><td>Ingredients </td><td><input type="text" name="auteur" value=""> </td> </tr>
               <tr><td>Photo </td><td><input type="text" name="prix" value=""> </td> </tr>
               <tr><td>Date inscrits </td><td><input type="text" name="photo" value=""> </td> </tr>
               <tr><td></td><td><input type="submit" name="inscrire" value="Inscrire"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
            <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["inscrire"]))
                {
                    
                    $isbn=$_POST["isbn"];
                    $titre=$_POST["titre"];
                    $auteur=$_POST["auteur"];
                    $prix=$_POST["prix"];
                    $photo=$_POST["photo"];

                    //2)connection avec mysql
                    include("../connexion.php");
                    //3)Requete sql d'ajout de nouveau membre
                    $insertion=mysqli_query($connect,"insert into recettes values(
                    '$isbn','$titre','$auteur','$prix','$photo')") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Ajout de $nbre réussi";
                    }
                    else
                    {
                        echo "aucun ajout de recette!";
                    }
                    
                    
                }
              ?>      
                    
               
         <!-- Debut :::Section PHP-->      
        </td>
</tr>

</table>