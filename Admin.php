
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo-AdminLogin</title>
  <link rel="stylesheet" href="styles.css">
  <script src="myScript.js"></script>
  <style>
  #login {
     background:#f4da01;
     color:black;
     border:1pxsolid#eee;
     border-radius:20px;
     box-shadow:5px5px5px#eee;
     text-shadow:none;
     padding: 20px 20px 20px 20px;
     font-size:x-large;
}
#login:hover {
     background:black;
     color:white;
     border:1pxsolid#eee;
     border-radius:20px;
     box-shadow:5px5px5px#000000;
     text-shadow:none;
     padding:  20px 20px 20px 20px;
     font-size:x-large;
}
#username{
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid black;
  outline: 0;
  font-size: 1.3rem;
  color: white;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
#password{
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid black;
  outline: 0;
  font-size: 1.3rem;
  color: white;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
  </style>

</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.html"> <img src="logo/logo.png" height=80px> </a>
    </div>

    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>
        <br>
        <h1 style="font-size:xxx-large;">
          Admin Login Page</h1>
          <p style="font-size:xx-large;">Login using your uresname and password.</p>

            <form method="post" action="Admin2.php">
              <label class="username" >  <p style="font-size:x-large;">Username:</label>
              <input class="username" type="text" id="username" name="username"></p>
              <label class="password">  <p style="font-size:x-large;">Password: </label>
              <input class="password" type="password" id="password" name="password"></p>
              
            </form>
            <button class="btn btn-success"  id="login"type="submit" name="done">Submit</button>
            </div>
      <div style="text-align: right;">
      <img src="images/leo.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
