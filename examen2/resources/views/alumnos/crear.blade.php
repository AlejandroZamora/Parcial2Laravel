<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alumno</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin-top: 50px;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Crear Nuevo Alumno</h2>

        <div class="mb-4">
            <a href="/alumnos" class="btn btn-link">Ver Alumnos</a>
        </div>

        <form action="/alumnos/crear" method="POST">
            @csrf

            <div class="form-group">
                <label for="carnet">Carnet:</label>
                <input type="text" name="carnet" id="carnet" class="form-control" placeholder="Ingrese el carnet" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su teléfono" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo electrónico" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su dirección" required>
            </div>

            <div class="form-group">
                <label for="municipioId">Municipio:</label>
                <select name="municipioId" id="municipioId" class="form-control" required>
                    <option value="">Seleccione un municipio</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->id }}">{{ $municipio->descripcion }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
