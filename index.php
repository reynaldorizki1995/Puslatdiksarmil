<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

// Get Latest articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id ORDER BY `article_created_time` DESC  LIMIT 9");
$stmt->execute();
$articles = $stmt->fetchAll();

// Get Categories
$stmt = $conn->prepare("SELECT *,COUNT(*) as article_count FROM `article` INNER JOIN category ON id_categorie=category_id GROUP BY id_categorie");
$stmt->execute();
$categories = $stmt->fetchAll();

// Get Most Read Articles
$stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN category ON id_categorie=category_id order by RAND() LIMIT 4");
$stmt->execute();
$most_read_articles = $stmt->fetchAll();

?>



<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
<href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

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
  height: 650px;
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

        <!-- Carousell -->
       <div class="bg-div">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
<div class="jumbotron jumbotron-fluid">

	<video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
    <source src="video/PROFIL KODIKLATAL JUNI 2022.mp4" data-src="video/PROFIL KODIKLATAL JUNI 2022.mp4" type="video/mp4">
	</video>

	<div class="container text-white" style="padding-top: 300px;">
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

        <!-- Latest Articles -->
        <div class="section section-grey">

            <!-- container -->
            <div class="container">

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2>Latest Articles</h2>
                        </div>
                    </div>

                    <?php foreach ($articles as $article) : ?>

                        <!-- post -->
                        <div class="col-md-4">
                            <div class="post">
                                <a class="post-img" href="single_article.php?id=<?= $article['article_id'] ?>">
                                    <img src="img/article/<?= $article['article_image'] ?>" alt="">
                                </a>
                                <di class="post-body">

                                    <div class="post-meta">
                                        <a class="post-category cat-1" href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" style="background-color:<?= $article['category_color'] ?>"><?= $article['category_name'] ?></a>
                                        <span class="post-date">
                                            <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                                        </span>
                                    </div>

                                    <h3 class="post-title"><a href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a></h3>

                                </di>
                            </div>
                        </div>
                        <!-- /post -->

                    <?php endforeach;  ?>

                    <div class="clearfix visible-md visible-lg"></div>
                </div>
                <!-- /row -->

            </div>
            <!-- /container -->
        </div><!-- /Latest Articles -->

        <!-- Most Read -->
        <div class="section section-grey">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2>Most Read</h2>
                                </div>
                            </div>

                            <?php foreach ($most_read_articles as $article) : ?>

                                <!-- post -->
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img" href="single_article.php?id=<?= $article['article_id'] ?>">
                                            <img src="img/article/<?= $article['article_image'] ?>" alt="">
                                        </a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a href="articleOfCategory.php?catID=<?= $article['category_id'] ?>" class="post-category" style="background-color:<?= $article['category_color'] ?>">
                                                    <?= $article['category_name'] ?>
                                                </a>
                                                <span class="post-date">
                                                    <?= date_format(date_create($article['article_created_time']), "F d, Y ") ?>
                                                </span>
                                            </div>

                                            <h3 class="post-title"><a href="single_article.php?id=<?= $article['article_id'] ?>"><?= $article['article_title'] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /post -->

                            <?php endforeach;  ?>

                            <!-- post -->
                            <!-- <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /post -->

                            <!-- post -->
                            <!-- <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /post -->

                            <!-- post -->
                            <!-- <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-1.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-4" href="category.html">Css</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /post -->

                            <!-- post -->
                            <!-- <div class="col-md-12">
                                <div class="post post-row">
                                    <a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-meta">
                                            <a class="post-category cat-3" href="category.html">Jquery</a>
                                            <span class="post-date">March 27, 2018</span>
                                        </div>
                                        <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /post -->

                            <!-- <div class="col-md-12">
                                <div class="section-row">
                                    <button class="primary-button center-block">Load More</button>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-md-4">

                        <!-- catagories -->
                        <div class="aside-widget">
                            <div class="section-title">
                                <h2>Categories</h2>
                            </div>
                            <div class="category-widget">

                                <ul>
                                    <!-- /category -->
                                    <?php foreach ($categories as $category) : ?>
                                        <li>
                                            <a href="articleOfCategory.php?catID=<?= $category['category_id'] ?>"> <?= $category["category_name"] ?>
                                                <span style="background-color: <?= $category["category_color"] ?>"> <?= $category["article_count"] ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <!-- /category -->
                                </ul>
                            </div>
                        </div>
                        <!-- <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                    <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                    <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                    <li><a href="#" class="cat-3">CSS<span>35</span></a></li> -->
                        <!-- /catagories -->

                        <!-- tags -->
                        <!-- <div class="aside-widget">
                            <div class="tags-widget">
                                <ul>
                                    <li><a href="#">Chrome</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Tutorial</a></li>
                                    <li><a href="#">Backend</a></li>
                                    <li><a href="#">JQuery</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">JavaScript</a></li>
                                    <li><a href="#">Website</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- /tags -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div><!-- /Most Read -->

    </main><!-- </Main> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script>
    function deferVideo() {

//defer html5 video loading
$("video source").each(function() {
var sourceFile = $(this).attr("data-src");
$(this).attr("src", sourceFile);
var video = this.parentElement;
video.load();
// uncomment if video is not autoplay
//video.play();
});

}
window.onload = deferVideo; </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>