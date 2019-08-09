var selectedRow = null;

function onFormSubmit () {

	  if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
		}

}

function readFormData(){
	var formData={};
	formData["cuenta"] = document.getElementById("cuenta").value;
	formData["nombre"] = document.getElementById("nombre").value;
	formData["apellidop"] = document.getElementById("apellidop").value;
	formData["apellidom"] = document.getElementById("apellidom").value;
	formData["turno"] = document.getElementById("turno").value;
	formData["promedio"] = document.getElementById("promedio").value;
	return formData;
}

function insertNewRecord(data){
	var table = document.getElementById("listaalumnos").getElementsByTagName('tbody')[0];
	var newrow = table.insertRow(table.length);
	cell1 = newrow.insertCell(0);
	cell1.innerHTML = data.cuenta;

	cell2 = newrow.insertCell(1);
	cell2.innerHTML = data.nombre;

	cell3 = newrow.insertCell(2);
	cell3.innerHTML = data.apellidop;

	cell4 = newrow.insertCell(3);
	cell4.innerHTML = data.apellidom;

	cell5 = newrow.insertCell(4);
	cell5.innerHTML = data.turno;

	cell6 = newrow.insertCell(5);
	cell6.innerHTML = data.promedio;

	cell7 = newrow.insertCell(6);
	cell7.innerHTML = `<a class="btn btn-outline-primary btn-sm" onClick="onEdit(this)">Editar</a>
                       <a class="btn btn-outline-primary btn-sm" onClick="onDelete(this)">Eliminar</a>`;
}

function resetForm(){
	document.getElementById("cuenta").value = "";
	document.getElementById("nombre").value = "";
	document.getElementById("apellidop").value = "";
	document.getElementById("apellidom").value = "";
	document.getElementById("turno").value = "";
	document.getElementById("promedio").value = "";
	selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;	
    document.getElementById("cuenta").value = selectedRow.cells[0].innerHTML;
	document.getElementById("nombre").value = selectedRow.cells[1].innerHTML;
	document.getElementById("apellidop").value = selectedRow.cells[2].innerHTML;
	document.getElementById("apellidom").value = selectedRow.cells[3].innerHTML;
	document.getElementById("turno").value = selectedRow.cells[4].innerHTML;
	document.getElementById("promedio").value = selectedRow.cells[5].innerHTML;
}

function updateRecord(formData) {

	selectedRow.cells[0].innerHTML = formData.cuenta;
	selectedRow.cells[1].innerHTML = formData.nombre;
	selectedRow.cells[2].innerHTML = formData.apellidop;
	selectedRow.cells[3].innerHTML = formData.apellidom;
	selectedRow.cells[4].innerHTML = formData.turno;
	selectedRow.cells[5].innerHTML = formData.promedio;
}

function onDelete(td) {
    if (confirm('¿Estas seguro que quieres eliminar?')) {
        row = td.parentElement.parentElement;
        document.getElementById("listaalumnos").deleteRow(row.rowIndex);
        resetForm();
    }
}

function validate() {
    isValid = true;
    if (document.getElementById("cuenta").value == "") {
        isValid = false;
        confirm('No. de cuenta esta vacio')
        document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("validacioncuenta").classList.contains("hide"))
            document.getElementById("validacioncuenta").classList.add("hide");
    }
    return isValid;
}