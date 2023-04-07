<?php session_start();
error_reporting(0);
include('includes/config.php');


		?>


<html>
<head>
    <title>Blood Donation Camp Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            width: 50%;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        select,
        input[type="tel"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #0ddc148a;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0bed16;
        }
        input[type="button"] {
            background-color: #f00b0b78;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="button"]:hover {
            background-color: #ec0b0be3;
        }
    </style>
</head>
<body>

<?php include"top_nav.php";?>
    <!-- Header Carousel -->

    
  
    <h1>Blood Donation Camp Form</h1>

    <form method="POST" action="camp_reg.php">

        <label for="name"> Organization Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="Reg_No">Org. Regitration No:</label>
        <input type="" id="Reg_No" name="Reg_No" required>

        <label for="date">Date of Camp Organization:</label>
        <input type="date" id="date" name="date" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <lable for="email"> Email Id:</lable>
        <input type="email" id="email" name="email" required>
        

        <label for="Doc">No. Of Doctor Required:</label>
        <input type="tel" id="doc" name="doc" required>
        

       

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="30" required></textarea>
        
      
        <label for="note"> Note:</label>
        <textarea type="text" id="note" name="note" required></textarea>

        
        
        <input type="submit" name="submit" value="Register"> 
        <input type="button" name="button" value= Cancel onClick="history.back();"/>

  <?php include"footer.php"; ?>

</body>
</html>
<?php

if(isset($_POST['submit']))
		// Taking all 5 values from the form data(input)
	$org_name  =$_POST['name'];
    $Reg_No    =$_POST['Reg_No'];
    $date    =$_POST['date'];
    $phone    =$_POST['phone'];
    $email    =$_POST['email'];
    $doc    =$_POST['doc'];
    $address    =$_POST['address'];
    $note    =$_POST['note'];

		

$sql ="INSERT INTO camp (`ORG_NAME`, `REG_NO`, `DATE`, `MOB_NO`, `EMAIL`, `DOC`, `ADDRESS`, `NOTE`) VALUES ('$org_name', `$Reg_No`, ` $date`, ` $phone`, ` $email `, `  $doc`, ` $address `, `$note `)"; 

$result = mysqli_query($con ,$sql);

if($result)
{
    echo "Regitration Successfull!!!";
}
else
{
    echo "Failed!!!";
}
		
		?>


		
		
		
        



