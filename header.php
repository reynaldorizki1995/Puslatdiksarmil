<script>
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
        background-color: #fffff;
        padding: 20px 10px; 
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
        padding: 12px;
        text-decoration: none;
        font-size: 12px;
        line-height: 25px;
        border-radius: 4px;
      }

      /* Style the logo */
      #navbar #logo {
        font-size: 35px;
        font-weight: bold;
        transition: 0.4s;
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
</style>



<header class="blog-header border-bottom shadow-sm">
<div id="navbar">
    <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
      <img src="img/logo/logo-puslatdiksarmil.png" alt="dev culture logo" style="width: 70px; height: auto;">
    </a>
  <div id="navbar-right">
    <nav class="my-2 my-md-0 mr-md-3">
    <?php if ($loggedin && $_SESSION["level"] == 'admin') : ?>
          <a href="index.php">Home</a>
					<a href="edit_artikel.php">Edit Artikel</a>
          <a href="categories.php">Edit kategori</a>
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
              <a class="btn btn-outline-success" href="<?= ($loggedin && $_SESSION["level"] == 'admin') ? 'logout.php' : 'login.php'; ?>">
                  <?= ($loggedin && $_SESSION["level"] == 'admin') ? 'Logout' : 'Login Admin'; ?>
              </a>
    </nav>
  </div>
</div>
            
    
</header>