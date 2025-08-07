<?php
    session_start();
    include "../Login/Connectionfile.php";

    $con = mysqli_connect($host, $user, $pass, $db) or die("Connection failed :" . mysqli_connect_error());
    if (!$con)
    {
        die('could not connect:' . mysql_error());
    }

    echo $title = $_POST['title'];
    echo $description = $_POST['description'];
    echo $discounted_price = $_POST['discounted_price'];
    echo $original_price = $_POST['original_price'];
    echo $catogary = $_POST['catogary'];
    echo $file = $_POST['fileToUpload'];
    echo $file2 = $_POST['fileToUpload2'];

    echo $sql="INSERT INTO product(ID,title,description,discounted_price,original_price,catogary,image1,image2) VALUES('1', '$title','$description','$discounted_price','$original_price','$catogary','$file','$file2')";
    $result = mysqli_query($con, $sql) or die("Invalid query:". mysqli_error());

    if(!$result)
    {
        echo ("Error performing query:" . mysql_error() ."");
        exit();
    }
    else
    {
        header("Location:adminpage.html");
        echo "New product added successfully";
    }

    mysqli_close($con);

    ?>