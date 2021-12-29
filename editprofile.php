<?php
include "subhead2.php";
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>


    <title> Edit Profile</title>
    <style type="text/css">
        
        .wrapper{
            position:absolute;
            left:35%;
            right:20%;
    align:center;
    max-width: 500px;
    height: 600px;
    background:#fff;
 
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}


                    /* me css */


.profile-pic {
  color: transparent;
  transition: all 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease;
}
.profile-pic input {
  display: none;
}
/* .profile-pic img {
  position: absolute;
  object-fit: cover;
  width: 110px;
  height: 110px;
  box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
  border-radius: 50%;
  z-index: 0;
} */

.profile-pic .-label {
  cursor: pointer;
  width: 110px;
  height: 110px;
}
.profile-pic:hover .-label {
  display: flex;
  width: 110px;
  height: 110px;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 10000;
  color: #fafafa;
  transition: background-color 0.2s ease-in-out;
  border-radius: 50%;
  margin-bottom: 0;
}
.profile-pic span {
  display: inline-flex;
  
}

.profile-pic label span h4{
  color:white;
  padding: 17px;

}
         /* me css end */
  
         
        /* form labels start */
        .form-full{
            display: flex;
            width:600px;
            margin-top: 30PX;
        }
       .form-left-side{

  width:260px;
 

    
       }
.label-form-names       {
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
    max-width: 100px;
    margin-left:90px
} 
.label-form-names-2{
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
     padding-top: 20px;
     margin-left:90px
} 
.label-form-names-2{
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
     padding-top: 20px;
     margin-left:90px
} 
.label-form-names-3{
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
    margin-left:90px;
     padding-top: 20px;
} 
.label-form-names-4{
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
    margin-left:90px;
     padding-top: 15px;
} 
.label-form-names-5{
 font-family: 'Montserrat', sans-serif;
	font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
    margin-left:90px;
   padding-top: 18px;
    
  } 
  .label-form-names-6{
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    font-weight: 600;
    display: flex;
    flex-direction: column;
    color: #798696;
    margin-left:90px;
     padding-top: 18px;
    
} 



        /* form labels end */

        /* form input start */
        .form-right-side{
            width:340px;
}
.input-form-edit1{
display: block;
border-radius: 5px;
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
border-width: 1.5px;
max-width: 200px;
max-height:30px;
font-size:13px;

   
}
.input-form-edit2{
    border-radius: 5px;
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
   margin-top: 15px;
   border-width: 1.5px;
   max-width: 200px;
max-height:30px;
font-size:13px;
  
}
.input-form-edit3{
    margin-top: 15px;
    border-radius: 5px;
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
border-width: 1.5px;
max-width: 200px;
max-height:30px;
font-size:13px;
}
.input-form-edit4{
    margin-top: 15px;
    border-radius: 5px;
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
border-width: 1.5px;
max-width: 200px;
max-height:30px;
font-size:13px;
}
.input-form-edit5{
    margin-top: 15px;
    border-radius: 5px;
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
border-width: 1.5px;
max-width: 200px;
max-height:30px;
font-size:13px;
}
.input-form-edit6{
  
color: #404347;
border-color:rgb(95, 95, 95);
border-style:solid;
    margin-top: 15px;
    max-width: 200px;
    max-height:30px;
    font-size:13px;
    border-width:5px;  
    border-style:solid;
    display:block;
  }
  .form-right-side input{
    color:ash;
display:block;
}

        /* form input end */
  /* submit button */

.main-button {
	position:relative;
	display:inline-block;
	padding:5px 15px;
	background-color: #FF6700;
	border: 2px solid transparent;
	border-radius: 15px ;
	color: #FFF;
	-webkit-transition:0.2s all;
	transition:0.2s all;

    margin-top: 30px;
    font-weight: 400;
    margin-left: 95px;
}

.main-button:hover{
	background-color:#fff;
	border: 2px solid #FF6700;
	color:#FF6700;
    font-weight: 400;
}
  
  </style>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    	<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

   <!-- Font Awesome Icon -->
   <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body style="background-color: white;">
 
<div class="container">

<div class="wrapper">



  <!-- 
  
  box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);

  z-index: 0; -->

    <?php

    ?>
    <h2 style="text-align: center;">Edit Profile</h2>
    <?php
           
 
         //  echo  "<div class='profile-pic'><img style='width:110px; height:110px; position:absolute; src='img/".$_SESSION['pic']."'></div>";
       

    $sql="SELECT * FROM student_reg WHERE user_name='$_SESSION[login_user]'";
    $result=mysqli_query($db,$sql) or die (mysql_error());

    while($row=mysqli_fetch_assoc($result))
    {
        $reg_no = $row['reg_no'];
        $user_fname = $row['user_fname'];
        $user_lname = $row['user_lname'];
        $user_name = $row['user_name'];
        $user_email = $row['user_email'];
        $user_mobile = $row['user_mobile'];
       
    }
    
    ?>
    



    <h4 style="text-align: center">
        <?php
    echo $_SESSION['login_user'];
    ?>
</h4>


<form action="" method="post" enctype="multipart/form-data">





<div class="profile-pic">
        <label class="-label" for="file">
      
          <span> <h4 style="text-align: center">Change Image</h4> 
        </span>
        </label>

        <input id="file" type="file"  name="file" placeholder="Dp" style="display:none" onchange="loadFile(event)" />
                <!-- <img src="./img/avatar.png" id="output" width="200" /> -->
                <?php
 echo  "<div class='profile-pic'><img id='output' style='width:110px; height:110px; position:absolute; object-fit:cover; border-radius: 50%; box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35); z-index: 0; margin-left:-110px' src='img/".$_SESSION['pic']."'></div>";
?>
            </div>













            


<!-- jithu work start -->

<div action="" class="form-full">
            <div class="form-left-side">

                <label for="" class="label-form-names">Reg Number</label>
           
                <label for=""  class="label-form-names-2">First Name</label>
         
                <label for=""  class="label-form-names-3">Last Name</label>
          
                <label for=""  class="label-form-names-4">User Name</label>
            
                <label for=""  class="label-form-names-5">Email ID</label>
                
                <label for=""  class="label-form-names-6">Contact</label>

            </div>
            <div class="form-right-side">
            
                <input class="input-form-edit1" type="text" name="reg_no"  value="<?php echo $reg_no;?>">
                <input class="input-form-edit2" type="text" name="user_fname" value="<?php echo $user_fname; ?>">
                <input class="input-form-edit3" type="text" name="user_lname" value="<?php echo $user_lname; ?>">
                <input class="input-form-edit4" type="text" name="user_name" value="<?php echo $user_name; ?>">
                <input class="input-form-edit5" type="text" name="user_email" value="<?php echo $user_email; ?>">
                <input class="input-form-edit6" type="text" name="user_mobile" value="<?php echo $user_mobile; ?>">
              
                
                
                <button type="submit" name="submit" class="main-button">Submit</button>
              </div>
              
           

            </div  class="form-full">

            </form>
<!-- jithu work end -->





</div>
</div>


<!-- me js -->



<!-- me js end -->
<?php
if(isset($_POST['submit']))

{

  $reg_no = $_POST['reg_no'];
  $user_fname = $_POST['user_fname'];
  $user_lname = $_POST['user_lname'];
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_mobile = $_POST['user_mobile'];
  $pic = $_FILES['file']['name'];



move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']);
 

  $sql1="UPDATE student_reg SET pic='$pic',reg_no='$reg_no',user_fname='$user_fname',user_lname='$user_lname',user_name='$user_name',user_email='$user_email',user_mobile='$user_mobile' WHERE user_name='".$_SESSION['login_user']."';";
     if(mysqli_query($db,$sql1)){

        ?>
        <script type="text/javascript">
        alert("updated successfully");
        </script>
        <?php
     }
    else{
      echo "error".mysqli_error($db);
    }


}?>
<script>

var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};

</script>


</body>
</html>