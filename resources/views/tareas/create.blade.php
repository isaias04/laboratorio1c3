<form action="{{url('/tareas')}}" method="POST">
    @csrf

    <label for="tarea">Tarea</label>
    <input type="text" name="tarea" id="task">
    <br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="description">
    <br>
    <label for="fecha">Fecha</label>
    <input type="text" name="Fecha" id="date">
    <br>
    <input type="submit" value="Guardar" id="">
</form>