<?php

require '../includes/dbconnect.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_file = time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "uploads/".$image_file);

    $sql = "INSERT INTO posts(title, description, image) VALUES (:title,:description,:image)";
    $query = $pdo->prepare($sql);
    $query->bindParam('title', $title);
    $query->bindParam('description', $description);
    $query->bindParam('image', $image_file);

    $query->execute();
    header("Location: index.php?page=posts");
}

?>

<div class="mt-2">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add post
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                </div>
                <input type="submit" name="submit" value="Add Post" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>