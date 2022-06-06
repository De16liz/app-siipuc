<?php 

use App\db;
db::connect();

$where = "";
$parametros = null;
$nombre_buscar = $_GET['nombre'] ?? null;

if ($nombre_buscar){
  // $parametros['nombre'] = nombre_buscar;

  $where = "where nombre like '%$nombre_buscar%'";
}

$res = db::query("SELECT * FROM membresias $where")->fetchAll(PDO::FETCH_OBJ);

?>
<h2 style="text-align:center;">Listado de personas</h2>

<!-- *************************************************** -->
<!-- Panel de control -->
<div style="display: flex; align-items: center; ">

  <div class="input-group mb-3" style="width: 80%;">
  <span class="input-group-text">Buscar nombre</span>
    <input id="input-buscar" type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
    <button class="btn btn-outline-secondary" type="button" onclick="buscar_nombre()" >Buscar</button>
  </div>

  <a type="button" class="btn btn btn-secundary" href="<?php App\html::echo_path('membresias') ?>">
    Ver todos
  </a>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="crear_membresia()">
    Regitrar membresia
  </button>

</div>

<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- *************************************************** -->


<!-- ********************************** lista de las tablas ***************************** -->
<table class="table tabla-mebresias">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Estado civil</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Barrio</th>
      <th scope="col">Profesion</th>
      <th scope="col" colspan="2">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($res as $dato){ 
  ?>
    <tr>
      <th scope="row"><?php echo $dato->id; ?></th>
      <td><?php echo $dato->cedula; ?></td>
      <td><?php echo $dato->nombre; ?></td>
      <td><?php echo $dato->nacimiento; ?></td>
      <td><?php echo $dato->ec; ?></td>
      <td><?php echo $dato->telefono; ?></td>
      <td><?php echo $dato->direccion; ?></td>
      <td><?php echo $dato->barrio; ?></td>
      <td><?php echo $dato->profesion; ?></td>
      <td>
        <div style="display: flex; column-gap: 10px">
            <button type="button" class="btn btn-primary" onclick='editar(<?php echo json_encode($dato) ?>)' data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
            <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="showDelete(<?php echo $dato->id ?>)">Borrar</button>
        </div>
      </td>
    </tr>
    <?php 
    }
    ?>
   </tbody>
</table>
<!-- *********************************************************************************** -->
<!-- ********************************** Dialogo de bootrap ***************************** -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">¿Estas seguro de eliminar?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Una vez eliminado no podra modificar los datos
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="sendDelete()">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- *************************************************************** -->
<!-- *************************************************************** -->
<!-- DIALOGO DEL FORMULARIO -->
<!-- *************************************************************** -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Regitrar membresia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- *************************************************************** -->
      <!-- *************************CONTENIDO DEL MODAL******************************** -->
      <div class="modal-body">
          <form id="form-datos" class="card-body" method="POST"  action="<?php App\html::echo_path('post/membresias-registrar')?>">
            <!-- Input cedula de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">contacts</span>
                </span>
                <!-- Input -->
                <input type="text" name ="cedula" class="form-control" placeholder="Cédula del feligrez" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input nombre de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">person</span>
                </span>
                <!-- Input -->
                <input type="text" name ="nombre" class="form-control capitalize" placeholder="Nombre de persona" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input fecha de nacimiento de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">calendar_today</span>
                </span>
                <!-- Input -->
                <input type="date" name ="nacimiento" class="form-control" placeholder="fecha de nacimiento" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input estado civil de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">people_outline</span>
                </span>
                <!-- Input -->
                <input type="text" name ="ec" class="form-control capitalize" placeholder="Estado civil" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input telefono de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">call</span>
                </span>
                <!-- Input -->
                <input type="text" name ="telefono" class="form-control" placeholder="Numero de contacto" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input direccion de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">home</span>
                </span>
                <!-- Input -->
                <input type="text" name ="direccion" class="form-control capitalize" placeholder="Dirección de residencia" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input barrio de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">home</span>
                </span>
                <!-- Input -->
                <input type="text" name ="barrio" class="form-control capitalize" placeholder="Barrio  " aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <!-- Input profesion de persona -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    <!-- Icono -->
                    <span class="material-icons">person</span>
                </span>
                <!-- Input -->
                <input type="text" name ="profesion" class="form-control capitalize" placeholder="Profesión ejercida" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <!-- ******************************* -->
            <!-- ************ Botones de control*************** -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" >Registrar</button>
            </div>
        </form>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<!-- *********************************************************************************** -->
<!-- *********************************************************************************** -->

<script>
    var ruta_insertar = "<?php App\html::echo_path('post/membresias-registrar')?>";
    var ruta_editar   = "<?php App\html::echo_path('post/membresias-actualizar')?>";
    var ruta_membresias  = "<?php App\html::echo_path('membresias')?>";
    var id_eliminar = -1;
    var formulario = document.querySelector('#form-datos');
    var input_buscar_nombre = document.querySelector('#input-buscar');

    function showDelete(i){
      id_eliminar = i
    }

    function sendDelete(){
      if (id_eliminar > 0){
        window.location.href = "<?php App\html::echo_path('post/membresias-borrar') ?>?id=" + id_eliminar;
      }
    }


    function crear_membresia(){

      var lista_input  = formulario.querySelectorAll('input');
      formulario.setAttribute('action', ruta_insertar);


      lista_input.forEach(input =>{
        input.value = '';
      })

    }


    function editar(datos){
      var arr = Object.entries(datos);

      formulario.setAttribute('action', `${ruta_editar}?id=${datos.id}`);

      arr.forEach(element => {
        input = formulario.querySelector(`input[name=${element[0]}]`);
        if (input){
          input.value = element[1];
        }
      });

    }

    function buscar_nombre(){
      let name = input_buscar_nombre.value;
      window.location.href = `${ruta_membresias}?nombre=${name}`;
    }

</script>