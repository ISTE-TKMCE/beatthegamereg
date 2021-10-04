<?php

include('config.php');

if(isset($_POST['submit']))
  {

// echo "<script type='text/javascript'>alert('hello');</script>";

	
$name=$_POST['name'];   
$email=$_POST['email'];
$branch=$_POST['branch'];
$username=$_POST['username'];  
$fav=$_POST['fav'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$year=$_POST['year'];
$batch=$_POST['batch'];  

// echo "<script type='text/javascript'>alert('$name $email $branch $username $fav $phone $password');</script>";

$sql="INSERT INTO `userlogin`( `name`, `username`, `useremail`, `batch`, `phone`, `fav`, `password`,`pass`) 
VALUES (:name,:username,:useremail,:batch,:phone,:fav,:password,'')";
$query = $dbh->prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':useremail', $email, PDO::PARAM_STR);
$query-> bindParam(':batch', $branch+$year+$batch, PDO::PARAM_STR);  
$query-> bindParam(':phone', $phone, PDO::PARAM_STR);
$query-> bindParam(':fav', $fav, PDO::PARAM_STR);   
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query->execute();
}  
?>      
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&family=Hahmlet&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Registration BTG2.0</title>
</head>

<body>

  <div class="container-fluid">
    <div class="header">

      <div class="bg-1"></div>
      <div class="bg-2"></div>

      <div class="row">

        <div class="col-lg-6 column-1">

          <div class="inner-column">
            <div class="row">
              <h1 class="mx-auto text-uppercase">beat the game 2.0 <span></span></h1>

            </div>
            <div class="row">
              <p class="mx-auto text-uppercase"><small class="tag-line">make your 11 here</small></p>
            </div>

            <div class="fake-register-button-wrapper row">
              <button class="btn fake-register-button font-weight-bolder mx-auto rounded-pill">Register now</button>
            </div>
          </div>

        </div>
        <div class="col-lg-6 text-center column-2">

          <img src="./assets/img/bat.svg" class = "img-fluid img-responsive w-50" alt="" srcset="">
        </div>

      </div>


    </div>




    <div class="register">

      <div class="inner-register-container">
        <div class="inner-register-wrapper">

          <h3 class = "text-light mb-5 register-header">Start playing now</h3>
          <form method="post">


            <div class="form-row">
              <div class="col-md-6 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3" >Name</span>
                  </div>
                  <input type="text" class="form-control" id="namefeild" placeholder="Username" name ="name" onKeyUp=checkName()
                    aria-describedby="inputGroupPrepend3" required>
                  <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div> -->
                </div>
              </div>
              <div class="col-md-6 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3" >Username</span>
                  </div>
                  <input type="text" class="form-control " id="usernamefeild" name="username" onKeyUp="checkusername()"
                    placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                  <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div> -->
                </div>
              </div>
            </div>




            <div class="form-row mt-3">
              <div class="col-md-12 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="branchfeild" >Branch</span>
                  </div>


                  <select class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend3"  name="branch" required>
                    <option value="cse">CSE</option>
                    <option value="ece">ECE</option>
                    <option value="eee">EEE</option>
                    <option value="mech">MECH</option>
                    <option value="civil">CIVIL</option>
                    <option value="chem">CHEM</option>
                    <option value="arch">ARCH</option>

                  </select>
                  <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div> -->
                </div>
              </div>


              <div class="form-row mt-3">
              <div class="col-md-12 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"  >Year</span>
                  </div>


                  <select class="form-control"  aria-describedby="inputGroupPrepend3"  name="year" required>
                    <option value="first">First</option>
                    <option value="second">Second</option>
                    <option value="third">Third</option>
                    <option value="fourth">Forth</option>


                  </select>
                  <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div> -->  
                </div>
              </div>
              



              <div class="form-row mt-3">
              <div class="col-md-12 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"  >Batch</span>
                  </div>


                  <select class="form-control"  aria-describedby="inputGroupPrepend3"  name="batch" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>
                  <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div> -->  
                </div>
              </div>


              <div class="col-md-6 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">Password</span>
                  </div>
                  <input type="password" class="form-control" id="passwordfeild" onKeyUp="checkpassword()"
                    placeholder="password" aria-describedby="inputGroupPrepend3" name ="password" required>
                   <!-- <div class="invalid-feedback">
                    Please choose a username.
                  </div>  -->
                </div>
              </div>

            </div>
            <div class="form-row mt-3">
              <div class="col-md-6 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">Email</span>
                  </div>
                  <input type="text" class="form-control" id="emailfeild" placeholder="Email"  name="email"  onKeyUp="checkemail()"
                    aria-describedby="inputGroupPrepend3" required>

                </div>
              </div>
              <div class="col-md-6 mb-3">

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">Phone</span>
                  </div>
                  <input type="text" class="form-control" id="phonefeild" name="phone" onKeyUp="checkphone()"
                    placeholder="Phone" aria-describedby="inputGroupPrepend3" required>

                </div>
              </div>

            </div>

            <div class="form-row">

              <div class="col-lg-12 mb-3 mt-3">



                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">Favourite Team</span>
                  </div>


                  <select class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend3" name="fav" id="favfeild"idrequired>
                    <option value="csk">Chennai Super Kings</option>
                    <option value="mi">Mumbai Indians</option>
                    <option value="kp">Kings X! Punjab</option>
                    <option value="rcb">Royal Challengers Banglore</option>  
                    <option value="rr">Rajasthan Royals</option>
                    <option value="srh">Sunrisers hydrabad</option>
                    <option value="dc">Delhi Capitals</option>
                    <option value="kkr">Kolkata Knight Riders</option>


                  </select>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>

              </div>
            </div>
        <div class="form-row" id = "submit-form-btg">
          <button id="finalbtn" class="btn rounded-pill font-weight-bold text-light" name="submit" type="submit" disabled>Enter BTG 2.0</button>
        
        </div>


        </form>
      </div>
    </div>

  </div>


  </div>
  <script src="script.js"></script>
  <script>
    console.log("js is here");


    var nameflag=false;
    var usernameflag=false;
    var passwordflag=false;
    var emailflag=false;
    var phoneflag = false;

    var passelmt = document.getElementById("passwordfeild");
    var favfeild = document.getElementById("favfeild");


    function checkName(){
        
        document.getElementById("namefeild").classList.add('is-invalid'); 
        nameflag=true; 
        finalcheck();
        document.getElementById("namefeild").classList.replace("is-invalid","is-valid");       
    }
    function checkusername(){
        
        document.getElementById("usernamefeild").classList.add('is-invalid'); 
        usernameflag=true;   
        finalcheck();   
        document.getElementById("usernamefeild").classList.replace("is-invalid","is-valid");   
    }
    function checkpassword(){
        
        passelmt.classList.add('is-invalid'); 
        
        if(passelmt.value.length > 4){
          passwordflag=true; 
        }else{
          passwordflag=false;
        }
        if(passwordflag == true){
          passelmt.classList.replace("is-invalid","is-valid");  
        }
        finalcheck();       
    }
    function checkemail(){

        document.getElementById("emailfeild").classList.add('is-invalid'); 
         
        ValidateEmail(document.getElementById("emailfeild").value);

        if(emailflag == true){
          document.getElementById("emailfeild").classList.replace("is-invalid","is-valid");  
        }

        finalcheck();  

    }
    function checkphone(){
        
        document.getElementById("phonefeild").classList.add('is-invalid'); 

        if (document.getElementById("phonefeild").value.length == 10){
          phoneflag = true;
        }else{
          phoneflag = false;
        }
        if(phoneflag == true){
          document.getElementById("phonefeild").classList.replace("is-invalid","is-valid");  
        }
        finalcheck();        
    }

    function ValidateEmail(mail) 
    {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
      {
        emailflag= true;
      }
      else
      {
        emailflag=false;
      }
        // alert("You have entered an invalid email address!")
        // return (false)
    }

    function finalcheck(){
        
        if(
          nameflag==true &&
          usernameflag==true &&
          passwordflag==true &&
          emailflag==true  &&
          phoneflag == true 
          
        ){
          document.getElementById("finalbtn").disabled = false;
        }else{
          document.getElementById("finalbtn").disabled = true;
        }
    }


   

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
