<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>clasificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h4>gestion de clasificacion</h4>
        <div class="row">
             <div class="col-x1-12">
                 <form href="clasificacion.index" method="get">
                     <div class="form-row">
                         <div class="col-sm-4">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                         </div>
                         <div class="col-auto">
                            <input type="submit" class="btn btn-primary" value="buscar">
                         </div>
                         <div class="col-auto">
                             <a  href="nuevaClas" class="btn btn-success">nuevo</a>
                         </div>
                     </div>
                 </form>
             </div>
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>opciones :)</th>
                            <th>Id_clasificacion</th>
                            <th>desc_c</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clasificacion as $clasificacion)
                            <tr>
                                <td><a href="{{url('editClas',$clasificacion->id_clasificacion)}}" class="btn btn-warning btn-sm">Editar</a> |
                                    <form action="{{ route('deleteClass', [$clasificacion->id_clasificacion]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form> </td>
                                <td>{{$clasificacion->id_clasificacion}}</td>
                                <td>{{$clasificacion->desc_c}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>

    </div>
</body>
</html>
