<table width=100% border="1px">
<tr>
    <td width="50%" align="center">
    <img src = "../photos/tacos.jpg" style = "height:50%;width:80%">
    </td>
    <!-- Formulaire de login -->
    <td valign="top"> 
        <h3> Supression d'une recette </h3>
        <form method="post"> <!--formulaire-->
           <table>
               
                <tr><td>Id recette </td><td><input type="text" name="isbn" value=""> </td> </tr>
               <tr><td></td><td><input type="submit" name="delete" value="Inscrire"> </td> </tr>
            </table>
            </form>
         <!-- Debut :::Section PHP-->      
             <?php
                //1)Recuperation des donnees transmises par post
                if(isset($_POST["delete"]))
                {
                    
                   $isbn=$_POST["isbn"];
                    
                    //2)connection avec mysql
                    $connect = mysqli_connect('localhost','root','','bonnebouffe') or die ("Erreur de connxion avec la BD!");
                    include("../connexion.php");
                    //3)Requete sql d'ajout de changement
                    $insertion=mysqli_query($connect,"delete from recettes where numero = '$isbn'") or die("Erreur de requête sql!!");
                    //4)analyse et affichage des resultats de la requête
                    $nbre=mysqli_affected_rows($connect);
                    if($nbre >0)
                    {
                        echo "Supression de $nbre réussi";
                    }
                    else
                    {
                        echo "aucune supression de recette!";
                    }
                    
                    
                }
              ?>      
                    
               
         <!-- fin :::Section PHP-->      
        </td>
</tr>

</table>