<?php

$msg = "";
$css_class = "";

$conn = mysqli_connect("localhost", "root", "", "ubisoft");

if (isset($_POST['save-user'])) {
    // echo "<pre>", print_r($_FILES["profileImage"]["name"]), "</pre>";

    $title = $_POST["title"];
    $bio = $_POST["bio"];
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];
    $timestamp = time();
    $timestamp30 = time() + 30;
    $target = 'images/' . $profileImageName;

    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {

        $sql = "INSERT INTO users (profile_image,title,bio,timestamp) VALUES ('$profileImageName','$title','$bio','$timestamp')";
        $deleterow = "DELETE FROM users WHERE timestamp < ('$timestamp'- 30) DESC LIMIT 6";

        if (mysqli_query($conn, $sql)) {
            $msg = "Uploaded the Image SuccessFully";
            $css_class = "alert-success";
        } else {
            $msg = "Failed to Upload the Image";
            $css_class = "alert-danger";
        }
        if (mysqli_query($conn, $deleterow)) {
            $msg = "Deleted the users successfully";
            $css_class = "alert-success";
        }
    } else {
        $msg = "Failed to Upload the Image";
        $css_class = "alert-danger";
    }
}
