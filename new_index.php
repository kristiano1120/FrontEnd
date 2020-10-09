<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Red Social</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/styles_frontend.css"/> 		
    </head>
    <body>
        <section class="sectlogin">
            <div class="container">
                <!-- Codrops top bar -->
                <!-- <div class="codrops-top"> -->
                    <div class="title">RS <br/>Configuro Web</div>
                <!-- </div>/ Codrops top bar -->
                
            </div>        			
            <div class = "container_demo"  id="container_demo" >
            
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form  method="post" action="login.php" autocomplete="off"> 
                            <h3>Ingresar</h3> 
                            <hr>
                            <p> 
                                <!-- <label for="username" class="uname" data-icon="u" > Tu usuario </label> -->
                                <input id="username" name="username" required="required" type="text" placeholder="Usuario"/>
                            </p>
                            <p> 
                                <!-- <label for="password" class="youpasswd" data-icon="p"> Tu contraseña </label> -->
                                <input id="password" name="password" required="required" type="password" placeholder="Contraseña"/> 
                            </p>
                            <p class="login button"> 
                                <input id="loginb" type="submit" name="loginb" value="Ingresa" />
                                <input id="registro" type="submit" name="registro" value="Regístate" />
                            </p>
                            <!-- <p class="change_link">
                                Aun no eres miembro ?
                                <a href="#toregister" class="to_register">Regístrate</a>
                            </p> -->
                        </form>
                    </div>
                        <div id="register" class="animate form">
                                <?php include('sign_up_form.php'); ?>
                        </div>
                </div>
            </div>  
        </section>
        
    </body>
</html>