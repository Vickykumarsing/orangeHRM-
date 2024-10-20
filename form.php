<?php include 'local/database.php'; ?>

<?php




$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$product = $_POST['product'];
$sql = "INSERT INTO `inventery` (`username`, `name`, `email`, `number`, `product`, `created`) VALUES ('$username', '$name', '$email', '$number', '$product', current_timestamp())";
$result = mysqli_query($conn, $sql);
 
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>orangeHRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">

</head>

<body>
    <div class="container-fluid" id="inventery_list" name="inventery_list">
        <div class="container row row-cols-12" id="hi">
            <form action="form.php" method="post">
                <div class="mb-5 col">
                    <label for="" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" min="10" max="50" placeholder="Please Enter your username">
                    <div id="emailHelp" class="form-text">Minimum 10 word to maximum 50 </div>
                </div>

                <div class="mb-5 col">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" min="30" max="50" placeholder="Please Enter your full namme">
                    <div id="emailHelp" class="form-text">Minimum 30 word to maximum 50 </div>
                </div>

                <div class="mb-5 col">
                    <label for="" class="form-label">Email_id</label>
                    <input type="email" class="form-control" id="email" name="email" min="10" max="50" aria-describedby="emailHelp"placeholder="Please Enter your email_id">
                    <div id="emailHelp" class="form-text">Minimum 10 word to maximum 50 </div>
                </div>

                <div class="mb-5 col">
                    <label for="" class="form-label">Mobile number</label>
                    <input type="number" class="form-control" id="number" name="number" min="10" max="10" placeholder="Please Enter your mobile number">
                    <div id="emailHelp" class="form-text">Minimum 10 digit to maximum 10</div>
                </div>

                <div class="mb-5  col">
                    <label for="product" class="form-label">Producat</label>
                    <input type="text" class="form-control" id="product" name = "product" placeholder="Please Enter your producat">
                    <div id="emailHelp" class="form-text">Minimum 10 word to maximum 50 </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>