<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    body {
        background-image: url(images/Layer1.png);
    }

    .container {
        width: 800px;
        margin: 0 auto;
        background-color: white;
        height: 1000px;
    }

    @media only screen and (max-width: 600px) {
        .container {
            width: 100%;
        }
    }
</style>

<div class="container">
    <p>Return to <a href="index.php?page=Home">Home Page</a></p>
    <form action="includes/contact_post.php" method="post">
        <fieldset>
            <legend>Sign Up</legend>
            <div class="form-group">
                <label for="client_name">Full Name:</label>
                <input type="text" placeholder="Name Surname" name="client_name" id="client_name" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <br>
            <input type="submit" value="Send" name="submit" class="btn btn-primary">
        </fieldset>
    </form>
</div>
