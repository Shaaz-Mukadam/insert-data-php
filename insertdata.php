<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
 <style>
     .container{
            border:1px solid black;
            margin-top: 100px;
            padding: 100px;
        }
 </style>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <div class="row">
            <div class="col-7">
                Insert Data in Database using php
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <input type="text" placeholder="First Name" name="fname">
            </div>
            <div class="col-4">
                <input type="text" placeholder="Degree" name="degree">
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-4">
            <input type="number" placeholder="Mobile Number" name="mobileno">
            </div>
            <div class="col-4">
            <input type="text" placeholder="Reference" name="refernce">
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-1">
                <button name="submit">Register</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php
 include 'connection.php';
 if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $degree = $_POST['degree'];
    $mobileno = $_POST['mobileno'];
    $refernce = $_POST['refernce'];

    $insertquery = "insert into regs (fname,degree,mobileno,refernce) 
    values ('$fname','$degree','$mobileno','$refernce')";

    $res = mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
            alert("Data is Inserted");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data is Not Inserted Properly");
        </script>
        <?php
    }
 
 }
?>