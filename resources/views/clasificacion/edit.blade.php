<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edicion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h4>EDITAR clasificacion</h4>
    <div class="row">
        <div class="col-x1-12">
            <form action="{{ route('patchClass', ['id'=>$clasificacion->id_clasificacion]) }}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="desc_c">descripcion_clasificacion</label>
                    <input type="text" class="form-control" name="desc_c" required maxlength="10" value="{{$clasificacion->desc_c}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="reset" class="btn btn-defaul" value="cancelar">
                    <a href="javascript:history.back()">Ir al listado</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
