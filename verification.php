<?php
session_start();

$_SESSION['auth'] = null;
$_SESSION['message'] = "";

if(isset($_POST['searchword']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'adminroot';
    $db_name     = 'ceh_auth';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $searchword = mysqli_real_escape_string($db,htmlspecialchars($_POST['searchword'])); 
    $_SESSION['searchword'] = $searchword;
    if($searchword !== "")
    {
        $requete = "SELECT count(*) FROM documents where 
              code_generer = '".$searchword."'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0)
        {
           $_SESSION['searchword'] = $searchword;
           $_SESSION['auth'] = true;
           $_SESSION['message'] = "Authentique";
        }
        else
        {
         $_SESSION['auth'] = false;
         $_SESSION['message'] = "Non authentique";
        }
    } 
} 
   header('Location: index.php');

mysqli_close($db); // fermer la connexion
?>