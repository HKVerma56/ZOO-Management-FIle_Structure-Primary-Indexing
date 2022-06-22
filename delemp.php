
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
  <style>
    #Book {
       background:#f4da01;
       color:black;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#eee;
       text-shadow:none;
       padding: 20px 20px 20px 20px;
       font-size:x-large;
    }
    #Book:hover {
       background:black;
       color:white;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#000000;
       text-shadow:none;
       padding:  20px 20px 20px 20px;
       font-size:x-large;
    }
    #box{
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
    <a id="icon" href="index.php"> <img src="logo/logo.png" height=80px> </a>

    <a  href="Employees.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Z-00 Employee</h1>
          <p style="font-size:x-large;">Delete Employee Record</p>

          <form method="post" action="rememp.php">
            <label class="E_id">Employee ID</label>
            <input class="E_id"  id="box" type="number" name="E_id"><br><br>
            <br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Delete</button>



            </form>
      </div>
      <div style="text-align: right;">
      <img src="images/pan.png"  width="50%"></div>

  </div>


      <div class="container3">
        <<center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
