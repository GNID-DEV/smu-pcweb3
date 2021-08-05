<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ding Jen Han | PCWEB03</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- vendor/bootstrap/css/bootstrap.min.css -->

  <!-- Custom fonts for this template -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> <!-- vendor/fontawesome-free/css/all.min.css -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <?php include 'inc/nav.php' ?>

  <!-- Header -->
  <?php include 'inc/header.php' ?>

  <!-- About Section -->
  <?php include 'inc/about.php' ?>

  <!-- Quiz Section -->

  <?php
  # Load Quiz Randomly
  $quizID = rand(1, 3);
  echo "<input type=\"hidden\" value=\"$quizID\">";

  if ($quizID == 1) {
    include 'inc/quiz_1.php';
  } elseif ($quizID == 2) {
    include 'inc/quiz_2.php';
  } elseif ($quizID == 3) {
    include 'inc/quiz_3.php';
  } else {
    include '#';
  }

  ?>

  <!-- Sign up Section -->
  <?php include 'inc/sign_up.php' ?>

  <!-- Footer -->
  <?php include 'inc/footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>