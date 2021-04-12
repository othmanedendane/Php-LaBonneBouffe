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
        <div style="width:80%;height:10%;border:1px solid black;"> 
            <ol>
                <li><a href="index.php?lien=accueil"> Accueil </a> </li>
                <li><a href="index.php?lien=login"> Login </a> </li>
                <li><a href="index.php?lien=recettes"> Recettes </a> </li>
                <li><a href="index.php?lien=contact"> Contact </a> </li>
                <li><a href="index.php?lien=references"> References </a> </li>
            </ol>    
        </div>
        <!--Section details -->
        <div style="width:80%;"> 
        <!--Section PHP -->    
            <?php
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
                    
                     case"login":
                        include("login.php");
                    break;
                    
                     case"recettes":
                        include("recettes.php");
                    break;
                    
                     case"contact":
                        include("contact.php");
                    break;
                    
                     case"references":
                        include("references.php");
                    break;
                    case"nonmembre":
                        include("inscription.php");
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