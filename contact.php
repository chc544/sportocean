<?php include 'includes/top.php'; ?>

<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] !='') {

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['name'];
    $message = $_POST['message'];

    $to = "chri26gz@edu.easj.dk";
    $body = "";

    $body .= "Fra: " .$userName. "\r\n";
    $body .= "Email: " .$userEmail. "\r\n";
    $body .= "Besked: " .$message. "\r\n";

    mail($to,$messageSubject,$body);

    $message_sent = true;
}
?>

<div class="container">
    <h3 class="headline mt-5">Send us a message</h3>
    <hr>
    <p class="subheading">All fields must be filled.</p>

    <div class="row">
        <form action="index.php" method="POST" class="form col-md-6 col-lg-6 col-xl-6 col-sm-12">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name">
                <label for="floatingInput">Navn</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" id="message" name="message" style="height: 100px"></textarea>
                <label for="floatingInput">Message</label>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mb-4">Send message</button>
            </div>
        </form>

        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12">
            <p class=""><i class="fas fa-envelope-open-text"></i> sportocean@sportocean.com</p>
            <p class=""><i class="fas fa-map-marker-alt"></i> Head Office located in Denmark, Copenhagen - Adressevej 20 - 1400</p>
            <p class=""><i class="fas fa-phone"></i> Phone number: +45 1234 4321</p>
        </div>
    </div>

    <div class="space-about"></div>
</div>
<?php include 'includes/bottom.php'; ?>
