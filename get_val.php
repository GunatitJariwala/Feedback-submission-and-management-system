<?php
    include("database.php");
    
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["phone"];
        $feed = $_POST["feedback"];

        if (empty($name) || empty($email) || empty($number)) {
            echo "<script>alert('Enter all the fields!');</script>";
            echo "Begin redirected to index.html!";
            header("Refresh:1; URL=index.html");
            exit();
        } else {
            $sql = "INSERT INTO feedback (name, email, phone, feedback) VALUES ('$name','$email','$number', '$feed')";
            mysqli_query($conn, $sql);

            echo "Your Feedback is collected!";
            header("Refresh:2; URL=display.php");
            exit();
        }
    }
?>
