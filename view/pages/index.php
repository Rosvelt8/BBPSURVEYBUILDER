<?php
require('../../controller/signInController.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BBP Survey Builder</title>
    <link rel="stylesheet" href="../assets/css/style-login.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="" method="POST" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="../assets/img/logo.png" alt="easyclass" />
                <h4>BBP Survey Builder</h4>
              </div>

              <div class="heading">
                <h2>Vous revoilà!</h2>
                <h6>Pas encore inscrit?</h6>
                <a href="#" class="toggle">S'inscrire</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required name="emailLog"
                  />
                  <label>Identifiant ou email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="password"
                  />
                  <label>Mot de passe</label>
                </div>

                <input type="submit" name="login" value="Connecter" class="sign-btn" />
                <span>
                  <?php
                  if(isset($errorMessage)){
                    echo $errorMessage;
                    echo $test;
                  }
                  ?>
                </span>
                <p class="text">
                  mot de passes ou informations oubliées?
                  <a href="#">Besoin d'aide?</a> 
                </p>
              </div>
            </form>

            <form action="" method="POST" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="../assets/img/logo.png" alt="easyclass" />
                <h4>BBP Survey Builder</h4>
              </div>

              <div class="heading">
                <h2>Rejoindre!</h2>
                <h6>Vous avez déja un compte?</h6>
                <a href="#" class="toggle">Se connecter</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text" name="nom"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Nom</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="text" name="pays"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Pays</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email" name="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="number"
                    minlength="4" name="phone"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Telephone (+237)</label>
                </div>
                <div class="input-wrap">
                  <select name="subscription" class="input-field" id="">
                    <option value=""></option>

                  <?php foreach($typesSubscription as $typeSubscription){?>
                    
                    <option value="<?= $typeSubscription['idsubscriptiontype'] ?>"><strong><?= $typeSubscription['amount'] ?> FCFA: <?= $typeSubscription['label'] ?></strong></option>
                    
                    <?php } ?>
                  </select>
                  <label>Subscription</label>
                </div>

                <input type="submit" name="inscription" value="Sign Up" class="sign-btn" />

                
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../assets/img/image1.png" class="image img-1 show" alt="" />
              <img src="../assets/img/image2.png" class="image img-2" alt="" />
              <img src="../assets/img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Créer votre propre sondage</h2>
                  <h2>Optenez des avis fiables</h2>
                  <h2>Prenez en main vos activités</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="../assets/js/app.js"></script>
  </body>
</html>
