<?php
    include("database.php");
?>

<?php
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($conn,$sql);

    echo "<a href = 'index.html'>Home Page</a><br><br><br>";

    while($row = mysqli_fetch_assoc($result)){
        echo "Name : {$row['name']}<br>";
        echo "Email : {$row['email']}<br>";
        echo "Contact Number: {$row['phone']}<br>";
        echo "Feedback : {$row['feedback']}<br><hr><br>";
    }
?>