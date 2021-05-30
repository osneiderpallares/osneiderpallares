<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>  
  <blockquote class="blockquote">
  <H2><p class="p-2 bg-primary text-white" align="center">
    Lista de clientes
  </p></H2>
</blockquote>

@if (Session('status'))
<div class='{{ Session('clase') }}' role="alert">
  {{ Session('status') }}
</div>
@endif   
    <p><a href="{{ url("/cliente/crear") }}">
    <button type="submit" class="btn btn-primary">Agregar registros</button></a></p>
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
        <td>
          <a href="{{ url("/cliente/edit/$cli->id") }}" class="btn-success"><button type="submit" class="btn btn-success" onclick="return confirm('¿Desea editar la infromación?');">Editar</button></a>          
        </td>
        <td>
          
          <a href="{{ url("/cliente/$cli->id") }}" class="btn-danger"><button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea borrar la infromación?');">Borrar</button></a>            
          
          

        </td>
      </tr>
      @endforeach
    </table>        
  <script type="js/bootstrap.min.js"></script>
  <script type="js/docs.min.js"></script>
</body>
</html>
