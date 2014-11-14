<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Basic HTML5/CSS3 Responsive Web Design</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	<div id="wrapper">
		
		<header>
			<h1>
				<img src="images/twitter.jpg"/>
			</h1>
		</header>
			<nav id="nav">
					<a href="#nav" title="Show navigation">Show navigation</a>
					<a href="#" title="Hide navigation">Hide navigation</a>
				<ul>
					<li class='active'><a href="index.php">Home</a></li>
					<li><a href="#followers">Followers</a></li>
					<li><a href="#following">Following</a></li>
					<li><a href="#">LogOut</a></li>
				</ul>
				<div class="clearfix"></div>
			</nav>
			<br/>
			<div id="table">
				<a id="followers"><h3>Followers</h3></a>
				<?php 
				//Read data from table in mysql
				//connecting to mysql
				$twitterapp = mysql_connect("localhost" , "root" , "0509725250") or die(mysql_error());

				//Selecting the database "twitterapp"
				mysql_select_db("twitterapp", $twitterapp); //two parameters-name of databse , connection

				//MYSQL Query 
				$sql = "SELECT * FROM followers;";

				$result = mysql_query($sql,$twitterapp); //putting the output into a varibale $result

				//creating the table on webpage
				?> 
				<div class="CSSTable" align="center" >
				<table border='1'>
				<tr>
				<th> ID </th>
				<th>Username</th>
				<th>Name</th>
				<th>Liked</th>
				<th> Location </th>
				<th> Description </th>
				<th>Num of Followers </th>
				<th> Num of Following </th>
				<th> Num of Tweets </th>
				</tr>
				<?php
				/*to read the response - using mysql_fetch_array() function in php*/

				while($row = mysql_fetch_array($result)) { 
				$ID = $row['ID'] ;
				$Username = $row['Username'];
				$name = $row['Name'];
				$liked = $row['Liked'];
				$location = $row['Location'];
				$description = $row['Description'];
				$NumFollowers = $row['NumFollowers'];
				$NumFollowing = $row['NumFollowing'];
				$NumTweets = $row['NumTweets'];
				 ?>
					<tr>
					<td><?php echo $ID ; ?>  </td>
					<td><?php echo $Username ; ?> </td>
					<td><?php echo $name ; ?></td>
					<td><?php echo $liked ; ?></td>
					<td><?php echo $location  ;?></td>
					<td><?php echo $description  ;?></td>
					<td><?php echo $NumFollowers ; ?></td>
					<td><?php echo $NumFollowing  ;?></td>
					<td><?php echo $NumTweets ; ?>	</td>
					</tr>

					<?php }		 ?>
				</table>
				<br/>
				<form action="login.html" method="post">
	 	 			<p class="submit"><input type="submit" name="proceed" value="Add Followers"></p>
      			</form><br/>
			</div>
		</div>
			<br/>
			<footer>
				Copy rights reserved
			</footer>
	</div>
	
</body>
</html>
