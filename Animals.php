<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
</head>

<body>
  <div class= topnav>
    <a id="icon" href="DashBoard.php"> <img src="logo/logo.png" height=80px> </a>
    <a href="DashBoard.php">Dashboard</a>
    <a href="Employees.php">Employee's Details</a>
    <a class="active" href="Animals.php">Animal's Details</a>
    <a href="Admin.php">Log Out</a>
    </div>
    


    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>
        <br>
        <h1 style="font-size:xxx-large;">
          Z-00</h1>
          <p style="font-size:x-large;">Details of all our Animals.</p>
          <table ><thead><th>Breed  </th><th>Name   </th><th>Age   </th><th>Feed </th></thead>
          <?php
          $myfile = fopen("ani.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
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
      $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
      $i =0;
      while($i<sizeof($a))
      {
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
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
                                <td><?php echo $val_arr[3]; ?></td></tr><?php
                                
                              }
                            
                          }
                        }
                  $i++;
              }
              
                      ?>
              </table>

              <?php  // Close connection ?>
              <br>
<button onclick="location.href='searchanim.php';" >Search Value</button>
<button onclick="location.href='modanim.php';" >Modify Value</button>
<button onclick="location.href='delanim.php';" >Delete Value</button>
<button onclick="location.href='animalform.php';" >Enter Value</button>
      </div>
      <div style="text-align: right;">
      <img src="images/wol.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
