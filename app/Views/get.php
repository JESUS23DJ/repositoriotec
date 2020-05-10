<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Proyecto CRUD</title>
</head>

<body>
  <div class="text-center">
    <h1>Actualizar datos</h1>
  </div>
  <hr> <br>


  <div class="container-fluid">
    <div class="text-center">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Editar datos
      </button>
    </div>

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
            <form method="POST" action="<?= site_url('personal/update') ?>">
              <div class="form-row">  
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $model['nombre'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="apellido_p" placeholder="Apellido Paterno" value="<?= $model['apellido_p'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno" value="<?= $model['apellido_m'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="edad" placeholder="Edad" value="<?= $model['edad'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="sexo" placeholder="Sexo" value="<?= $model['sexo'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="date" class="form-control" name="f_nacimiento" placeholder="Decha de nacimiento" value="<?= $model['f_nacimiento'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="recursus@gmail.com" value="<?= $model['email'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?= $model['telefono'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?= $model['direccion'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="<?= $model['ciudad'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="c_p" placeholder="Codigo postal" value="<?= $model['c_p'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="are_de_trabajo" placeholder="Area de trabajo" value="<?= $model['are_de_trabajo'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="salario" placeholder="Salario" value="<?= $model['salario'] ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="save">Guardar</button>
                <input type="hidden" name="id" id="id" value="<?= $model['id'] ?>" >
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