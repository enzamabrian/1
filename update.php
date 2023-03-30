<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Contact</title>
    </head>
    <style>
        body
        {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height:100vh;
        }

         .search
        {
            width: 40%;
            padding:5px;
            
        }

        .search form
        {
            background: white;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    height: fit-content;
    position: relative;
    border-radius: 10px;
    padding: 10px;
    gap: 30px;
    margin: 10px auto;
    box-shadow: .1px .1px 400px rgb(104, 104, 104);
        }

        .search form input {
    width: 60%;
    padding: 10px;
    border-radius: 6px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }

  .search  form input::placeholder {
    font-size: 16px;
    color: rgb(105, 5, 5);
    font-weight: 300;
  }

.search form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 100%;
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

  .search input[type="submit"]:hover {
    background:  rgba(77, 50, 2,.7);
    cursor: pointer;
    transform: scale(1.03);
    border: none;
  }
  
  .search a
  {
    text-decoration: none;
    padding: 40px 0px;
    font-family: arial;
  }

  .search a:hover
  {
    transform: scale(1.4);
  }

@media screen and (max-width: 800px) 
{
    .search form
        {
            background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: fit-content;
    position: relative;
    border-radius: 10px;
    padding: 10px;
    
    gap: 10px;
    margin: 10px auto;
    box-shadow: .1px .1px 400px rgb(104, 104, 104);
        }
 .search form input[type="submit"] {
    font-size: 15px;



 }

 .search  form input::placeholder {
    font-size: 12px;
    
 }

 


@media screen and (max-width: 500px) 
{
.search form input {
    width: 80%;
    padding: 10px;
    border-radius: 3px;
    outline: none;
    border: 1px solid rgb(77, 50, 2);
    color: rgb(77, 50, 2);
    font-size: 14px;
  }

   .search
        {
            width: 80%;
            padding:5px;
            
        }

  .search form input[type="submit"] {
    background: rgb(77, 50, 2);
    width: 80%;
    font-size: 17px;
    transition: .3s;
    font-weight: lighter;
    display: flex;
    border-radius: 3px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: arial;
    cursor: pointer;
    padding:7px;


  }

 
}

  


        
    </style>
    <body>
    <div class="search">
    <form action="" method="post">
    <input type="text" name="scholar_number" placeholder="Enter Scholar Number">
    <input type="submit" name="search" value="Search for Scholar">
    </form>
    <a href="dashboard.php">Go back</a>
    </div>

    <?php
    $dbhost = "sql309.epizy.com";
    $dbuser = "epiz_33889337";
    $dbpassword = "FqMj2qy6NMw";
    $dbname = "epiz_33889337_equity_leaders_program";
$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

    if(isset($_POST['search']))
    {
        $scholar_number = $_POST['scholar_number'];

        $query = "SELECT * FROM equity_scholars_contact where scholar_number = '$scholar_number'";
        $query_run = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($query_run))
        {   
            ?>
            
            <form method="post" action=""
            style="
            padding:15px;
            box-shadow: .1px .1px 400px rgb(80, 80, 80);
            border-radius:10px;
            backdrop-filter: blur(20px);
            width: 300px;
            margin:10px;
            margin-bottom: 100px;
            ">
            <br>
            <H1 style="font-size:20px;font-family: arial;margin-top: -10px;">Current Contact Details</H1>
            <p style="font-size:14px;font-family: corbel; margin-bottom:-10px;">Only edit the ones you would like to update and leave the rest</p>
             <input type="hidden" name="scholar_number" value="<?php echo $row['scholar_number'] ?>" readonly/><br>
            <label style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:80% ">NAME</label><br>
             <input type="text" name="scholar_name" value="<?php echo $row['scholar_name'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;"
            readonly/><br>
            <label  style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:80% ">PRIMARY PHONE</label><br>
             <input type="text" name="scholar_phone" value="<?php echo $row['phone'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;"/><br>
            <label  style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:80% ">ALTERNATIVE PHONE</label><br>
             <input type="text" name="scholar_alt_number" value="<?php echo $row['alternative_phone'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;"
                            /><br>
            <label  style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:100% ">EMAIL</label><br>
             <input type="text" name="scholar_email" value="<?php echo $row['email'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;"/><br>
            <label  style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:80% ">UNIVERSITY</label><br>
             <input type="text" name="university" value="<?php echo $row['university'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;" readonly/><br>
            <label  style="font-family: arial;font-size:13px;font-weight:bolder; margin-bottom: 5px; width:80% ">COURSE</label><br>
             <input type="text" name="course" value="<?php echo $row['course'] ?>" style="width: 90%;
                            padding: 10px;
                            border-radius: 6px;
                            outline: none;
                            border: 1px solid rgb(77, 50, 2);
                            color: rgb(77, 50, 2);
                            font-size: 12px;
                            margin: 10px 0px;" readonly/><br>
             <input type="submit" name="update" value="Update Data" style="
                            background: rgb(77, 50, 2);
                            width: 60%;
                            color: white;
                            font-size: 18px;
                            transition: .3s;
                            border:none;
                            font-weight: lighter;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            font-family: arial;
                            cursor: pointer;
                            padding:7px;
                            border-radius: 4px;
                            margin-top:10px;
                            margin-bottom:12px;
                            font-size:16px;
                            font-weight: lighlighter;

                            "
                            >
    <a href="dashboard.php" style="text-decoration:none">Go back</a><br>

        </form>
          



             <?php
        }
        
    }
   
    ?>


</form>
</body>
</html>

<?php
$dbhost = "sql309.epizy.com";
    $dbuser = "epiz_33889337";
    $dbpassword = "FqMj2qy6NMw";
    $dbname = "epiz_33889337_equity_leaders_program";
$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['update']))
{
    $id = $_POST['scholar_number'];
    $name = $_POST['scholar_name'];
    $phone = $_POST['scholar_phone'];
    $alt_phone = $_POST['scholar_alt_number'];
    $email = $_POST['scholar_email'];
    $university = $_POST['university'];
    $course = $_POST['course'];


    $query = "update `equity_scholars_contact` SET scholar_name='$_POST[scholar_name]',phone='$_POST[scholar_phone]',alternative_phone='$_POST[scholar_alt_number]',email='$_POST[scholar_email]',university='$_POST[university]',course='$_POST[course]' where scholar_number='$id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Updated Successifully") </script>';
    }
    else{
        echo '<script> alert("Data Updated Not Successifully") </script>';

    }


}
    