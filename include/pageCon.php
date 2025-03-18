<?php
// Inclure le fichier de configuration de connexion

include("connexion.php");

echo "<h1>Bonjour</h1>";
echo "<div class='banner'>
<p> Welcome to the database </p>
</div>";
echo "<div class='container'>
<form method='POST' action='index.php'>
  <label for='nom'><b>Nom :</b></label>
  <input name='nom' type='text' placeholder='Entrer votre nom' id='nom' required> <br><br>

  <label for='mdp'><b>Mot de passe :</b></label>
  <input name='mdp' type='password' placeholder='Entrer votre mot de passe' id='mdp' required> <br></div>";

echo "<button type='submit' id='submit-btn'>Connexion</button> <br><br>";

?>

<?php
// Si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les valeurs du formulaire
  $name = mysqli_real_escape_string($CONNEXION, $_POST['nom']);
  $mdp = mysqli_real_escape_string($CONNEXION, $_POST['mdp']);

  // Requête pour vérifier si le nom et le mot de passe existent dans la base de données
  $query = "SELECT * FROM users WHERE name = '$name' AND mdp = '$mdp'";
  $result = mysqli_query($CONNEXION, $query);

  // Vérification de l'existence de l'utilisateur
  if (mysqli_num_rows($result) > 0) {
      header("Location: client.php");
  } else {
      echo "<h2>Identifiants incorrects. Essayez encore.</h2>";
  }
}
?>























<?php
/* 
        echo "<h1>Bonjour</h1>";
        echo "<div class='banner'>
        <p> Welcome to the database </p>
        </div>";
        echo "<div class='container'>
    <form method='POST' action='pageCon.php'>
      <label for='nom'><b>Nom :</b></label>
      <input name='nom' type='text' placeholder='Entrer votre nom' id='nom' required> <br><br>
      
      <label for='mdp'><b>Mot de passe :</b></label>
      <input name='mdp' type='password' placeholder='Entrer votre mot de passe' id='mdp' required> <br> </div>";

      echo "<button type='submit' id='submit-btn'>Connexion</button> <br><br>"
      */
    ?>
