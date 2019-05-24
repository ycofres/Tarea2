<?php
if($_POST){
    $persona=$_POST;
    core_persona::guardar($persona);
   }

   
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <div class="p-3 mb-2 bg-light text-dark">
  <body class='container'>
    <h3> Formulario de inscripción </h3>
    <form class="form=group" method="post" action="">

        <input type="hidden" name="id" >

      <?= asgInput('cedula','Cedula '); ?>
      <?= asgInput('nombre','Nombre '); ?>
      <?= asgInput('apellido','Apellido '); ?>
      <?= asgInput('comentario','Comentario'); ?>
      
      <div>
        <label> Genero   : </label>
        <input type="radio" name="genero" value="M" checked/> Masculino
        <input type="radio" name="genero" value="F"/> Femenino &nbsp; &nbsp; &nbsp;

      <label> Tipo de sangre</label>
      <select name ="sangre">
        <option value = "A+">A+ </option>
        <option value = "A-">A- </option>
        <option value = "AB+">AB+ </option>
        <option value = "AB-">AB- </option>
        <option value = "B+">B+ </option>
        <option value = "B-">B- </option>
        <option value = "O+">O+ </option>
        <option value = "O-">O- </option>
      </select> <br/>
      </div>
      <input required type="checkbox" /> Acepto enviar mis datos<br/>

      <div class='container' style="text-align: right;width:220px">
        <button class='btn btn-primary'type="submit" >Enviar</button>
        <button onclick="return confirm('¿Estas seguro?')"class='btn btn-primary'type="reset">Limpiar</button>

    </form>
    <hr>
<h3>
</div>
<h4>Datos agregados </h4>
</h3>
<table class="table table-stripped">
  <thead>
    <tr class="table-success">
      <th>Cedula </th>
      <th>Nombre </th>
      <th>Apellido </th>
      <th>Comentario </th>
      <th>Genero</th>
      <th>Tipo de Sangre  </th>
      <td> </td>
    </tr>
  </thead>
  <tbody>
<?php

$dir = 'Datos';
$archivos = scandir($dir);
$rs = core_persona::listado();
foreach($rs as $persona){
  $urlBorrar = base_url("index.php/main/borrar/{$persona->id}");
    echo "
    <tr>
    <td>{$persona->cedula}</td>
    <td>{$persona->nombre}</td>
    <td>{$persona->apellido}</td>
    <td>{$persona->comentario}</td>
    <td>{$persona->genero}</td>
    <td>{$persona->sangre}</td>
    <td><a href='$urlBorrar' onclick=\"return confirm('Seguro?'); \" class='btn btn-danger' >X</a></td>
    </tr> ";
  }
  


 ?>

  </tbody>
</table>
</div>




  </body>
</html>