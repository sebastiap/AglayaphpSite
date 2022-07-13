
<?php
session_start();
require_once '../conexion.php';
$error = "no";
$filename = $_FILES["fileToUpload"]["name"];
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$date = date('Y-d-m', time());
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $bdusuario = htmlspecialchars($_GET["user"]);
  $publicacion = $_POST["publicacion"];
  $descripcion = $_POST["contenido"];
  if ($publicacion == '') {
    $error = "vacio";
  }
  if ($descripcion == '') {
    $descripcion = 'No hay descripcion disponible';
  }
  $categoria = $_POST["categoria"];
  echo  $bdusuario;
  echo  $publicacion;
      if($error == "vacio"){
        $_SESSION['error'] = "Fallo al insertar la publicacion. Debes Ingresar un Titulo para la publicacion";
        header('location: ../producciones.php');
      }
      else {
    $sql =
        "INSERT INTO producciones
        (NOMBRE_PRODUCCION,DESCRIPCION, URLIMAGEN, ID_CATEGORIA,FECHA_ASIGNACION,FECHA_ENTREGA,ID_USUARIO, PUNTAJE)
        VALUES
        ('$publicacion','$descripcion' ,'$filename',$categoria,'$date','$date', $bdusuario,3);";

echo '<h3>' . $sql  . '</h3>';
      $query = Connection::connectDb()->exec($sql);

echo '<h3>' . $query  . '</h3>';

       if($query == 1){

            echo "INSERTO";
      $_SESSION['exito'] = "Se ha insertado con exito la publicacion .";
      header('location: ../producciones.php');
      
          }
            else {
        $_SESSION['error'] = "Fallo al insertar la publicacion";
            echo "NO INSERTO";
          }

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . "." . $target_file;
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  }
}
?>

