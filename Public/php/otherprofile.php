<?php
        try{
          require_once("connect.php");

          if(isset($_REQUEST['v'])){
          $que=mysql_query("SELECT * FROM user WHERE `email`='".strip_tags($_REQUEST["v"])."'");
          if($que){
              while($res=mysql_fetch_assoc($que))
              {
                $id=$res['id'];
                $type=$res['type'];
                $image=$res['image'];
                break;
              }

          }
          else
            echo "<script>window.location.assign('index.php');</script>";
          if($image!='NO'){
            echo "<div id='profile_image'><img src=\"public/img/profile/".$res['image']."\"></div>";
          }

          $query=mysql_query("SELECT * FROM ".$type. " WHERE id = '".$id."' ;")
          or die("error");
          if($query){
            if($type=="student")
            {
              while($result=mysql_fetch_assoc($query)){
              echo "<div id='message'><button onclick=\"message_send('".$result['id']."','".$result['name']."')\">Send Message</button></div>";
              echo "<table>";
              echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
              echo "<tr><td>Sex:</td><td>".$result['sex']."</td></tr>";
              echo "<tr><td>Email:</td><td>".strip_tags($_REQUEST["v"])."</td></tr>";
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
            if($type=="faculty")
            {
                while($result=mysql_fetch_assoc($query)){
              echo "<div id='message'><button onclick=\"message_send('".$result['id']."','".$result['name']."')\">Send Message</button></div>";
              echo "<table>";
              echo "<tr><td>Name:</td><td>".$result['name']."</td></tr>";
              echo "<tr><td>Sex:</td><td>".$result['sex']."</td></tr>";
              echo "<tr><td>Email:</td><td>".strip_tags($_REQUEST["v"])."</td></tr>";
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