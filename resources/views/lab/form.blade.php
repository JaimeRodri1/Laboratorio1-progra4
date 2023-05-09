 <label class="form-label">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ isset($lab)?$lab->nombre:''}}" class"form-control"  /><br />
    <br />
    Tarea:
    <input type="text" name="apellido" id="aapellido" value="{{ isset($lab)?$lab->apellido:'' }}" /><br />
    <br />
    Materia:
    <input type="text" name="telefono" id="tele" value="{{ isset($lab)?$lab->telefono:'' }}"><br />
    <br />