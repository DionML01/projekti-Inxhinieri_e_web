<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    switch (@$_GET['page']) {
        case 'Home':
            include "includes/header.php";
            include "includes/content.php";
            include "includes/footer.php";
            break;

        case 'Postimet':
            include "includes/header.php";
            include "includes/postimet.php";
            include "includes/footer.php";
            break;

        case 'Patterns':
            include "includes/header.php";
            include "includes/patterns.php";
            include "includes/footer.php";
            break;

        case 'Graphics':
            include "includes/header.php";
            include "includes/graphics.php";
            include "includes/footer.php";
            break;

        case 'Advertise':
            include "includes/header.php";
            include "includes/advertise.php";
            include "includes/footer.php";
            break;

        case 'Sign Up':
            include "includes/contactform.php";
            break;

        case 'post_details':
            include 'includes/header.php';
            include 'includes/post_details.php';
            include 'includes/footer.php';
            break;
            
        default:
            include "includes/header.php";
            include "includes/content.php";
            include "includes/footer.php";
    }
    ?>

</body>
<script src="js/javascript.js"></script>

</html>