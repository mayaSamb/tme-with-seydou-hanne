<?php
//Base de donnée
if(!empty($_POST["send"])) {
	$nom = $_POST["nom"];
    $prix = $_POST["prix"];
	
	$conn = mysqli_connect("localhost", "root", "root", "tme") or die("Erreur de connexion: " . mysqli_error($conn));
	$result = mysqli_query($conn, "INSERT INTO produit (nom,prix) VALUES ('" . $nom. "', '" . $prix. "')");
	if($result){
		$db_msg = "Votre produit a ete enregistré avec succés.";
		$type_db_msg = "success";
	}else{
		$db_msg = "Erreur lors de la tentative d'enregistrement de produit.";
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
    <title>Mes produits</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link  rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="produit.js"></script>
</head>
<body>
    <nav class="navbar navbar-light " style = "background-color: #141227;">
  
    
        <a class="navbar-brand" href="#">
           <img src="navlogo.png" width="180" height="30" class="d-inline-block align-top" alt="">
          </a>
          
        
      <nav class="nav nav-pills nav-fill w-25" id="nav"  >
        
        <a class="nav-item nav-link" id= "textmenu"  href="profil.php">PROFIL</a>
      
        <a class="nav-item nav-link" id= "textmenu"  href="Marche.php">MARCHE</a> 
        
        <a class="nav-item nav-link active" style = "background-color: #B88A38;"  href="#">PRODUITS</a>
       
          </nav>
              </nav>

              <br>

              <div class="card bg-light mb-3 w-75" id="infoproduit">
    
                <div class="card-body  ">
<?php
$dsn = 'mysql:dbname=tme;host=127.0.0.1;port=8889';;
$username = 'root';
$pwd = 'root';
$bd = new PDO($dsn,$username,$pwd);
$req = $bd->query('SELECT * FROM `produit`');
$req->execute();

$donnees = $req->fetchAll(PDO::FETCH_ASSOC);

?>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Nom du produit           </th>
                            <th scope="col">Prix</th>
                            <th scope="col">Action</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($donnees as $key => $value) { ?> 
                          <tr>
                    
                    <th scope="row"><?= $value['Nom'] ?></th>
                    <th scope="row"><?= $value['Prix'] ?></th>
                    <td> <div class="btn"><i class="bi bi-pencil-fill" ></i></div>    </i> <div class="btn"><i class="bi bi-x"></i></div></i>  </td>
                          </tr>
                          <?php } ?>        </tbody>

                        
                      </table>

                      <br> <br>
                      
    <button type="button" class="btn w-25" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
       Ajouter un produit
      </button>
     <div>      </div>
      
      
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Informations produit</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div id="box">
		              <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
                    <label for="nom" class="form-label">Nom du produit</label>
                    <input type="text" class="form-control"  placeholder="nom" name="nom">
                    <br>
                    <label for="nom" class="form-label">Prix</label>
                    <input type="text" class="form-control" placeholder="Prix" name="prix">
                    <br>
                    <button type="button" class="btn" data-bs-dismiss="modal"> <a href="produit.php" > Annuler </a> </button>
              <input type="submit" name="send" value="ENREGISTER"/>
             
              <div id="statusMessage"> 
            <?php if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } ?>
           
            </div>
                   
                    </form>
            </div>
          
              
            
            
            </div>
          </div>
        </div>
      </div>

      

                
      
                     

                </div>
              </div>  
</body>
</html>