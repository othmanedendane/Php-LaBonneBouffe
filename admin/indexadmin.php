<html>

<head>
    <title> Site de bonne bouffe </title>
    <style>
        li{
         display:inline;
        margin-right:100px;
        }
    </style>    
</head>

<body>
    <center>
        <!--Section entete -->
        <div style="width:80%;height:30%;border:1px solid black;"> 
        </div>
        <!--Section menu -->
        <div style="width:80%;height:15%;border:1px solid black;"> 
            <ol>
                <li><a href="indexadmin.php?lien=accueil"> Accueil </a> </li>
                <li><a href="indexadmin.php?lien=recettes"> Recettes </a> </li>
                <li><a href="indexadmin.php?lien=membre"> Membre </a> </li>
                <li><a href="indexadmin.php?lien=update"> Update </a> </li>
                
                <li><a href="indexadmin.php?lien=deconnexion"> Deconnexion </a> </li>
            </ol>    
            <form method="post" action="indexadmin.php?lien=recherche">
                <input type="text" name="search" value="">
                <input type="submit" name="recherche" value="Recherche...">
            </form>
        </div>
        <!--Section details -->
        <div style="width:80%;"> 
        <!--Section PHP -->    
            <?php
            session_start();
             echo'<h1>  Bonjour '.$_SESSION["test"].'</h1></br>';
            //verifier si le lien est cliqué
            if(isset($_GET["lien"]))
            {
                $lien=$_GET["lien"];
                //selon la valeur du lien recuperée
                switch($lien)
                {
                    case"accueil":
                        include("accueil.php");
                    break;
                    
                     case"recettes":
                        include("recettes.php");
                    break;

                    case"membre":
                        include("membre.php");
                    break;
                    
                     case"update":
                        include("update.php");
                    break;

                     case"deconnexion":
                        echo"<script>window.location.href='../index.php'</script>";
                    break;
                    
                    case"recherche":
                        include("recherche.php");
                    break;

                    case"ajoutrecette":
                        include("ajoutrecette.php");
                    break;

                     case"maj":
                        include("maj.php");
                    break;

                     case"delete":
                        include("delete.php");
                    break;
                    
                }
            }
            else
            {
               include("accueil.php"); 
            }

            ?>
        </div>

    </center>
</body>
</html>