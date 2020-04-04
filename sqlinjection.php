    <?
    $mysqli = new mysqli('localhost','root', ,'seguridad');
    if($mysqli->connect_errno){
        echo 'error db';
    }
    $id=$_GET['id'];
    if(isset($id) && !empty($id)){
        $sql = "SELECT text,title FROM news where id=" $id;
        #echo $sql;
        $q = $mysqli->query($sql) or mysql_error();
        $row = $q->fetch_assoc();
        if(isset($row['title'])){
            echo 'Titulo: '  $row['title'];
            echo "<br>";
            echo 'Texto: ' $row['text'];
            echo "<br>";
        }
    }
    else{
        echo 'pase algun valor en la variable id';
    }
    ?> 
    
    
    
    
    
    
    
    
    
    
    
    "VULNERABILIDADES DENTRO DE ESTE CÓDIGO"
    
    
    
    
    //1. Usar isset y empty viene a ser la función redundante, ya que ambas hacen lo mismo//
    
    ------------>  if(isset($id) && !empty($id)){
    
   
   
   
   
   //2. Intentar tener un control sobre los datos que se manejan. Si se usa el ID únicamente como un integro, asegúrarse que es un integro//
   
   //En esta parte del código se puede filtrar una petición// 
    
     ------------->  $id=$_GET['id'];
                     $sql = "SELECT text,title FROM news where id=" $id;
   
   
   
   
    //3. Aprender a utilizar Try/Catch en vez de usar el "OR ELSE"//
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
