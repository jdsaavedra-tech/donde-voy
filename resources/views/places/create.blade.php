<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DondeVoy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-med-12">
                <div class="card">
                    <div class="card-header">
                        Crear local
                    </div>
                    <div class="card-body">
                        <form action="{{route('places.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Categoría</label>
                                <input type="text" class="form-control" name="category">
                            </div> 
                            <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control" name="address">
                            </div> 
                            <div class="form-group">
                                <label for="">Barrio</label>
                                <input type="text" class="form-control" name="neighborhood">
                            </div> 
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <input type="text" class="form-control" name="description">
                            </div>  
                            <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                            <a href="{{route('places.index')}}" class="btn btn-danger mt-2">Cancelar</a>                                                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>