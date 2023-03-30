<?php



 //required files of the page
session_start();
$dbhost = "sql309.epizy.com";
    $dbuser = "epiz_33889337";
    $dbpassword = "FqMj2qy6NMw";
    $dbname = "epiz_33889337_equity_leaders_program";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    echo "Conncetion to Database Failed";
    die;
}

 if($_SERVER['REQUEST_METHOD'] == "POST")
 {

 //get details from the form when submit is clicked
 $scholar_name = $_POST['scholar_name'];
 $scholar_number = $_POST['scholar_number'];
 $phone = $_POST['phone'];
 $alt_phone = $_POST['alt_phone'];
 $email = $_POST['email'];
 $university = $_POST['university'];
 $course = $_POST['course'];

 //insert into the database
    $query = "insert into equity_scholars_contact (scholar_number,scholar_name, phone,alternative_phone,email, university,course) values ('$scholar_number','$scholar_name','$phone','$alt_phone','$email','$university','$course')";
     mysqli_query($conn, $query);
     echo "<script> alert('Uploaded Successfully')</script>";
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/jpeg">
    <link rel="stylesheet" href="css/signup.css">
    <title>Your Contact Details</title>
</head>
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex-direction: row;
        
    }

    form{
    background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 387px;
    height: fit-content;
    position: relative;
    border-radius: 10px;
    padding: 5px;
    padding-top: 10px;
    gap: -10px;
    margin: 10px auto;
    box-shadow: .1px .1px 400px rgb(104, 104, 104);
    }

    form input {
    width: 80%;
    padding: 10px;
    border-radius: 6px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }
  
  form input::placeholder {
    font-size: 13px;
    color: rgb(105, 5, 5);
    font-weight: 300;
    
  }

  form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 80%;
    color: white;
    font-size: 18px;
    transition: .3s;
    font-weight: lighter;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: arial;
    cursor: pointer;

  }

  form input[type="submit"]:hover {
    background:  rgba(77, 50, 2,.7);
    cursor: pointer;
    transform: scale(1.03);
    border: none;
  }

</style>
<body>
    <form method="post" autocomplete="off">
    <h2 style="font-family:arial;font-size:19px">Equity Leaders Program</h2>
    <h4 style="font-family:arial;margin-top: -7px; font-weight:lighter">Contact Upload Form</h4>
        <input type="text" placeholder="Scholar Number" name="scholar_number" required><br>
        <input type="text" placeholder="Scholar Name" name="scholar_name" required><br>
        <input type="text" placeholder="Primary Phone Number" name="phone" required><br>
        <input type="text" placeholder="Alternative Phone Number" name="alt_phone"><br>
        <input type="text" placeholder="Valid Email" name="email"><br>
        <input type="text" placeholder="University" name="university" required><br>
        <input type="text" placeholder="Course" name="course" required><br>
        <input type="submit" value="Upload"><br>
    <a href="dashboard.php" style="text-decoration: none;font-family: corbel">Go Back To Dashboard</a>

    </form>
</body>
</html>