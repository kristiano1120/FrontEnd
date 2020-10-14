<form  method="post" action="login.php" autocomplete="on"> 
    <h3>Ingresar</h3> 
    <hr>
    <div class="form-group"> 
        <label for="username" class="uname" data-icon="u" >Usuario</label>
        <input placeholder="Usuario" class="form-control" id="username" name="username" required="required" type="text"/>
    </div>
    <div class="form-group"> 
        <label for="password" class="youpasswd" data-icon="p">Contraseña</label>
        <input placeholder="Contraseña" class="form-control" id="password" name="password" required="required" type="password"/> 
    </div>
    <div class="form-group"> 
        <input class="btn btn-success" type="submit" name="login" value="Ingresar" /> 
    </div>
    <p class="change_link">
        Aun no eres miembro ?
        <a href="#toregister" class="to_register">Regístrate</a>
    </p>
</form>