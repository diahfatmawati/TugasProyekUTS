<!DOCTYPE html>
<html>
<head>
	<title> Time to Cooking with Grandma Recipe</title>
	<meta name="viewport" content="with=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{ background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url(food.jpg); 
		    height: 100vh; background-size: cover; background-position: center; background-attachment: fixed;
			}
			{font-family: Arial, Helvetica, sans-serif;
			}
		*{ margin: 0px; padding: 0px; font-family: sans-serif;
			}
		ul { list-style-type: none; margin: 5; padding: 5; overflow: hidden; background-color: black;
			}
		li { float: right;
			}
		li a { display: block; color: black; font-size: bold; text-align: center; padding: 14px 16px; text-decoration: none;
			}
		li a:hover { background-color: #8B4513;
			}
		.navbar { overflow: hidden;
		 	background-color: white;
		}

		.navbar a { float: left;
			font-size: 16px;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		.dropdown {
			float: left;
			overflow: hidden;
			}
		.dropdown .dropbtn {
			font-size: 16px;  
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
			}
		.navbar a:hover, .dropdown:hover .dropbtn {
			background-color: #8B4513;
			}
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #8B4513;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			}
		.dropdown-content a {
			float: none;
			color: white;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
			}
		.dropdown-content a:hover {
			background-color: #BC8F8F;
			}
		.dropdown:hover .dropdown-content {
			display: block;
			}
		#menu{ max-width: 2000px; margin: auto;
			}
		.title{ position: absolute; top: 40%; left: 30%; transform: translate(-50%;-50%); 
			}
		.title h1{ font-family: sans-serif; color: #FFF; font-size: 70px;
			}
		h1.italic {font-style: italic; font-weight: bolder; color: #8B4513; font-family: “Duru Sans”, Verdana, sans-serif; font-size: 80px; padding-left: -50%; padding-top: -50%;
			}
		h2{font-style: normal; font-weight: bolder; color: #F0F8FF; font-family: fantasy; font-size: 40px; padding-top: 0%; padding-left: 10%; padding-right: 15%;
			}
		h2.italic { font-weight: normal; color: #FFE4E1; font-family: fantasy; font-size: 30px; padding-top: 2%; padding-left: 20%; padding-right: 10%; font-weight: bold;
			}
	</style>
</head>
<body>
<div class="navbar" >
	<div id="menu">
		<ul>
		<li><a href="login.php"> Log Out </a></li>
   		<li><a href="sosialmedia.php"> Social Media </a></li>
   		<li><a href="about.php"> About Us </a></li>
  		<li><div class="dropdown">
    		<button class="dropbtn"> Kumpulan Resep Masakan
    		<i class="fa fa-caret-down"></i>
    		</button>
    
    	<div class="dropdown-content">
      		<a href="gudegjogja.php"> Gudeg Jogja </a>
      		<a href="asinanjakarta.php"> Asinan Jakarta </a>
     		<a href="satemakasar.php"> Sate Makasar </a>
    	</div>
  		</div></li>
  		  		<li><div class="dropdown">
    		<button class="dropbtn"> Kumpulan Resep Kue
    		<i class="fa fa-caret-down"></i>
    		</button>
    
    	<div class="dropdown-content">
      		<a href="donatcair.php"> Donat Cair </a>
      		<a href="bikangketan.php"> Bikang Ketan </a>
    	</div>
  		</div></li>
  		  		<li><div class="dropdown">
    		<button class="dropbtn"> Kumpulan Resep Minuman
    		<i class="fa fa-caret-down"></i>
    		</button>
    
    	<div class="dropdown-content">
      		<a href="setupbuah.php"> Setup Buah Rambutan </a>
      		<a href="vanilieice.php"> Vanilie Ice </a>
     		<a href="durianice.php"> Durian Ice </a>
    	</div>
  		</div></li>
		<li><a href="home.php">Home</a></li>
		</ul>
</div>
<div class="title">
		<h1 class="italic"> GrandMa Recipe </h1> 
		<h2> It`s Time to Cooking with GrandMa Recipe</h2>
		<h2 class="italic"> "Makanan bukan hanya masakan yang akan berakhir di perutmu, Melainkan sebuah petualangan yang patut dinikmati dan dihargai." </h2>
	</div>
</body>
</html>