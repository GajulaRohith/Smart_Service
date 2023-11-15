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

        
        </style>
    </head>
    <body>

            <img src="SSlogo.jpg" width=50px style="float:left">
            <h2 style="float:left">Smart Service</h2>
            <br>
            <br>
            <br>

        <h1> login to continue</h1>
        <form method="POST" action="home.html">
        <h2 align="center">Username:<br><input type="text" name="username" size="30px"></h2>
        <h2 align="center">Password:<br><input type="password" name="password" size="30px"></h2>
        <table align="center">
            <tr>
                
            <td><button class="button">Login</button></td>
            <td><button class="button">Cancel</button></td>
         
             </tr>
        </table>
        <br>
        <h3><a href="forgotPassword.html">Forgot your password?</a></h3>
        <div class="background-image"></div>
        </form> 


     <?php
 $host='localhost';
 $user='root';
 $pass="8790";
 $db="wtproject";
$conn=mysqli_connect($host,$user,$pass,$db);

$uemail=$upwd="";
  if($conn)
  {

if(isset($_POST['username']))
   $uemail=$_POST['username'];

 if(isset($_POST['password']))
  $upwd=$_POST['password'];
  $sql="select * from account where email='$uemail' and password='$upwd'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(isset($_POST['username']))
  if($row)
  {
    echo '<script>alert("login successfully")</script>';
  }
  else
  {
    echo '<script>alert("invalid username/password")</script>';
  }
}
  ?>
  </body>
</html>