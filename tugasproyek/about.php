<!DOCTYPE html>
<html>
<head>
	<title> About Us GrandMa Recipe </title>
	<meta name="viewport" content="with=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/all.css">
	<style type="text/css">
		body{ background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url(food.jpg);
			height: 100vh; 
			margin: 0; 
			padding: 0; 
			background-size: cover; 
			background-position: center;
			background-repeat: no-repeat; 
			background-attachment: fixed;
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
		.h1{
			position: absolute;
		}
		.main {
			position: absolute;
			top: 50%; 
			left: 50%; 
			transform: translate(-50%, -50%);
			background: rgba(0,0,0,0.5); 
			padding: 10px; 
			width: 800px;
			box-shadow: 0 0 2px 2px grey;
		}
		h1.normal {text-align: center; font-size: 250%; font-style: normal, bold; color: white; }
		p.thick {font-size: 20px; color: white; font-weight: bold;}
		p{ padding-right: 8%; padding-left: 8%; color: white; font-size: 18px; font-style: normal; font-weight: normal; color: #F0F8FF; font-family:"Times New Roman", Times, serif;}
		h2{font-style: normal; font-weight: bolder; color: #F0F8FF; font-family: fantasy; font-size: 40px; padding-top: 0%; padding-left: 10%; padding-right: 15%;
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
	<div class="main">
	<br><br><br><br><h1 class="normal"> About Us </h1><br><br>
		<p style="text-align: justify; text-indent: 0.5in;"> GrandMa Recipe merupakan Platform website yang menyajikan informasi kumpulan resep aneka masakan, resep aneka kue, dan resep aneka minuman. Website GrandMa Recipe dibuat untuk membantu dan memudahkan anda untuk memiliki alterntif produk makanan yang ingin dikonsumsi tanpa harus bersusah payah untuk mengingatnya karena platform kami akan memberikan informasi bahan - bahan yang harus disiapkan, cara membuat, sampai dengan cara penyajian. Follow official account kami di Twitter dan Instagram untuk informasi - informasi atau testimony masakan dari GrandMa Recipe. Subscribe official account kami di YouTube untuk video masak dari GrandMa Recipe. </p>
		<br><br>
		<h2 align="center"> It`s Time to Cooking with GrandMa Recipe</h2>
		<br><br>
	</div>
</body>
</html>