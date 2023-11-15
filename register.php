<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="sheet1.css">
        <style>
            .button{
                background-color: darkgray;
                font-size: 20px;
                border-radius:10px;
             
            }

           h1{
            color:rgb(15, 4, 40);
           
            font-style: italic;
            text-align: center;
           
           }
    
           body{
            border-radius:20px ;
            border-style: solid;
            border-width: medium;
            border-color: black;
           
            margin-inline: 200px;
            background-color: rgb(233, 234, 240);
           
           }
          .form
           {
           
            position: relative;
            left:10%;
            padding:3px;   
            font-size: 15px;
            border-radius: 10px;
            
           }
           .register
           {
            font-size:20px;
            position:relative;
            left:10px;
           }
        
        </style>


 </head>
    <body>


            <img src="SSlogo.jpg" width=50px style="float:left">
            <h2 style="float:left">Smart Service</h2>
            <br>
            <br>
            <br>

        <h1> Register for service..(:</h1>
        <br>
        <div class="register">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    Enter and describe the service you need:
                    <br>
                    <input type="text" name="service" class="form">
                    <!-- <select class="form">
                        <option>select--</option>
                        <option>Electrical Services</option>
                        <option>Plumbing Services</option>
                        <option>Cleaning Services </option>
                        <option>Painting Servicess</option>
                    </select> -->
                    <br><br>
                    Select the slot:
                    <br>
                <input type="date" name="slot" size="30px" class="form">
                <br><br>

                
                Full name:<br><input type="text" name="name" class="form"><br><br>
                Mobile number:<br><input type="tel" name="mobileno" class="form"><br><br>
                <h2>Enter your address:</h2>
                    <textarea name="address" rows="5" class="form" required></textarea>

                    <br>
                    <br>

                <!-- Pincode:<br><input type="text" class="form"><br><br>
                Flat,House no.,Apartment:<br><input type="text" class="form"><br><br>
                Area,Street,village:<br><input type="text" class="form"><br><br>
                Landmark:<br><input type="text" class="form"><br><br>
                Town/City:<br><input type="text" class="form"><br>
                <br><br> -->


                <input type="submit" class="button" value="register">
                <input type="reset" class="button" value="cancel">
                <br>
                </form> 
        </div>


<?php
$host="localhost";
$username="root";
$password="8790";
$db="wtproject";
$service=$slot=$name=$mobileno=$address="";
$conn=mysqli_connect($host,$username,$password,$db);
if(isset($_POST['service']))
    $service=$_POST['service'];

if(isset($_POST['slot']))
    $slot=$_POST['slot'];

if(isset($_POST['name']))
    $name=$_POST['name'];

if(isset($_POST['mobileno']))
    $mobileno=$_POST['mobileno'];

if(isset($_POST['address']))
    $address=$_POST['address'];

$sql="insert into register(service,date,name,mobileno,address)
 values( '$service',NOW(),'$name','$mobileno','$address',NOW())";
 if(mysqli_query($conn,$sql))
 {
    echo '<script>alert("Registered successfully")</script>';
 }
?>


        
     </body>
</html>