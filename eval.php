
<?php
$cadena = 'taza';
$nombre = 'café';
$str = 'Esto es una $cadena con mi $nombre en ella.';
echo $str. "\n";
eval("\$str = \"$str\";");
echo $str. "\n";
?>

//El constructor de lenguaje eval() es muy peligroso porque permite la ejecución de código de PHP arbitrario. Su uso está totalmente desaconsejado//

//No se aconseja su uso ya que permite la ejecución de código PHP. Si se usa con información proporcionada por un usuario hay que cercionarse de validar ésta antes.//
