<!-- Include Head -->
<?php include "assest/head.php"; ?>
<!-- Google font -->
<head>
	<?php
			//$profil_id = $_GET['profil_id'];
			$stmt = $conn->prepare("SELECT * FROM profil");
			$stmt->execute();
			$profil = $stmt->fetch();

			// Get Article Info
			// $stmt = $conn->prepare("SELECT * FROM `profil` INNER JOIN `author` ON `article`.id_author = `author`.author_id  WHERE `article_id` = ?");
			// $stmt->execute([$article_id]);
			// $article = $stmt->fetch();
			
			// Get Category of article
			// $stmt = $conn->prepare("SELECT * FROM `profil` WHERE `profil_id` = ?");
			// $stmt->execute([$profil_id["profil_id"]]);
			// $profil = $stmt->fetch();
			
			// Get Author's articles
			// $stmt = $conn->prepare("SELECT profil_title, profil_id FROM `article` WHERE id_author = ? LIMIT 4");
			// $stmt->execute([$article["id_author"]]);
			// $articles = $stmt->fetchAll();
			
			// // Get Comments
			// $stmt = $conn->prepare("SELECT * FROM `article` INNER JOIN `comment` WHERE `article`.`article_id`= `comment`.`id_article` AND `article`.`article_id` = ? ORDER BY comment_id DESC");
			// $stmt->execute([$article_id]);
			// $comments = $stmt->fetchAll();
	?>
			
			<!-- Custom CSS -->
			<link type="text/css" rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/single_article.css">
			
			<title>Profil</title>

</head>


<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- /Header -->

    <!-- Main -->
    <main role="main" class="bg-l py-4">

        <div class="container">

            <div class="row">

                <!-- Article -->
                <div class="content bg-white col-lg-9 p-0 border border-muted">


                    <!-- Post Image -->
                    <center><img src="img/article/<?= $profil["profil_image"] ?>"></center>

                    <!-- Post Content -->
                    <div class="post__content w-75 mx-auto">
                        <div class="post-head text-center my-5">
                            <h1 class="post__title">
                                <?= $profil["profil_title"] ?>
                            </h1>

                        </div>

                        <div class="post-body text-break">

                            <?= $profil["profil_content"] ?>

                        </div>

                        

                    </div>


                </div><!-- /Article -->

               
        </div>

    </main><!-- /Main -->

</body>