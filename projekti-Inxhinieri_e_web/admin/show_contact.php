<?php
include '../includes/dbconnect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM contacts WHERE contact_id = :id";
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

$contact = $query->fetch();

?>

<div class="mt-2">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $contact['client_name'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $contact['subject'] ?></h6>
                <p class="card-text"><?php echo $contact['message'] ?></p>
            </div>
        </div>
    </div>
</div>