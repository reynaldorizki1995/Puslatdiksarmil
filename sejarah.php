<!-- Include Head -->
<?php include "assest/head.php"; 
$stmt = $conn->prepare("SELECT * FROM sejarah");
$stmt->execute();
$sejarah = $stmt->fetch();
?>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

<!-- Custom CSS -->
<!-- <link href="css/home.css" rel="stylesheet"> -->
<link type="text/css" rel="stylesheet" href="css/style.css" />
<!-- <custom corousell> -->
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    .bg-div {
    background-position: center center;
    background-repeat: no-repeat;
    margin: -1px 0px 0px -1px;
    padding: 0px;
    width: 100%;
    }

    .jumbotron {
  position: relative;
  overflow: hidden;
  background-color:black;
  height: 600px;
}
.jumbotron video {
  position: absolute;
  z-index: 1;
  top: 0;
  width:100%;
  height: 100%;
  /*  object-fit is not supported on IE  */
  object-fit: cover;
  opacity:0.5;
}
.jumbotron .container {
  z-index: 2;
  position: relative;
}
</style>

<title>Home</title>
</head>


<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
<main class="main">
    <div class="bg-div">  
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="jumbotron jumbotron-fluid">

				<video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
				<source src="video/PROFIL KODIKLATAL JUNI 2022.mp4" data-src="video/PROFIL KODIKLATAL JUNI 2022.mp4" type="video/mp4">
				</video>

				<div class="container text-white" style="padding-top: 250px;">
					<h1 class="display-4"><h1>PUSLATDIKSARMIL TNI AL</h1>
					<p class="lead"><p>Pusat Latihan Pendidikan Dasar Militer</p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</div>
			  <!-- /.container -->
			</div>
			<!-- /.jumbotron -->
			<!-- </carousell> -->


			<!-- Jumbotron -->
			<!--
			<div class="jumbotron text-center p-0 mb-0">
				<div class="bg-div px-5 d-flex align-items-center">

					<div class="text-left w-50">
						<h1 class="display-4 text-white">Welcome to Dev Culture!</h1>
						<h2 class="display-5 text-white">Discover Dev tutorial and articles that you can read completely for free!</h2>

					</div>


				</div>
			</div> -->
			<!-- /Jumbotron -->

			<!-- Profile -->
			<div class="section section-grey">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2>Sejarah</h2>
							</div>
						</div>
						<?= $sejarah["isi"] ?>
					</div>

				</div>
			</div>
		</div>	
	</div>
</main>
</body>