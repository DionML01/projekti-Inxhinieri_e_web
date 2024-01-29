<?php

require '../includes/dbconnect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = 'SELECT * FROM posts WHERE post_id = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

$post = $query->fetch();


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_file = time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "uploads/" . $image_file);

    $sql = "UPDATE posts SET title = :title, description = :description, image = :image WHERE post_id = :id";
    $query = $pdo->prepare($sql);
    $query->bindParam(':title', $title);
    $query->bindParam(':description', $description);
    $query->bindParam(':image', $image_file);
    $query->bindParam(':id', $id);
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
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'] ?>" required maxlength="30">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" value="<?php echo $post['description'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                    <hr>
                    <img src="uploads/<?php echo $post['image'] ?>" height="200">
                </div>
                <input type="submit" name="submit" value="Add Post" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>