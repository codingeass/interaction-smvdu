<?php 
  if (isset($_REQUEST["v"])) {
    if($_REQUEST["v"]!="")
    {  
      require_once("connect.php");
      $name=urldecode(strip_tags($_REQUEST['v']));
      $query="SELECT name,type,email FROM user WHERE name like '%".$name."%' ORDER BY name";
      $result=mysql_query($query); 
      while($res=mysql_fetch_array($result))
      {
        echo "<a href=\"javascript:othersearch('{$res['email']}')\">{$res['name']}  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( {$res['type']} )<br>";  
      }
    }
  }
?>