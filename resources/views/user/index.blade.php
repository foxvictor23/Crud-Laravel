<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <main class = "container">
         <h1>Index</h1>
          <a type="button" href="{{route('user.create')}}" class="btn btn-primary">
            Novo Usuário
          </a>  
         <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome: </th>
                <th scope="col">E-mail: </th>
                <th scope="col">Ver: </th>
                <th scope="col">Editar: </th>
                <th scope="col">Excluir: </th>
                </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>   
                  <td>
                    <a type="button" href="{{route('user.show', $user->id)}}" class="btn btn-success"> Ver </a>
                  </td>    
                  <td>
                    <a type="button" href="{{route('user.edit', $user->id)}}" class="btn btn-warning"> Editar </a>
                  </td>     
                  <td>
                    <form method="post" action="{{route('user.destroy', $user->id)}}">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger"> Excluir </a>
                    </form>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>