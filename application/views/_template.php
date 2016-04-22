<?php
/*
 * Main Templete
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{title}</title>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    
    
   </head>

  
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                                           
						<li class="active">
                                                    <a href="/">Home</a>
						</li>
                                                <li>
                                                    <a href="/players">Player</a>
						</li>
						<li>
                                                    <a href="/stock">Stock</a>
                                                </li>
                                                <li>
                                                    <a href="/games">Game</a>
                                                </li>
                                                <li>
                                                    <a href="/authorization/{loginstatus}">{loginholder}</a>
                                                </li>
                                                <li>
                                                    {registrationholder}
                                                </li>
                                            </ul>
					
				</div>
				
			</nav>
			
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
                                <h2>Welcome {username}</h2>
				{content}
			</div>
		</div>
	</div>
</div>

    
  </body>
</html>