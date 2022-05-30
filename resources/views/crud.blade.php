<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

   @include('scripts.resultados')
    
</head>
<body>
    <div>
        <button type="button" onclick="eventosResultados()" class="btn btn-primary">Primary</button>
    </div>

  <div id="container-table">
    <div class="d-flex justify-content-center table">
      <div class="table-responsive" style="width: 90%">
          <table class="table table-hover table-dark text-center">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>descripcion</th>
                      <th>precio</th>
                      <th>stock</th>
                      <th>Acciones</th>
                  </tr>
              </thead>
              <tbody id="tbodyID">
                 
              </tbody>
          </table>
       </div>
      </div>   
  </div>   
    
</body>
</html>