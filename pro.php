<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/css/pro.css"/>
    <script type="text/javascript" src="public/js/search.js"></script>
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
          <li><id><a href="public/php/logout.php">Logout</a></id></li>
          <!--repair this code-->
          </ul>
      </section> 

      <section id="profile">
          <?php
            require("public/php/profile.php");
          ?>
      </section>

      <section id="search">
          <input type="text" name="search_value" size="35" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Name To Search">
          <br/><br/>
          <input type="button" name="search" value="search" onclick="search_pro()">
          <div id="search_text"></div>
      </section>

   </section>
	</body>
</html> 
