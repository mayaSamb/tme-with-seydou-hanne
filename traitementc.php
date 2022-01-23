<?php

function isInBD($login, $mdp){
    // si il ya une personne avec le login et le mdp dans la bd return true
    // sinon return false;
    $dsn = 'mysql:dbname=tme;host=127.0.0.1;port=8889';;
    $username = 'root';
    $pwd = 'root';
    $bd = new PDO($dsn,$username,$pwd);
    $req = $bd->query(
        'SELECT * FROM `user` where email= "'.$login.'" and mdp= "'.$mdp.'"');
    $req->execute();
    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    if(count($donnees) > 0) return true;
    else return false;
}

$inbd = isInBD($_POST["login"], $_POST["mdp"]);
if($inbd)
header( header: 'Location: profil.php?msg=erreur');

else
header( header: 'Location: inscription.php?msg=nosubmit');

?>