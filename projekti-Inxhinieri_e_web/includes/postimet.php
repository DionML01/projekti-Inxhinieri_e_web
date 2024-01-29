<?php

require 'dbconnect.php';

session_start();

$queryTop = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 1');
$topPost = $queryTop->fetchAll();

$querySecondTop = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 1 OFFSET 1');
$secondtopPost = $querySecondTop->fetchAll();

$queryThirdTop = $pdo->query('SELECT * FROM posts ORDER BY post_id DESC LIMIT 1 OFFSET 2');
$thirdtopPost = $queryThirdTop->fetchAll();

?>

<style>
    .last-post .container {
        width: 960px;
        height: 900px;
        background-color: white;
    }

    .last-post {
        background-image: url("../images/Layer1.png");
    }

    .last-post .container .last-post-image {
        width: 510px;
        height: 260px;
        float: left;
        margin-top: 20px;
        margin-left: 20px;
    }

    .last-post .container .last-post-image img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
    }


    .last-post .container .last-post-text {
        width: 400px;
        height: 260px;
        background-color: lightgray;
        float: right;
        margin-right: 20px;
        margin-top: 20px;
    }

    .last-post .container .last-post-text h2 {
        text-align: center;
    }

    .last-post .container .last-post-text p {
        border-width: 400px;

    }

    .last-post .container .last-post-text p {
        max-width: 100%;
        word-wrap: break-word;
    }

    .last-post .container .post1 {
        width: 300px;
        height: 400px;
        float: left;
        background-color: lightgray;
        margin-left: 20px;
        margin-top: 100px;
        text-align: center;
    }

    .last-post .container .post1 .post1-image img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
    }

    .last-post .container .post2 {
        width: 300px;
        height: 400px;
        float: left;
        background-color: lightgray;
        margin-left: 10px;
        margin-top: 100px;
        text-align: center;
    }

    .last-post .container .post2 .post2-image img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
    }

    .last-post .container .post3 {
        width: 300px;
        height: 400px;
        float: right;
        background-color: lightgray;
        margin-left: 10px;
        margin-right: 20px;
        margin-top: 100px;
        text-align: center;
    }

    .last-post .container .post3 .post3-image img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
        width: auto;
    }

    .last-post .container .post1 .post1-image {
        height: 320px;
        width: 300px;
        margin-top: 0;
    }

    .last-post .container .post2 .post2-image {
        height: 320px;
        width: 300px;
        margin-top: 0;
    }

    .last-post .container .post3 .post3-image {
        height: 320px;
        width: 300px;
        margin-top: 0;
    }

    .last-post .container .post1 p {
        margin-top: 27px;
        font-style: bold;
        font-size: 15pt;
    }

    .last-post .container .post2 p {
        margin-top: 27px;
        font-style: bold;
        font-size: 15pt;
    }

    .last-post .container .post3 p {
        margin-top: 27px;
        font-style: bold;
        font-size: 15pt;
    }


    @media only screen and (max-width: 600px) {
        
        body {
            padding: 0;
            margin: 0;
        }

        .last-post .container {
            width: 100%;
            height: 1500px;
        }

        .last-post {
            background-image: none;
        }

        .last-post .container .last-post-image {
            display: none;
        }

        .last-post .container .last-post-text {
            display: none;
        }

        .last-post .container .post1 {
            margin-left: 45px;
            margin-top: 40px;
            
        }

        .last-post .container .post2 {
            margin-left: 45px;
            margin-top: 50px;
            
        }

        .last-post .container .post3 {
            margin-right: 47px; 
            margin-top: 50px;
        }

    }
</style>

<div class="last-post">
    <div class="container">
        <?php foreach ($topPost as $toppost) : ?>
            <div class="last-post-image">
                <img src="admin/uploads/<?php echo $toppost['image'] ?>" alt="">
            </div>

            <div class="last-post-text">
                <h2><?php echo $toppost['title'] ?></h2>
                <br>
                <p>
                    <?php echo $toppost['description'] ?>
                </p>
            </div>
        <?php endforeach; ?>

        <?php foreach ($topPost as $toppost) : ?>
            <div class="post1">
                    <div class="post1-image">
                        <img src="admin/uploads/<?php echo $toppost['image'] ?>" alt="">
                    </div>
                    <p><a href="index.php?page=post_details&id=<?php echo $toppost['post_id']; ?>"><?php echo $toppost['title'] ?></a></p>
            </div>
        <?php endforeach; ?>

        <?php foreach ($secondtopPost as $topsecondpost) : ?>
            <div class="post2">
                    <div class="post2-image">
                        <img src="admin/uploads/<?php echo $topsecondpost['image'] ?>" alt="">
                    </div>
                    <p><a href="index.php?page=post_details&id=<?php echo $topsecondpost['post_id']; ?>"><?php echo $topsecondpost['title'] ?></a></p>
            </div>
        <?php endforeach; ?>

        <?php foreach ($thirdtopPost as $topthirdpost) : ?>
            <div class="post3">
                    <div class="post3-image">
                        <img src="admin/uploads/<?php echo $topthirdpost['image'] ?>" alt="">
                    </div>
                    <p><a href="index.php?page=post_details&id=<?php echo $topthirdpost['post_id']; ?>"><?php echo $topthirdpost['title'] ?></a></p>
            </div>
        <?php endforeach; ?>

    </div>
</div>
