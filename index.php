<?php include 'processForm.php' ?>

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

    <div class="container align-items-center container-main">
        <div class="row">
            <div class="form-div col-xs-12 col-sm-6">
                <form action="index.php" method="POST" id="form" enctype="multipart/form-data">

                    <h3 class="text-center"> Window Registration Form </h3>

                    <?php if (!empty($msg)) : ?>
                        <div class="alert <?php echo $css_class; ?> ">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" id="title" type="text" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea required name="bio" id="bio" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <img src="images/download.png" onclick="triggerClick()" class="profileDisplay" id="profileDisplay" />
                        <label> Profile Image </label>
                        <input required onchange="displayImage(this)" type="file" style="display: none;" name="profileImage" id="profileImage">
                    </div>

                    <div class="form-group">
                        <button name="save-user" type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <div class="form-group">
                        <input type=submit value="reset" class="btn btn-primary btn-block" onclick="resetFunction()" name="reset-user">
                    </div>
                    <div class="text-center"><a class="text-center btn btn-primary" style="margin-bottom: 20px;" href="/Ubisoft/profile.php">Go to User</a></div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>