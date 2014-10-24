<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/css/pro.css"/>
    <script type="text/javascript" src="public/js/search.js"></script>
    <script type="text/javascript" src="public/js/view.js"></script>
	</head>
	<body>
      
    <section id="p_main">
      <section id="p_first">
          <ul>
          <li><div>MENU</div></li>
          <hr>          
          <li><div onclick="d_profile()" style="cursor:pointer">Profile</div></li>
          <li><div>Blogging</div></li>
          <li><div onclick="d_search()" style="cursor:pointer" >Search Profile</div></li>
          <li><div>Feedback</div></li>
          <li><div>Complaint</div></li>
          <li><div>Feedback</div></li>
          <li><div><a href="public/php/logout.php">Logout</a></div></li>
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

      <section id="others_profile">
      </section>

   </section>
	</body>
</html> 
