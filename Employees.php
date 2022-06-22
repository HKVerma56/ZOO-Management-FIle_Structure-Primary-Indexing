<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
</head>

<body>
  <div class= topnav>
    <a id="icon" href="DashBoard.php"> <img src="logo/logo.png" height=80px> </a>
    <a  href="DashBoard.php">Dashboard</a>
    <a class="active" href="Employees.php">Employee's Details</a>
    <a href="Animals.php">Animal's Details</a>
    <a href="Admin.php">Log Out</a>
    </div>

    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>
        <br>
        <h1 style="font-size:xxx-large;">
          Z-00</h1>
          <p style="font-size:x-large;">Employee Details.</p>
          <table  ><thead><th>EID   </th><th>Name   </th><th>Gender   </th><th>DOB  </th><th>Phone </th><th>Salary   </th><th>Address  </th><th>Design. </th></thead>
            <?php 
            $myfile = fopen("emp.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
            $index = array();
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
      $i =0;
      while($i<sizeof($a))
      {
            $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
            if($indexf)
                {
                  while(($line=fgets($indexf))!=false)
                  {
                      
                      $str_arr = explode("|",$line);
                      if($str_arr[0]==$a[$i])
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
                                <td><?php echo $val_arr[7]; ?></td></tr><?php
                                
                      }
                    
                  }
                }
          $i++;
      }
      
              ?>
              </table>
              <br>
              <button onclick="location.href='seremp.php';" >Search Value</button>
              <button onclick="location.href='modemp.php';" >Modify Value</button>
              <button onclick="location.href='delemp.php';" >Delete Value</button>
              <button onclick="location.href='empform.php';" >Enter Value</button>
            
      </div>
      <div style="text-align: right;">
      <img src="images/pan.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
