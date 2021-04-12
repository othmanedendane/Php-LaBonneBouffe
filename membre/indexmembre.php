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
                <li><a href="indexmembre.php?lien=accueil"> Accueil </a> </li>
                <li><a href="indexmembre.php?lien=recettes"> Recettes </a> </li>
                <li><a href="indexmembre.php?lien=update"> Update </a> </li>
          
                <li><a href="indexmembre.php?lien=deconnexion"> Deconnexion </a> </li>
            </ol>    
            <form method="post" action="indexmembre.php?lien=recherche">
                <input type="text" name="search" value="">
                <input type="submit" name="recherche" value="Recherche...">
            </form>
        </div>
        <!--Section details -->
        <div style="width:80%;"> 
        <!--Section PHP -->    
            <?php
                 session_start();
             echo'<h1>  Bonjour '.$_SESSION["tesst"].'</h1></br>';

             /*if($_SESSION["tesst"] && ($_SESSION["timer"]<(time()-(60)))) {
                logout();
                
                }
 
                function logout() {
                //do logout stuff
                setcookie("name","soso",time()+60);
                echo"<script>window.location.href='../index.php'</script>";
                }
*/

                $temps = 2*60;
                setcookie('pseudo','contenu',time()+$temps);

                if(!isset($_COOKIE["pseudo"])) {
                    logout();
                    
                    }



                    function logout() {
                        //do logout stuff
                        echo"<script>window.location.href='../index.php'</script>";
                        }

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
                    
                     case"update":
                        include("update.php");
                    break;
                    
                     case"deconnexion":
                        echo"<script>window.location.href='../index.php'</script>";
                    break;
                    
                    case"recherche":
                        include("../admin/recherche.php");
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