<?php
session_start();
include_once "DBconnection.php";
if (isset($_REQUEST["id"]))
{
  
    $sql="select * from id where email=".$_SESSION['sess_id'];
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);


}




?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("images/settingsbg.jpg");}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-left: 300px;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  /* display: none; Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<h2>Modal Signup Form</h2>

<!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button> -->

<div id="id01" class="modal">
  <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
  <form class="modal-content" action="updating.php" method="GET">
    <div class="container">
      <h1>Modify Account</h1>
      <p>Please fill in new account details</p>
      <hr>
      <label for="username"><b>User Name</b></label>
      <input type="text"  value="" name="username" >
      <label for="email"><b>Email</b></label>
      <input type="text"  value="" name="email" >

      <label for="psw"><b>Password</b></label>
      <input type="text"  value="" name="psw" >

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="text"  value=""   name="psw-repeat" >
      <input type="hidden"  value="<?php echo $row["id"]  ?>" name="id" >
      <!-- <input type="hidden" value="<?php echo $row["id"] ?>" name="id" > -->
      
      

     

      <div class="clearfix" >
        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
        <button type="submit" class="signupbtn"  >Update</button>
      </div>
    </div>
  </form>
</div>

<!-- <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->

</body>
</html>
