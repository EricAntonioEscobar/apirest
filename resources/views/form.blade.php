<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="d-flex justify-content-center">

        <form method="post" action="{{ route('form.store') }}" class="w-100">
          @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Descripcion</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Precio</label>
              <input type="number" class="form-control" name="precio" id="precio" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Stock</label>
              <input type="text" class="form-control" name="stock" id="stock" placeholder="name@example.com">
            </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
          </form>
        
    </div>
  </div> 
    
</body>
</html>