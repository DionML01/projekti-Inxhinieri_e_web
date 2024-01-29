<?php
include 'dbconnect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM posts WHERE post_id = :id";
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

$post = $query->fetch();

?>

<style>
    .last-post .container {
        width: 960px;
        height: 350px;
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

    @media only screen and (max-width: 600px) {
        body {
            padding: 0;
            margin: 0;
        }

        .last-post .container {
            width: 100%;
            height: 750px;
        }

        .last-post {
            background-image: none;
        }

        .last-post .container .last-post-image {
            width: 100%;
            margin-top: 50px;
            margin-bottom: 0;
            margin-left: 0;
            margin-right: 0;
        }

        .last-post .container .last-post-image img {
            margin-left: 60px;
        }

        .last-post .container .last-post-text {
            margin-right: 0;
            margin-top: 50px;
        }

        .last-post .container .last-post-text p {
            padding-left: 20px;
            padding-right: 10px;
        }
    }
</style>

<div class="last-post">
    <div class="container">
        <div class="last-post-image">
            <img src="admin/uploads/<?php echo $post['image'] ?>" alt="">
        </div>

        <div class="last-post-text">
            <h2><?php echo $post['title'] ?></h2>
            <br>
            <p>
                <?php echo $post['description'] ?>
            </p>
        </div>
    </div>
</div>