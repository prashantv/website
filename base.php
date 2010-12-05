<?php

$content= "Page not found!";
$title = "Prashant Varanasi";
function loadParts($req) {
   global $content, $title;
   $fileName = "data/$req";
   if(file_exists($fileName) || 1) {
      $contents = file("data/$req");
      $title = $contents[0];
      array_shift($contents);
      $content = implode("\n", $contents);
   } 
}

$req = $_POST['page'];
loadParts("about");

?>
<!DOCTYPE html>
<html>
   <head>
      <title><? echo $title ?></title>
      <link href="static/default.css" media="screen" rel="stylesheet" type="text/css" /> 
      <link rel="icon" href="static/icon.png" type="image/png" /> 
   </head>
   <body>
      <div id="box">
         <div id="topbanner">
				<h3 id="name">Prashant Varanasi</h3>
         </div>
         <hr />
			<div id="sidebar">
				<a href="home">Home</a>
				<p>
				<a href="about">About Me</a>
				<hr />
				<a href="http://www.ipodsoft.com/">iPodSoft Projects</a>
            <ul>
               <li><a href="http://www.ipodsoft.com/site/pmwiki.php?n=IArt.HomePage">iArt</a></li>
               <li><a href="http://www.ipodsoft.com/site/pmwiki.php?n=Ivy.HomePage">Ivy Video Converter</a></li>
               <li><a href="http://www.ipodsoft.com/site/pmwiki.php?n=PodPlayer.HomePage">PodPlayer</a></li>
            </ul>
				<hr />
				<a href="contact">Contact</a>

         </div>
			<div id="content">
				<div id="realcontent">
               <? echo $content ?>
				</div>
         </div>
		</div>
		<div id="footer">
			&copy;2011 Prashant Varanasi. All rights reserved
		</div>
   </body>
</html>
