<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$mdp = $_POST["mdp"];

	$connexion = mysqli_connect("localhost", "root", "root", "tme") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO user (nom,prenom,email,telephone,mdp) VALUES ('" . $nom. "', '" . $prenom. "','". $email. "','" . $telephone. "','". $mdp. "')");
	if($result){
		$db_msg = "Vos informations de contact sont enregistrées avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
		$type_db_msg = "error";
	}
	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="style.css"> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="inscription.js"></script>
	</head>
    <style>
 .card{
     margin-left: auto;
     margin-right: auto;
 }
 
    </style>
</head>
<body style="background-color: #141227;">

   <img src="logoban.png" alt="" height="80" width="100">

   
       
   <br>
       <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h3 class="card-title" style="text-align: center;">Inscription</h3>
                <br>
                <div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                <br><br>
                <input class="form-control" type="text" placeholder="Nom" name="nom">
                <br><br>
                <input class="form-control" type="text" placeholder="Prenom" name="prenom" >
                <br><br>
                <input class="form-control" type="email" placeholder="E-mail" name="email"> 
                <br><br>
                <input class="form-control" type="telephone" placeholder="Telephone" name="telephone"> 
                <br><br>
                <input class="form-control" type="password" placeholder="Mot de passe" name="mdp" >
                <br><br><br>
                <input type="submit" name="send" value="INSCRIPTION " style="margin-right: 00px;background-color: #B88A38;"/>
                <a  class="btn" href="connexion.php" style="margin-left: 200px;background-color: #B88A38;">Retour  </a>

                <br><br>

                <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            
            </div>
            </div>

    </div>
       </div>

</body>
</html>