<!-- fichier cnam/nfa083/2017-cf1/index.inc.php - 20180604-PBO -->
<!DOCTYPE html>
<html lang='fr'>
<head >
    <meta charset="utf-8">
    <title> Présentation hébergeur</title>
    <meta name="description" content="hébergement web">
    <link rel="stylesheet" type="text/css" href="">
<!-- ENTETE HTML =============================================================== --><?php
     include("inc/entete.inc.php");
     entete("NFA083 CF1 : Question Hébergement",1); /* pour le title et le h1 */ ?>
</head>
<body>
<!-- CONNEXION A LA BDD ======================================================== --><?php
     include("connexion.inc.php");
     $con=connexion("cnamcp09_nfa083_2017"); /* nom de la BDD */ ?>

<!-- SATISFACTION ============================================================== -->
  <section>
    <?php 
    include("inc/form-question.inc.php");
                 include("inc/form-question-recup.inc.php");
                 include("inc/question-insert.inc.php"); ?>
  </section>

<!-- LISTE SATISFACTION ======================================================== -->
  <section>
    <?php include("inc/question-liste.inc.php"); ?>
  </section>

  <footer>Copyright P.BOUQUET</footer>

</body>
</html>
