<?php
    include ("connexion.php");
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
    ?>