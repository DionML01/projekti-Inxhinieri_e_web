<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        .admin-label {
            color: red;
            /* Adjust the color as needed */
            font-weight: bold;
            /* Adjust the font-weight as needed */
            margin-left: 5px;
            /* Add some spacing to separate it from the link text */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="admin-label">(ADMIN)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contacts">Contact Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Rest of your HTML content -->

</body>

</html>