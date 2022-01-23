<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$mdp = $_POST["mdp"];

	$connexio = mysqli_connect("localhost", "root", "root", "tme") or die("Erreur de connexion: " . mysqli_error($connexio));
	$result = mysqli_query($connexio, 'UPDATE user SET telephone="'.$_POST['telephone'].'",prenom="'.$_POST['prenom'].'",email="'.$_POST['email'].'",mdp="'.$_POST['mdp'].'" WHERE nom="'.$_POST['nom'].'"');
	

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link  rel="stylesheet" href="style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="inscription.js"></script> 
</head>
<body>
<nav class="navbar navbar-light " style = "background-color: #141227;">
  <div class="container"></div>
    <div class="row">
      <div class="col"></div>
      <a class="navbar-brand" href="#">
         <img src="navlogo.png" width="180" height="30" class="d-inline-block align-top" alt="">
        </a>
        </div>
      </div>
      
    <nav class="nav nav-pills nav-fill w-25" id="nav"  >
      <div class="col">
      <a class="nav-item nav-link active" style = "background-color: #B88A38;" href="#">PROFIL</a>
    </div>
    <div class="col"></div>
      <a class="nav-item nav-link" id= "textmenu"  href="Marche.php">MARCHÉ</a> </div>
      <div class="col">
      <a class="nav-item nav-link" id= "textmenu"  href="produit.php">PRODUITS</a>
      </div>
        </nav>
            </nav>
          </div>
</div>
<br>

<div class="card bg-light mb-3 w-75   " id="infoprofil">
    
    <div class="card-body  ">
        <img src="profil.png" alt="Admin" class="rounded-circle " width="150" id="photoprofil">
<div id="box">
		  <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                <br><br>
                <div class="alert alert-danger" role="alert">
  vous ne pouvez pas modifiez votre nom !!!
</div>
       <h6 class="fw-bold">Nom</h6> <div class="p-3 border bg-light rounded-pill"><input class="form-control" type="text" placeholder="Nom" name="nom"></div> <br>

       <h6 class="fw-bold">Prenom</h6> <div class="p-3 border bg-light rounded-pill"><input class="form-control" type="text" placeholder="Prenom" name="prenom"></div> <br>


       <h6 class="fw-bold">E-mail</h6> <div class="p-3 border bg-light rounded-pill"><input class="form-control" type="text" placeholder="email" name="email"></div><br>

       <h6 class="fw-bold">Telephone</h6> <div class="p-3 border bg-light rounded-pill"><input class="form-control" type="text" placeholder="telephone" name="telephone"></div><br>

       <h6 class="fw-bold">Mot de passe </h6> <div class="p-3 border bg-light rounded-pill"><input class="form-control" type="text" placeholder="mot de passe " name="mdp"></div><br>


       
       
    </div>



    <input type="submit" name="send" value="MODIFIER " style="margin-right: 00px;background-color: #B88A38;"/>
      <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
            
            </div>
            </div>
     <div>      </div>
      
      
      
  </div>

 


</body>
</html>