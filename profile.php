<?php include 'processForm.php';
$sql = "SELECT * FROM users LIMIT 6";
$results = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);

$sql1 = "SELECT * FROM users";
$results1 = mysqli_query($conn, $sql1);
$usersall = mysqli_fetch_all($results1, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <section class="main-section">
        <div class="text-right hey-right-r"><a class="text-center btn btn-primary" style="margin-bottom: 20px;" href="/Ubisoft/index.php">Register User</a></div>
        <div class="horizon">
            <?php foreach ($users as $users) : ?>
                <div class="card">
                    <img style="width:100%" src="images/<?php echo $users['profile_image']; ?>" class="card-img-top">
                    <div class="container">
                        <p class="text-center"><?php echo $users['title']; ?></p>
                        <p class="text-center"><?php echo $users['bio']; ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </section>

    <div class="text-right hey-right">
        <button class="btn btn-primary mb-4" onclick="myFunction()">Queue <?php
                                                                            echo count($usersall);
                                                                            ?>
        </button>
    </div>

    <section id="queue">

        <div class="horizon">
            <?php foreach ($usersall as $usersall) : ?>
                <div class="card">
                    <img style="width:100%" src="images/<?php echo $usersall['profile_image']; ?>" class="card-img-top">
                    <div class="container">
                        <p class="text-center"><?php echo $usersall['title']; ?></p>
                        <p class="text-center"><?php echo $usersall['bio']; ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>


    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>