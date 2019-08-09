<!DOCTYPE html>
<html>
	<head>
		<title>Curriculum</title>
		<meta charset="utf-8">
		<meta name="viewport" content= "width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-sacale=1.0" >
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../micss/estilos.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<div class="nav-side-menu">
    			<div class="brand">MENU</div>
    				<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        		<div class="menu-list">
            		<ul id="menu-content" class="menu-content collapse out">
                		<li>
                  			<a href="index.php?action=inicio">
                  			<i class="far fa-file"></i> Curriculum Vitae
                  			</a>
                		</li>

                		<li  data-toggle="collapse" data-target="#products" class="collapsed">
                  			<a><i class="fab fa-js" ></i> Java Script <span class="arrow"></span></a>
                		</li>
                	<ul class="sub-menu collapse" id="products">
                    	<li><a href="index.php?action=crudjs">CRUD</a></li>
                	</ul>


                	<li data-toggle="collapse" data-target="#service" class="collapsed">
                  		<a><i class="fab fa-php"></i> PHP <span class="arrow"></span></a>
                	</li>  
                	<ul class="sub-menu collapse" id="service">
                  		<li><a href="index.php?action=crudphp">CRUD</a></li>
                  		<li></li>
                	</ul>
                	
                	<li data-toggle="collapse" data-target="#cesharp" class="collapsed">
                  		<a><i class="far fa-copyright"></i> C# <span class="arrow"></span></a>
                	</li>  
                	<ul class="sub-menu collapse" id="cesharp">
                  		<li><a href="index.php?action=progcsharp">Programa</a></li>
                  		<li></li>
                	</ul>


                	<li data-toggle="collapse" data-target="#new" class="collapsed">
                  		<a><i class="fab fa-android"></i> Android <span class="arrow"></span></a>
                	</li>
                	<ul class="sub-menu collapse" id="new">
                  		<li><a href="index.php?action=androidapp1">Aplicación</a></li>
                  	</ul>
            	</ul>
     			</div>
			</div>
			<div class="container col-md-9 col-sm-8" id="contenidooooo">
                <section> 
                    <?php
                        $mvc = new MVCController();
                        $mvc -> EnlacesPaginasController();
                    ?>
                </section>
			</div>
		</div>
	    <script type="text/javascript" src="js/jquery.js"> </script>
	    <script type="text/javascript" src="js/bootstrap.min.js"> </script>
	</body>
</html>