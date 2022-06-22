
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

    <a  href="Animals.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Z-00 Animals</h1>
          <p style="font-size:x-large;">Search for Animal Record</p>


          <form method="post">
            <label class="A_breed">Animal Breed</label>
            <input class="A_breed" id="box" type="text" name="A_breed"><br><br>
            <button class="btn btn-success"  id="Book"type="submit" name="done">Search</button>

            </form>
            <br>
            <br>
            <table  ><thead> <th>ID   </th><th>Name   </th><th>Age   </th><th>Breed   </th><th>Feed </th></thead>
            <?php
            if(isset($_POST['done'])){
            $myfile = fopen("ani.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
            $index = array();
            $A_breed = $_POST["A_breed"];
	
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
      $low = 0;

      $flag =0;
      $found;
      $i =0;
      while($i<sizeof($a))
      {
        $v= $index[$i][0];
        if(((strcmp($A_breed,$v)) == 0)& $flag == 0)
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
                      </tr><?php
                                
                      }
                    
                  }
                  break;
                }
          $i++;
      }
      if($i==sizeof($a))
      {
        echo '<script>alert("Data Not Found");window.location.href="searchanim.php";</script>';
      }
      
     } ?>
                      </table>
        


      </div>
      <div style="text-align: right;">
      <img src="images/wol.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
