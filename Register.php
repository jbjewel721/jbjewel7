<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{
      margin: 0;
      padding: 0;
    }

    body {
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      background-image: url(bgimg.jpg);
      background-size:cover;
      height: 100vh;
      background-repeat: no-repeat;
    }
/*opacity */
    section {
      background-color: #aca1a169; 
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
/*form desing row-col*/
    form {
      display: flex;
      justify-content:center;
      align-items: center;
      flex-direction:column;
      box-shadow: 0px 0px 10px rgb(117, 113, 113);
      padding: 40px;
    }
/*input type text box desing*/
    input[type=text],
    input[type=password],input[type=email] {
      padding: 15px 30px;
      margin: 8px 0;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
    }
/*button text color -design*/
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border:none;
      cursor:pointer;
      /* width: 200%; */
    }

    .cancelbtn {
      /* width: 200px; */
      padding: 5px 18px;
      background-color: #f44336;
      
    }
    a{
      text-decoration:none;
    }
    a:hover{
      text-decoration:underline;
    }
    .form-group {
    margin-bottom: 15px;
  }
  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  .form-group input {
    width: 350px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .form-group input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }
  </style>
  <link rel="shortcut icon" href="images/jbicon.ico" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">  -->

</head>

<body>

  <section>
    <div class="bg-img">
      <div class="center-form">
        <br>
      <h2>Registration Form</h2>
      <br>
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="confirmPassword" required rows=7 cols=45></textarea>
      </div>
      <div class="form-group">
        <label for="phoneno">Phone Number:</label>
        <input type="text" id="phoneno" name="phoneno" required>
      </div>

      
      
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>

         <!-- <form action="index.php" method="post">
          <h2> REGISTRATION FORM  </h2>
          <div class="imgcontainer">

            <img src="download.png" alt="Avatar" width="50" class="avatar">
          </div>
          <label for="uname"><b>Enter Name</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
          <label for="uname"><b>Enter Email:</b></label>
          <input type="email" placeholder="Enter Emailid" name="email" required>
          <label for="psw"><b>Enter Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <label for="psw"><b>Enter Mobile No:</b></label>
          <input type="text" placeholder="Enter MobileNo" name="mobileno" required>
          <label for="psw"><b>Enter Address:</b></label>
          <textarea placeholder="Enter MobileNo"  name="mobileno" required rows=5 cols=30> </textarea>
          
          
          <span class="psw">Already have an Account? <a href="login.php">Login</a></span>
          <div style="display:flex;">
          <button type="submit">Register</button>&nbsp;&nbsp;
          <button type="button" class="cancelbtn">Clear</button>
          </div>

          
           <label>
            
          </label>
          <div class="container">
            <button type="button" class="cancelbtn">Cancel</button> 
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>  -->
      </div>
  </section>
</body>

</html>   