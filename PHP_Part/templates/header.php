
    <head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style_landing.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2de98ff439.js" crossorigin="anonymous"></script>
	
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  		
		<style type="text/css">
	 		.brand{
				  background: rgb(35, 35, 95) !important;
				  color: white !important;
	 		 }
  			.brand-text{
  				color: white !important;
  			}
  			.white{
				max-width: 460px;
				margin: 20px auto;
				padding: 20px;
			}

			#searchbar{
				margin-left: 350px;
				width: 330px;
				color: white;
			}
			  
			.grey lighten-4{
    		background:url('../img/bg2.jpg');
			}

			#bb{
				color: transparent; 
				background-color: transparent; 
				border-color: transparent; 
				cursor: default;
			}

			h1,h2,h3,h4,h5,h6, div{
   				 font-family: 'Cormorant Garamond', serif;
			}

			@media only screen and (max-width: 480px) {
				.container{
        		flex-direction: column;
        		text-align: left;
				 }
			}
			
  		</style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>YC Badminton Store | Welcome</title> 
    </head>

	<body class="grey lighten-4">
		<nav class="black z-depth-1">
			<div class="container">
				<a href="/project/Landing.html" class="brand-logo brand-text" style="text-decoration: none">YC Badminton</a>
				<!-- Add product button -->
				<div id="nav-mobile" class="right hide-on-small-and-down">
					<a href="add.php" class="btn brand z-depth-0">Add a Porduct</a>
				</div>
				<!-- Search bar -->
				<form id="searchbar" action="search.php" method ="POST" >
					<input type="text" name="search" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
					<button type="submit" name="submit-search" id = bb></button>
				</form>
			</div>
		</nav>
	</body>
	  
	  

    

