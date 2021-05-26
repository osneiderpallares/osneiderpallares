<form>
  <a href="{{ url("/cliente/crear") }}">Crear resgistro</a>
  <table class="table">
  @foreach ($cli as $cli)
  <tr>
    <th>Identificación:</th>      
    <td>{{ $cli->id }}</td>    
    <th>Nombre:</th>      
    <td>{{ $cli->first_name }}</td>
    <th>Apellido:</th>      
    <td>{{ $cli->last_name }}</td>
    <th>Email:</th>      
    <td>{{ $cli->email }}</td>    
    <td><a href="{{ url("/cliente/edit/$cli->id") }}">Editar</a></td>
    <td><a href="{{ url("/cliente/$cli->id") }}">Eliminar</a></td>
  </tr>
  @endforeach
</table>
</form>