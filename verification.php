<?php
$dbhost = "sql309.epizy.com";
    $dbuser = "epiz_33889337";
    $dbpassword = "FqMj2qy6NMw";
    $dbname = "epiz_33889337_equity_leaders_program";
$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit']))
{
    $id = $_POST['scholar_number'];
    $query = "select * from all_scholars where scholar_number ='$id' limit 1";
     $result = mysqli_query($conn, $query);
     if($result)
     {
      if($result && mysqli_num_rows($result) > 0)
      {
            header("Location: dashboard.php");
        }

        else
        {
            echo "<script> alert('Incorrect Scholar Number, Plaese try again')</script>";
        }
     }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELP PORTAL</title>
</head>
<style>
    body
    {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    form
    {
        background: white;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 377px;
    height: fit-content;
    position: relative;
    border-radius: 14px;
    padding: 10px;
    gap:10px;
    width: 600px;
    margin: 10px auto;
    box-shadow: .1px .1px 400px rgb(120, 120, 120);
    }

    form input {
    width: 100%;
    padding: 12px;
    border-radius: 6px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }
  
  form input::placeholder {
    font-size: 16px;
    color: rgb(105, 5, 5);
    font-weight: 300;
    
  }

  form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 80%;
    color: white;
    font-size: 20px;
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

  @media screen and (max-width: 500px) {

    form
    {
        background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 280px;
    height: fit-content;
    position: relative;
    border-radius: 14px;
    padding: 15px;
    gap:10px;
    margin: 10px auto;
    box-shadow: .1px .1px 400px rgb(54, 54, 54);
    }

    form input {
    width: 90%;
    padding: 10px;
    border-radius: 4px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }

  form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 60%;
    color: white;
    font-size: 16px;
    transition: .3s;
    font-weight: lighter;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: arial;
    cursor: pointer;
    border-radius:3px;

  }


  }

  
</style>
<body>
    <form method="post">
        <input type="text" name="scholar_number" placeholder="Enter Scholar Number">
        <input type="submit" value="Proceed" name="submit">
    </form>
    <a href="index.php" style="position: absolute; margin-top:170px; text-decoration: none">Back to Home page</a>
</body>