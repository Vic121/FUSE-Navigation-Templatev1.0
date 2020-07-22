<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>FUSE navigation Template </title>
      <link rel="stylesheet" href="css/fullpage.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/swiper-3.3.1.css">
      <link rel="stylesheet" href="css/cleander.css">
      <link rel="stylesheet" href="css/landingv3.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
	  <link rel='stylesheet' href='https://anandchowdhary.github.io/ionicons-3-cdn/icons.css'>
	  <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<?php include 'header.php';?>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- PRE LOADER -->
	<div class="loader_wrapper">
        <div class="loader">
			<img src="img/mockup/loader.gif" alt="loader">	
        </div>
    </div>
<div id="fullpage">
  <section class="vertical-scrolling section1 active">
  <?php include 'section-1.php';?>

  </section>
  <section class="vertical-scrolling section2">
  <?php include 'section-2.php';?>
  </section>
  <section class="vertical-scrolling section3">
  <?php include 'section-3.php';?>
  </section>
  <section class="vertical-scrolling section4">
  <?php include 'section-4.php';?>
  </section>
  <section class="vertical-scrolling section5">
		<?php include 'section-5.php';?>
  </section> 
  <section class="vertical-scrolling section6">
		<?php include 'section-6.php';?>
  </section>
</div>
    <script  src="js/jquery-1.11.3.js"></script>
    <script  src="js/jquery-3.1.1.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <script  src="js/fullpage.js"></script>
    <script  src="js/index.js"></script>
    <script  src="js/swiper-3.3.1.js"></script>
    <script  src="js/cleander.js"></script>
    <script  src="js/main.js"></script>
</body>

</html>
