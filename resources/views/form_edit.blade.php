<form id="form" action="{{ url("/cliente/mod/$cli->id") }}" method="POST" enctype="multipart/form-data">  
  {{ csrf_field() }}
  <div class="form-group">
    <label for="identificacion">Identificación: </label>
    <input type="text" class="form-control" id="id" name="id" value="{{ $cli->id }}" placeholder="Identificación">    
  </div>

  <div class="form-group">
    <label for="nombre">Nombre: </label>
    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $cli->first_name }}" placeholder="Nombre">
  </div>

  <div class="form-group">
    <label for="nombre">Apellido: </label>
    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $cli->last_name }}" placeholder="Apellido">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $cli->email }}"aria-describedby="emailHelp" placeholder="Enter email">   
  </div>    
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>