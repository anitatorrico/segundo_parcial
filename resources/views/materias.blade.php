<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Segundo parcial - DESARROLLO DE SOFTWARE</title>
</head>
<body>
    <h1 class="text-center">Lista de Materias</h1>
    <div class="container-fluid">
        <table class="table">
 <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Materias</th>
    </tr>
  </thead>
  @foreach ($materias as $item)
  <tbody>
    
    <tr>
    <td>{{ $item->Id }}</td>
    <td>{{ $item->name }}</td>
    </tr>
       @endforeach
  </tbody>
</table>
        </table>
    </div>
   
</body>
</html>