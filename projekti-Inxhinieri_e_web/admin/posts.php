<?php
include('../includes/dbconnect.php');
$query = $pdo->query('SELECT * FROM posts');
$posts = $query->fetchAll();
?>

<div class="mt-2">
<div class="container">
    <a href="index.php?page=add_post" class="btn btn-sm btn-primary">Add Post</a>
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($posts as $post) : ?>
                <tr>
                    <td><?php echo $post['post_id']; ?></td>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['description']; ?></td>
                    <td><?php echo $post['image']; ?></td>
                    <td><?php echo $post['date_add']; ?></td>
                    <td><a href="index.php?page=edit_post&id=<?php echo $post['post_id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="index.php?page=delete_post&id=<?php echo $post['post_id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
