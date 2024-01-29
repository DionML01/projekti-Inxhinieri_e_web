<?php
require '../includes/dbconnect.php';

session_start();

if (isset($_SESSION['permission'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>index</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <?php
        include "includes/header.php";
        ?>

        <?php
        switch (@$_GET['page']) {
            case 'users';
                include "users.php";
                break;
            case 'edit_user';
                include 'edit_user.php';
                break;
            case 'delete_user';
                include 'delete_user.php ';
                break;
            case 'posts';
                include 'posts.php';
                break;
            case 'add_post';
                include 'add_post.php';
                break;
            case 'edit_post';
                include 'edit_post.php';
                break;
            case 'delete_post';
                include 'delete_post.php';
                break;
            case 'contacts';
                include 'contacts.php';
                break;
            case 'delete_contact';
                include 'delete_contact.php';
                break;
            case 'show_contact';
                include 'show_contact.php';
                break;
            default:
                include "users.php";
        }
        ?>

        <?php
        include "includes/footer.php";
        ?>
    </body>

    </html>

<?php
} else {
    header('Location: login.php');
}
?>