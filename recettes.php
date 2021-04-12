<?php
//1)Connexion PHP avec mysql
include("connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from recettes limit 0,3");
//3)$Analyse et affichage des resultats de la requete
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
        <td><img src='photos/$resultat[3]'style = height:70%;width:50%;align=center ></td> <td>$resultat[4]</td>";
    
    }
    echo"</table>";
}

else
{
    echo "";
}


?>