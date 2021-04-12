<?php
//1) recuperation du nom rechercher
if(isset($_POST["recherche"]))
{
    $search=$_POST["search"];
   
//2)Connexion avec MYSQL
    include("../connexion.php");
//3)Requete SQL de selection de recette
    $selection=mysqli_query($connect,"select * from recettes where nom='$search'");
    $nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Liste des recettes </h3>
            <table border ='1'>
                <th>Idrecette</th> 
                <th> Nom </th> 
                <th> Ingrédients </th>
                <th> Photo </th>  
                <th> Date inscrite </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td>
        <td><img src='../photos/$resultat[3]'style = height:70%;width:50%;align=center ></td> <td>$resultat[4]</td>";
        
        
    
    }
    echo"</table>";
}

else
{
    echo "Aucune recettes trouvées dans la base de donnees ";
}

    
}
?>