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
          <p style="font-size:x-large;">Search for Employee Record</p>

          <form method="post">
            <label class="E_id">Employee ID</label>
            <input class="E_id"  id="box" type="number" name="E_id"><br><br>
            <br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Search</button>



            </form>
            <br>
            <br>
            <table  ><thead><th>EID   </th><th>Name   </th><th>Gender   </th><th>DOB  </th><th>Phone </th><th>Salary   </th><th>Address  </th><th>Design.</th></thead>
            <?php 
            if(isset($_POST['done'])){
            $myfile = fopen("emp.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
            $index = array();
            $E_id = $_POST["E_id"];
	
      $indsize = sizeof($index);
      $a = array();
      $list = array(array(),array());
      if($indexf)
      {
        while(($line=fgets($indexf))!=false)
        {
          
          $str_arr = explode("|",$line);
          $index[$indsize]=array("$str_arr[0]","$str_arr[1]");
          
          
          $indsize ++;
          
        }
        
      }
      
      for ($i=0;$i<$indsize;$i++){
        $a[$i] = $index[$i][0];
      }
      sort($a);
      $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
      $low = 0;

      $flag =0;
      $found;
      $i =0;
      while($i<sizeof($a))
      {
        $v= $index[$i][0];
        if(((strcmp($E_id,$v)) == 0)& $flag == 0)
                {
                                
                  while(($line=fgets($indexf))!=false)
                  {
                      
                      $str_arr = explode("|",$line);
                      if($str_arr[0]==$v)
                      {
                          $position = $str_arr[1];
                          
                          fseek($myfile,$position,SEEK_SET);
                          $line1=fgets($myfile);
                          $val_arr = explode("|",$line1);
                        
                                ?>	
                              <tr>
                                <td><?php echo $val_arr[0]; ?></td>
                                <td><?php echo $val_arr[1]; ?></td>
                                <td><?php echo $val_arr[2]; ?></td>
                                <td><?php echo $val_arr[3]; ?></td>
                                <td><?php echo $val_arr[4]; ?></td>
                                <td><?php echo $val_arr[5]; ?></td>
                                <td><?php echo $val_arr[6]; ?></td>
                                <td><?php echo $val_arr[7]; ?></td><?php
                                
                      }
                    
                  }
                  break;
                }
          $i++;
      }
      if($i==sizeof($a))
      {
        echo '<script>alert("Data Not Found");window.location.href="seremp.php";</script>';
      }
      
     } ?>
                      </table>
      </div>
      <div style="text-align: right;">
      <img src="images/pan.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
