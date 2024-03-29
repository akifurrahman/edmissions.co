<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDMISSIONS.APP - Password Assistance</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body>
    <div class="container">
        <div class="row d-flex align-center justify-content-center">

            <div class="col-sm-12">
                <span id="title">ED<span class="missions-title">MISSIONS</span>.APP</span>
            </div>

            <div class="col-sm-12 mt-5 mb-5 ml-2 mr-2 col-md-4 offset-md-4 form">
                <form action="new-password.php" class="needs-validation" method="POST" autocomplete="off" novalidate>
                    <!-- <form action="new-password.php" method="POST" autocomplete="off"> -->
                    <h2 class="text-center">Enter a New Password</h2>
                    <!-- <p class="text-center">Please enter a new password.</p> -->
                    <p class="text-center">Please enter a password that you do not use on any other website.</p>

                    <?//php 
                    //if(isset($_SESSION['info'])){
                       ?>
                    <!-- <div class="alert alert-success text-center"> -->
                    <?//php echo $_SESSION['info']; ?>
                    <!-- </div> -->
                    <?//php
                    //}
                    ?>

                    <?php
                    if(count($errors) > 0){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">

                        <input class="form-control" type="password" name="password" placeholder="Create new password"
                            pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{10,}$" required>

                        <!-- <input class="form-control" type="password" name="password" placeholder="Create new password"
                            required> -->
                        <div class="invalid-feedback">
                            Please enter atleast 10 characters with a number, symbol,
                            capital and a small letter.
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password"
                            pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{10,}$" required>
                        <!-- <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password"
                            required> -->
                        <div class="invalid-feedback">
                            Passwords do not match.
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Change Password">

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script>
(function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>

</html>