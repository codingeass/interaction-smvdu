<?php
        try{
          require_once("public/php/connect.php");

          if(!isset($_REQUEST['q'])){
            //session_start();
          $que=mysql_query("SELECT * FROM user WHERE `email`='".strip_tags($_SESSION["email"])."'");
          if($que){
              while($res=mysql_fetch_assoc($que))
              {
                $id=$res['id'];
                $image=$res['image'];
                break;
              }

          }
          else
            echo "<script>window.location.assign('index.php');</script>";
          if($image!='NO'){
            echo "<script> document.getElementById('profile_image').innerHTML=' <img src=\"public/img/profile/".$res['image']."\"><div id=\"image_button\" onclick=\"upload_image()\"><img src=\"public/img/imagechange.png\">Change profile</div>'</script>";
          }

          $query=mysql_query("SELECT * FROM ".strip_tags($_SESSION["type"]). " WHERE id = '".$id."' ;")
          or die("error");
          if($query){
            if(strip_tags($_SESSION["type"])=="student")
            {
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
              break;
              }
            }
            else
            if(strip_tags($_SESSION["type"])=="faculty")
            {
                while($result=mysql_fetch_assoc($query)){
              echo "<table>";
              echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
              echo "<tr><td>Sex:</td><td>".$result['sex']."</td></tr>";
              echo "<tr><td>Email:</td><td>".$_SESSION["email"]."</td></tr>";
              echo "<tr><td>Date of Birth:</td><td>".$result['date_of_birth']."</td></tr>";
              echo "<tr><td>Date of joining:</td><td>".$result['date_of_joining']."</td></tr>";
              echo "<tr><td>Designation :</td><td>".$result['designation']."</td></tr>";
              echo "<tr><td>Department :</td><td>".$result['department']."</td></tr>";
              echo "<tr><td>Qualification :</td><td>".$result['qualification']."</td></tr>";
              echo "<tr><td>Area of Interest:</td><td>".$result['area_of_interest']."</td></tr>";
              echo "<tr><td>Area of Specialization :</td><td>".$result['area_of_specialization']."</td></tr>";
              echo "<tr><td>Projects:</td><td>".$result['project']."</td></tr>";
              echo "<tr><td>Contact No.:</td><td>".$result['contact']."</td></tr>";
              echo "<tr><td>Address :</td><td>".$result['address']."</td></tr>";
              echo "</table>";
              break;
              }
            }
      }
   }
 }
 catch(Exception $e)
 {
  echo "<script>window.location.assign('index.php');</script>";
 }
  ?>