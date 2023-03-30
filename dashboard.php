<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="elp.css">
  <link rel="icon" href="logo.png" type="image/jpeg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ELP PORTAL</title>
</head>
<style>
    *{box-sizing: border-box;}
    body
    {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .container
    {   display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
        padding: 80px;
        box-shadow: .1px .1px 150px rgb(120,120, 120);
        border-radius: 10px;
    }

    .container h1
    {
        font-size: 17px;
        font-family: arial;
        color:rgb(77, 50, 2);
        font-weight: lighter;
    }


    .container a
    {
        text-decoration: none;
        font-size: 13px;
        color: white;
        padding: 15px;
        font-weight: lighter;
        background:rgb(77, 50, 2);
        text-align: center;
        font-stretch: expanded;
        font-family: arial;
        color: white;
        border-radius: 6px;
        transition: .5s;

    }

    .container a:hover
    {
        background: rgba(77, 50, 2,.7);
        transform: scale(1.04);
    }

    @media screen and (max-width: 800px) 
{
    .container
    {
        margin: 20px;
    }

    .container a
    {
        font-size: 10px;

    }


}

</style>
<body>
    <div class="container">
        <h1>What Would you like to do dear scholar</h1>
        <a href="scholars_contact.php">REGISTER CONTACT DETAILS</a>
        <a href="special_scholars_form.php">REGISTER RELATIVE'S CONTACT DETAILS</a>
        <a href="update.php">UPDATE CONTACT DETAILS</a>
    </div>
    <a href="index.php" style="text-decoration: none; margin-top:10px">Go to Home page</a>
</body>