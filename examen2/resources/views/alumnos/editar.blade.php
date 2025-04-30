<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4 position-relative">
            <a href="/alumnos" class="btn btn-secondary btn-sm position-absolute top-0 start-0 m-3">Ver listado completo</a>
            <h2 class="text-center mb-4">Editar Alumno</h2>
            <form action="/alumnos/editar/{{ $alumno->id }}" method="POST">
                @csrf
                {{ method_field('PUT') }}

                <div class="mb-3">
                    <label class="form-label">Carnet:</label>
                    <input type="text" name="carnet" class="form-control" value="{{ $alumno->carnet }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apellido:</label>
                    <input type="text" name="apellidos" class="form-control" value="{{ $alumno->apellidos }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="{{ $alumno->telefono }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="email" name="correo" class="form-control" value="{{ $alumno->correo }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección:</label>
                    <input type="text" name="direccion" class="form-control" value="{{ $alumno->direccion }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Municipio:</label>
                    <select name="municipio_id" class="form-select" required>
                        @foreach($municipios as $municipio)
                            <option value="{{ $municipio->id }}" {{ $alumno->municipio_id == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->descripcion }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
