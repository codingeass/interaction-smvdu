<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="public/css/pro.css"/>
    <script type="text/javascript" src="public/js/post.js"></script>    
    <script type="text/javascript" src="public/js/search.js"></script>
    <script type="text/javascript" src="public/js/view.js"></script>
    <script type="text/javascript" src="public/js/change_subcategory.js"></script>
    <script type="text/javascript" src="public/js/message.js"></script>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>SMVDU INTERACTION</title>
	</head>
	<body>
      
    <section id="p_main">
      <section id="p_first">
          <ul>

          <li><div>MENU</div></li>
           <hr>          
          <li><div onclick="d_profile()" style="cursor:pointer">Profile</div></li>
          <li><div onclick="d_post()" style="cursor:pointer">BlogPost</div></li>
          <li><div onclick="d_search()" style="cursor:pointer" >Search Profile</div></li>
          <li><div onclick="d_edit()" style="cursor:pointer" >Edit Blog</div></li>
          <li><div onclick="d_complaint()" style="cursor:pointer">Complaint</div></li>
          <li><div onclick="d_feedback()" style="cursor:pointer">Feedback</div></li>
          <li><div onclick="d_inbox()" style="cursor:pointer">Message</div></li>
          <li><div><a href="public/php/logout.php">Logout</a></div></li>
          <!--repair this code-->
          </ul>
      </section> 

<section id="p_second"> 
      <section id="profile">
          <div id="profile_image">
           <img src="public/img/profile/default.png">
           <div id="image_button" onclick="upload_image()"><img src="public/img/imagechange.png">Change profile</div> 
          </div>
          <?php
          require("public\php\sessionv.php");
            require("public/php/profile.php");
            //date("F j, Y, g:i a");  
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


      <section id="editfirst">
          <div onclick="editacontent()" id="s1" style="cursor:pointer;">ADD new blog post</div>
          <br/>
          <div onclick="editcontent()" id="s2" style="cursor:pointer;"> Edit older Post</div>
      </section>

      <section id="add_content">
        <center>Post : <input type="text" size="60" name="title">&nbsp;&nbsp;&nbsp;<button onclick="addcontent()">Publish</button>&nbsp;&nbsp;<button onclick="addback()">Close</button><center>
        <br/><br/>
        <textarea rows="50" cols="100" name="content">
        </textarea>
      </section>

      <section id="blogposts">
          
      </section>


      <section id="select_post">
      </section>

      <section id="edit_content">
      <center>Post : <input type="text" size="60" name="title">&nbsp;&nbsp;&nbsp;<button onclick="upcontent()">Update</button>&nbsp;&nbsp;<button onclick="adduback()">Close</button><center>
    <br/><br/>
    <textarea rows="50" cols="100" name="content">
    </textarea>
    <section id="edit_comment"></section>
    </section>


    <section id="message_wr">
      <table>
      <tr><td>Recipient :</td><td><input type="email" name="to_email" disabled="true"></td></tr>
      <tr><td>Message :</td><td><textarea name="content_message" rows="10" cols="50" maxlength="500" required></textarea>Limit:500 characters</td></tr>
      <tr><td><input type="button" value="Send Message" onclick="message_com()"></td></tr>
      </table>
      <input type="hidden" name="email_h">
    </section>

    <section id="message_inbox">
    </section>

    <section id="feedback">
      <table>
          <tr><td>Subject :</td><td><input type="text" name="subject" required></td></tr>
          <tr><td>Message :</td><td><textarea name="feedback_message" rows="10" cols="50" maxlength="500" required></textarea>Limit:500 characters</td></tr>
          <tr><td><input type="button" value="Send Feedback" onclick="feedback_send()"></td></tr>
        </table>
    </section>

    <section id="complaint">
      <form>
        <table>
          <tr><td>Category:</td><td><select name="category" onchange="update()" required>
            <option value=1>Administration</option>
            <option value=2>Academics</option>
            <option value=3>Hostel</option>
            <option value=4>Network Centre</option>
          </select></td></tr>
        </table>

        <table>
          <tr><td>Sub Category:</td><td><select id="sub" name="sub_category" required>
            <option value=1>Finance</option>
            <option value=2>A & E Section</option>
            <option value=3>XYZ</option>
            <option value=4>ABC</option>
          </select></td></tr>
          <tr><td>Message:</td><td><textarea name="complaint_message" rows="10" cols="50" maxlength="500" required></textarea>Limit:500 Characters</td></tr>
          <tr><td><input type="button" value="Send Complaint" onclick="complaint_send()"></td></tr>
        </table>
      </form>
    </section>
    
</section>
<section id="profile_section">
      <br/><br/>
      <form  method="post" action="public/php/image_upload.php" enctype="multipart/form-data" >
          <input type="file" id="file" name="file" /><br /><br />
          <input type="submit" name="submit" value="Upload" />
          <input type="button" name="Cancel" value="Cancel" onclick="close_imageupload()"/>
      </form>
    </section>
  </body>
</html> 
