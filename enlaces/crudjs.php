
		<div  class="col-sm-12">
        <br>
        <table class="table">
          <th>CRUD usando solo Java Script</th>
          <tr>
            <td>
              <form onsubmit="event.preventDefault(); onFormSubmit();"  autocomplete="off">  
                <div class="form-group col-4">
                  <label >No. de cuenta</label><label class="validation-error hide" id="validacioncuenta">*:</label><br>
                  <input class="form-control" type="number" name="cuenta" id="cuenta">
                </div>
                <div class="form-group col-4">
                  <label>Nombre:</label><br>
                  <input class="form-control" type="text" name="nombre" id="nombre">
                </div>
                <div class="form-group col-4">
                  <label>Apellido Paterno:</label><br>
                  <input class="form-control" type="text" name="apellidop" id="apellidop">
                </div>
                <div class="form-group col-4">
                  <label>Apellido Materno:</label><br>
                  <input class="form-control" type="text" name="apellidom" id="apellidom">
                </div>
                <div class="form-group col-4">
                  <label>Turno:</label><br>
                  <input class="form-control" type="text" name="turno" id="turno">
                </div>
                <div class="form-group col-4">
                  <label>Promedio</label><br>
                  <input class="form-control" type="number" name="promedio" id="promedio">
                </div>
                <br>
                <div>
                  <input class="btn btn-dark" type="submit" name="enviar" value="ENVIAR">
                </div>
                <br>
              </form>
            </td>
          </tr>
          <tr>
              <table class="table" id="listaalumnos">
                <thead>
                  <tr>
                    <th>Cuenta</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Turno</th>
                    <th>Promedio</th>
                    <th>  </th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>              
          </tr>

        </table>
        <script src="enlaces/crudjs.js"></script>
			</div>
			
			
