<!-- <script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("blog-header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("my-2")
  } else {
    navbar.classList.remove("my-2");
  }
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "10px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}

</script>

<style>
#navbar {
  overflow: hidden;
  background-color: black;
  opacity: 60%;
  padding: 1px 10px; 
  transition: 0.4s; 
  position: fixed; /* Sticky/fixed navbar */
  width: 100%;
  top: 0; /* At the top */
  z-index: 99;
}

/* Style the navbar links */
#navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 20px;
  text-decoration: none;
  font-size: 12px;
  line-height: 60px;
  border-radius: 2px;
}


/* Links on mouse-over */
#navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link */
#navbar a.active {
  background-color: dodgerblue;
  color: white;
}

/* Display some links to the right */
#navbar-right {
  float: right;
}

/* Add responsiveness - on screens less than 580px wide, display the navbar vertically instead of horizontally */
@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important; /* Use !important to make sure that JavaScript doesn't override the padding on small screens */
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style> -->



<!-- <header class="blog-header border-bottom shadow-sm"> -->
    <!-- <div class="container-fluid" style="background-color: #011329; opacity: 0.5;">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/logo-puslatdiksarmil.png" alt="dev culture logo" style="width: 40px; height: auto;">
            </a>
<?php if ($loggedin && $_SESSION["level"] == 'admin') : ?>
				<nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
					<a class="p-2 px-5 text-muted" href="edit_artikel.php">Edit Artikel</a>
					<a class="p-2 px-5 text-muted" href="edit_profil.php">Edit Profil</a>
					<a class="p-2 px-5 text-muted" href="edit_sejarah.php">Edit Sejarah</a>
					<a class="p-2 px-5 text-muted" href="edit_organisasi.php">Edit Organisasi</a>
					<a class="p-2 px-5 text-muted" href="edit_pejabat.php">Edit Pejabat</a>
					<a class="p-2 px-5 text-muted" href="edit_galeri.php">Edit Galeri</a>
                </nav>
<?php else : ?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
					<a class="p-2 px-5 text-muted" href="artikel.php">Artikel</a>
					<a class="p-2 px-5 text-muted" href="profil.php">Profil</a>
					<a class="p-2 px-5 text-muted" href="sejarah.php">Sejarah</a>
					<a class="p-2 px-5 text-muted" href="organisasi.php">Organisasi</a>
					<a class="p-2 px-5 text-muted" href="pejabat.php">Pejabat</a>
					<a class="p-2 px-5 text-muted" href="galeri.php">Galeri</a>
                </nav>
<?php endif;  ?>

            <a class="btn btn-outline-success" href="<?= ($loggedin && $_SESSION["level"] == 'admin') ? 'logout.php' : 'login.php'; ?>">
                <?= ($loggedin && $_SESSION["level"] == 'admin') ? 'Logout' : 'Login Admin'; ?>
            </a> -->
			
	<!-- <div id="navbar">
    <a href="index.php" class="my-0 mr-md-auto" style="width: 3rem;">
      <img src="img/logo/logo-puslatdiksarmil.png" alt="logo-puslatdiksarmil" style="width: 50px; height: auto;">
    </a>
    <div id="navbar-right">
    	<nav class="my-2 my-md-0 mr-md-3">
        <?php if ($loggedin && $_SESSION["level"] == 'admin') : ?>
          <a href="index.php">Home</a>
          <a href="edit_artikel.php">Edit Artikel</a>
          <a href="categories.php">Edit Kategori</a>
          <a href="edit_profil.php">Edit Profil</a>
          <a href="edit_sejarah.php">Edit Sejarah</a>
          <a href="edit_organisasi.php">Edit Organisasi</a>
          <a href="edit_pejabat.php">Edit Pejabat</a>
          <a href="edit_galeri.php">Edit Galeri</a>
        <?php else : ?>
              <a href="index.php">Home</a>
    					<a href="artikel.php">Artikel</a>
    					<a href="profil.php">Profil</a>
    					<a href="sejarah.php">Sejarah</a>
    					<a href="organisasi.php">Organisasi</a>
    					<a href="pejabat.php">Pejabat</a>
    					<a href="galeri.php">Galeri</a>
        <?php endif;  ?>
      <a class="btn btn-outline-success" selected href="<?= ($loggedin && $_SESSION["level"] == 'admin') ? 'logout.php' : 'login.php'; ?>">
                <?= ($loggedin && $_SESSION["level"] == 'admin') ? 'Logout' : 'Login'; ?>
            </a>
    	</nav>

    </div>
  </div> -->
            
                

        <!-- </div>
    </div>
</header> -->

<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/navbar.css">
  </head>
      <body>
        <header class="ScriptHeader" style="margin-top: 80px">
        <div class="rt-container">
    	    <div class="col-rt-12">
          </div>
        </div>

        </header>
        <section>
            <div class="rt-container">
                  <div class="col-rt-12">
                      <div class="Scriptcontent">
                      
        <!-- partial:index.partial.html -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <div class="navbar navbar-fixed-top container-fluid" id="navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand">Brand</a>
            </div>
            <div class="collapse navbar-right navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
                <li>Login</li>
                <li>Signup</li>
              </ul>
            </div>
          </div>
        <!-- partial -->
                
                  
                </div>
            </div>
        </div>
</section>
     
<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    
    document.getElementById("navbar").style.background = "#501e27";
  } else {
   
    document.getElementById("navbar").style.background = "none";
  }
}
</script>
    </body>

</html>