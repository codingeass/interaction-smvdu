<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/css/pro.css"/>
	</head>
	<body>
      
    <section id="p_main">
      <section id="p_first">
          <ul>
          <li><id>MENU</id></li>
          <hr>          
          <li><id>Profile</id></li>
          <li><id>Blogging</id></li>
          <li><id>Search Profile</id></li>
          <li><id>Feedback</id></li>
          <li><id>Complaint</id></li>
          <li><id>Feedback</id></li>
          </ul>
      </section> 

      <section id="profile">
          <?php
        try{
          require_once("public/php/connect.php");

          if(!isset($_REQUEST['name'])){
            session_start();
          $que=mysql_query("SELECT * FROM user WHERE `email`='".strip_tags($_SESSION["email"])."'");
          if($que){
              while($res=mysql_fetch_assoc($que))
              {
                $id=$res['id'];
                break;
              }

          }
          else
            echo "<script>window.location.assign('index.php');</script>";
          $query=mysql_query("SELECT * FROM ".strip_tags($_SESSION["type"]). " WHERE id = '".$id."' ;")
          or die("error");
          if($query){
          while($result=mysql_fetch_assoc($query)){
          echo "<table>";
          echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
          echo "<tr><td>Sex:</td><td>".$result['sex']."</td></tr>";
          echo "<tr><td>Email:</td><td>".$_SESSION["email"]."</td></tr>";
          echo "<tr><td>Date of Birth:</td><td>".$result['date_of_birth']."</td></tr>";
          echo "<tr><td>Date of joining:</td><td>".$result['date_of_joining']."</td></tr>";
          echo "<tr><td>Entry No.:</td><td>".$result['entry_no']."</td></tr>";
          echo "<tr><td>Branch:</td><td>".$result['branch']."</td></tr>";
          echo "<tr><td>Semester:</td><td>".$result['semester']."</td></tr>";
          echo "<tr><td>Area of Interest:</td><td>".$result['area_of_interest']."</td></tr>";
          echo "<tr><td>Projects:</td><td>".$result['project']."</td></tr>";
          echo "<tr><td>Contact No.:</td><td>".$result['contact']."</td></tr>";
          echo "<tr><td>Address :</td><td>".$result['address']."</td></tr>";
          echo "</table>";
        }
      }
   }
 }
 catch(Exception $e)
 {
  echo "<script>window.location.assign('index.php');</script>";
 }
  ?>
      </section>
   </section>
	</body>
</html> 
