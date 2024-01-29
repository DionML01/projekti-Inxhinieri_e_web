
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=webdb", "root", "");
} catch (PDOException $pdo) {
    die("Unsuccessful connection");
}
?>

<?php 

    if(isset($_POST['submit'])){
        $client_name = $_POST['client_name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contacts(client_name,subject,message) VALUE (:client_name, :subject, :message)";
        $query = $pdo->prepare($sql);

        $query->bindParam('client_name',$client_name);
        $query->bindParam('subject',$subject);
        $query->bindParam('message',$message);

        $query->execute();

        header("Location: ../");
        exit();

    }

?>