<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <title>Table layout</title>
<script>
function log() {
  alert("Sucessfully logout  !");
}
</script>

</head>
<style>
                 a:link {
			color:whitesmoke;
			background-color: transparent;
			text-decoration: none;
		}
		a:visited {
			color:burlywood;
			background-color: transparent;
			text-decoration: none;
		}
                *{
  margin:0px;
  padding:0px;
  
}

.bgimage{
  background-image: url('hm2.jpg');
  background-size: 100% 110%;
  width: 100%;
  height: 90vh;
  

}
		
		
		.header {
			overflow: hidden;
			background-color:black;
		}
		.menu{
			width: 100%;
			height: 100px;
			background-color: rgba(0,0,0,0.5);
		}
		.leftmenu img{
			width: 10%;
			line-height: 100px;
			float: left;
			padding: 5px;
			height: 85px;
			/*	background-color: yellow;*/
		}
		.rightmenu{
			width:70%;
			height: 100px;
			float: right;
			/*	background-color: red; */
		}
		.rightmenu ul{
			margin-left:500px;
		}
		.rightmenu ul li {
			font-family: 'Montserrat', sans-serif;
			display: inline-block;
			list-style: none;
			font-size: 15px;
			color:white;
			font-weight: bold;
			line-height: 100px;
			margin-left: 40px;
			text-transform: uppercase;
		}
		#fisrtlist{
			color: orange;
		}
		.rightmenu ul li:hover{
			color: orange;
		}
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');
*{
 margin:0;
 padding: 0;
 outline: 0;
}


table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 80%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;
}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;

}
h1 {
  background-color: black;
  color: white;
}
 	
    
footer{
	bottom: 0;
	Margin-top: 0;
	

}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:500px; }
}


.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}



.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-top: 500px;
	}

}
	
</style>
<body>
 <div class="bgimage">
		<div class="header">
			
			<div class="leftmenu">
				<img src="logo.jpeg">
			</div>

			<div class="rightmenu">
				<ul>
					<li id="fisrtlist"><a href="index.html"> HOME </a></li>
					<li> <a href="aboutus.html">about us</a></li>
					<li> <a href="gallery.html">PORTFULIO</a></li>
					<li> <a href="contactus.html">Contact us </a></li>
					<li> <a href="signup.html" target="_blank" >SIGN UP </a></li>
					<!--<li><a href="login.html" target="_blank">LOG IN</a></li>-->
                                        <li><a href="index.html" onclick="log()" > LOGOUT</a></li>
				</ul>
			</div>

		</div>
</div>

<?php
   $username = urldecode($_GET['username']); // print_r($_GET);       
?>

<form action="course.php" method="post">
	 <input type="hidden" name="username" value="<?=$username;?>" />
 <table >

 

 <tr>

 <th>Sr no</th>

 <th>Courses Name</th>

 <th>Description</th>

 <th> Select</th>
 </tr>

<tr>

 <td>1</td>
 
 <td>Agriculural Training</td>
 <td>Mushroom Cultivation, Bee Keeping, Medicinal Plants</td>

 <!--<td><a href="https://www.futurelearn.com/subjects/nature-and-environment-courses/agriculture"><button class="btn">Select</button></a></td>-->
 <td><input type="submit" name="course1" value="select" class="btn" /></td>
 


 </tr>

 <tr>

 <td>2</td>

 <td>Dairying</td>

 <td>Small Milch/Dairy Animal (Buffalo, Cow) Rearing Units</td>



 <!--<td><a href="https://www.classcentral.com/course/dairy-4055"><button class="btn">Select</button></a></td>-->
 <td><input type="submit" name="course2" class="btn" value="select"/></td>
 
 </tr>

 <tr>

 <td>3</td>

 <td>Animal Husbandry</td>

 <td>Goat/ Sheep Rearing for Meat/ Woo</td>


 <!--<td><a href="https://study.com/articles/Online_Animal_Husbandry_Courses_and_Classes_Overview.html"><button class="btn">Select</button></a></td>-->
 <td><input type="submit" name="course3" value="select" class="btn" /></td>
 
 </tr>

 <tr>

 <td>4</td>
 <td>	Fisheries</td>
 <td>	Fisheries	Fish Rearing/ Seed Production in Small Ponds</td>
 <!--<td><a href="https://www.fishsmarter.com.au/products/"><button class="btn">Select</button></a></td>-->
 <!--<td><a href="https://www.fishsmarter.com.au/products/"><button class="btn">Select</button></a></td>-->
 <td><input type="submit" name="course4" value="select" class="btn"/></td>
 

 </tr>

 <tr>

 <td>5</td>

 <td>	Handloom</td>

 <td>Weaving, Processing</td>
 <!--<td><a href="https://www.udemy.com/course/indian-handloom-masterclass/"><button class="btn">Select</button></a></td>-->
 <td><input type="submit" name="course5" value="Select"class="btn" /></td>
  </tr>
  <tr>
  <td>6</td>
 
  <td>	Handicrafts</td>
 
  <td>Production of Handicraft Items, Processing Activities (Polishing)</td>
  <!--<td><a href="https://www.skillshare.com/browse/crafts"><button class="btn">Select</button></a></td>-->
  <td><input type="submit" name="course6"  value="Select"class="btn"/></td>
  
 </tr>
 <tr>
  <td>7</td>
 
  <td>	Sericulture</td>
 
  <td> Cocoon Rearing,Reeling of Yam</td>
  <!--<td><a href="https://www.classcentral.com/course/swayam-sericulture-technology-17784"><button class="btn">Select</button></a></td>-->
  <td><input type="submit" name="course7" value="Select" class="btn" /></td>
  
 </tr>
 
 <tr>
  <td>8</td>
 
  <td>	Food Processing</td>
 
  <td>Making Jam, Jelly, Murabba</td>
  <!--<td><a href="https://www.futurelearn.com/courses/how-is-my-food-made"><button class="btn">Select</button></a></td>-->
  <td><input type="submit" name="course8" value="Select" class="btn" /></td>
  
 </tr>
 <tr>
  <td>9</td>
 
  <td>	Appropriate vocation</td>
 
  <td>Computer and mobile repairing</td>
  <!--<td><a href="https://urbanareas.net/info/training/computer-repair/"><button type="button" class="btn">Select</button></a></td>-->
  <td><input type="submit" name="course9"  value="Select"class="btn"/></td>


 </tr>
 <tr>
	 <td>10</td>

	 <td>	Social Forestry</td>

	 <td>Raising Nurseries</td>
	 <!--<td><a href="https://www.hortcourses.com/courses/nursery-growers-course-607.aspx"><button class="btn">Select</button></a></td>-->
	 <td><input type="submit" name="course10"  value="Select"class="btn"/></td>

 </tr>

 <tr>
	 <td>11</td>
	 <td>Add Course Name which you want</td>
	<td><input type="text" name="new_course_name" placeholder="Enter Course Name"/></td>
	 <td><input type="submit" name="new_course" class="btn" value="Select"/></td>
	



 </tr>
 </table>

 </form>
    <footer class="footer-distributed">
					<div class="footer-left">
						<img src="rr3.jpg">
						<h3>About <span> NYKS </span></h3>
						<p class="footer-links">
						<a href="#"><a href="hmpage12.html">Home</a></a>
						|
						<a href="#" ><a href="index.html">LOGIN</a></a>
						|
						<a href="#"><a href="aboutme.html">About</a></a>
						|
						<a href="#"><a href="call.html">Contact</a></a>
						</p>
						<p class="footer-company-name">Nehru Yuva Sangathan Kendra</p>
					</div>
					<div class="footer-center">
						<div>
							<i class="fa fa-map-marker"></i>
							<p>2 Floor,JPN Bhawan,Kalina Camp Mumbai University, Vidyanagri<br>Mumbai,Maharashtra Pin : 400098</p>
						</div>
						<div>
							<i class="fa fa-phone"></i>
							<p>26530291</p>
						</div>
					</div>
					<div class="footer-right">
						<p class="footer-company-about">
						<span>About the company</span>
						We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
						<div class="footer-icons">
							<a href="https://www.facebook.com/nyksindia/" class="fa fa-facebook"></a>
							<a href="https://twitter.com/Nyksindia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/explore/locations/255312018/nehru-yuva-kendra-sangathan-nyks-india"><i class="fa fa-instagram"></i></a>
							<a href="https://in.linkedin.com/company/nehru-yuva-kendra"><i class="fa fa-linkedin"></i></a>
							<a href="https://www.youtube.com/channel/UC92JD6qkHMDq6oiDftS6RbQ/videos"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</footer>
	</body>
</html>
</body>

</html>



