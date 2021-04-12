
<h3> Membres inscrits </h3>
<?php
//1)Connexion PHP avec mysql
include("../connexion.php");
//2)requete SQL de selection des recettes
$selection=mysqli_query($connect,"select * from membre limit 0,7");
//3)$Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($selection);
if($nbre > 0)
{
    echo "<h3> Liste des membres </h3>
            <table border ='1'>
                <th>code</th> 
                <th> nom </th> 
                <th> prenom </th>
                <th> password </th>  
                <th> photo </th>"; 
    while($resultat=mysqli_fetch_row($selection))
    {
        echo "<tr><td>$resultat[0]</td> <td>$resultat[1]</td> <td>$resultat[2]</td> <td>$resultat[3]</td>
        <td><img src='../photos/$resultat[4]'style = height:70%;width:50%;align=center ></td> ";
    
    }
    echo"</table>";
}

else
{
    echo "";
}


?>