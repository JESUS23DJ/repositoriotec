<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Proyecto</title>
<style>

  #table{
  
    box-shadow: 6px 6px 6px black;
  }
</style>

  </head>
<body>
<div class="text-center">
<h1>Recursos humanos</h1>
</div>    
<hr> <br>
<div class="container-fluid">
<table class=" table table-striped table-bordered" id="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">C_P</th>
      <th scope="col">Area de trabajo</th>
      <th scope="col">Salario</th>
      <th scope="col">   </th>
    </tr>
  </thead>
  <tbody>
  <?php $no=1 ?> 
  <?php foreach($personal as $persona){   ?> 
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $persona['nombre'] ?></td>
      <td><?= $persona['apellido_p'] ?></td>
      <td><?= $persona['apellido_m'] ?></td>
      <td><?= $persona['edad'] ?></td>
      <td><?= $persona['sexo'] ?></td>
      <td><?= $persona['f_nacimiento'] ?></td>
      <td><?= $persona['email'] ?></td>
      <td><?= $persona['telefono'] ?></td>
      <td><?= $persona['direccion'] ?></td>
      <td><?= $persona['ciudad'] ?></td>
      <td><?= $persona['c_p'] ?></td>
      <td><?= $persona['are_de_trabajo'] ?></td>
      <td><?= $persona['salario'] ?></td>
      <td><a href="<?= site_url('personal/get/' .$persona['id'])?>" class="btn btn-warning">Editar</a>
      <br> <br>
      <a href="<?= site_url('personal/del/' .$persona['id'])?>" class="btn btn-danger">Delete</a> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>

<div class="container-fluid">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Agregar datos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Agregar personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- Form -->
      <form method="POST" action="<?= site_url('personal/save') ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="apellido_p" placeholder="Apellido Paterno">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="edad" placeholder="Edad">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="sexo" placeholder="Sexo">
    </div>
    <div class="form-group col-md-6">
      <input type="date" class="form-control" name="f_nacimiento" placeholder="Decha de nacimiento">
    </div>
    <div class="form-group col-md-6">
      <input type="email" class="form-control" name="email" placeholder="recursus@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="telefono" placeholder="Telefono">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="direccion" placeholder="Dirección">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="c_p" placeholder="Codigo postal">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="are_de_trabajo" placeholder="Area de trabajo">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="salario" placeholder="Salario">
    </div>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="save">Guardar</button>
      </div>
</form>
      </div>
      
    </div>
  </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>