    <?php     
    $dbhost='xxx';
    $dbusername='xxx';
    $dbuserpass='xxx';
    $dbname='xxx';
    // Conectar a la base de datos
    mysql_connect ($dbhost, $dbusername, $dbuserpass);
    mysql_select_db($dbname) or die('No se puede seleccionar la base de datos');
    if ($_POST['username']==null){
    echo "No introdujo usuario";
    }
    if ($_POST['username']) {
    //Comprobacion del envio del nombre de usuario y password
    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($password==NULL) {
    echo "La password no fue enviada";
    }else{
    $query = mysql_query("SELECT username,password FROM usuarios WHERE username = '$username'") or die(mysql_error());
    $data = mysql_fetch_array($query);
    if($data['password']!=$password) {
    echo "$password\n";
    echo "Login incorrecto";
    }else{
    $query = mysql_query("SELECT username,password FROM usuarios WHERE username = '$username'") or die(mysql_error());
    $row = mysql_fetch_array($query);
    session_start();
    $_SESSION["k_username"] = $username;
    echo ("Bienvenido <strong>".$_POST['username']." </strong> ya puedes acceder a las siguientes secciones:<br><center>".'<a href="2684268413971397/addatabase.php">Registrar datos</a>'."");
    echo ("<br><br><center><a href='2684268413971397/visualization.php'>Buscador</a>." );
    echo ("<br><br><center><a href='2684268413971397/tablasasignacion.php' target='auto_blank'>((TABLAS DE ASIGNACIÓN))</a>");
    }
    }
    }
    ?> 
    
    
    
    
    
    
    
    "VULNERABILIDADES EN ESTE CÓDIGO"
    
    //No puedes ver el username, pero puedes usar LIMIT para sacar todas las contraseñas//
    
    //Se duda el cifrado de las contraseñas, utilizar al menos MD5 u otro algoritmo hash//
    
    ----------->       $username=$_POST['username'];
        $password=$_POST['password'];
        if ($password==NULL) {
        echo "La password no fue enviada";
        }else{
        $query = mysql_query("SELECT username,password FROM usuarios WHERE username = '$username'") or die(mysql_error());
        
        
        
        
    //Retornará un error de mysql, lo que da una pista al hecho que hay una asignacion directa y se puede inyectar algo indebido//
    
    --------->    if($data['password']!=$password) {
                  echo "$password\n";
    
    
    
    
    
