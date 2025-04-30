<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Alumnos</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body, html {
            width: 100%;
            height: 100%;
        }
        .container {
            max-width: 100%;
        }
        .table {
            width: 100% !important;
            font-size: 1.2rem;
        }
        .table th, .table td {
            text-align: center;
            padding: 1rem;
        }
        .action-links a {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center mt-4">
            <a href="/alumnos/crear" class="btn btn-primary btn-lg">Nuevo Alumno</a>
        </div>
        <h2 class="text-center mb-4">Listado de Alumnos</h2>

        <!-- Tabla de alumnos -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Carnet</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Municipio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->carnet }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>{{ $alumno->Municipio->descripcion }}</td>
                    <td class="action-links">
                        <a href="/alumnos/editar/{{$alumno->id}}" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/alumnos/eliminar/{{$alumno->id}}" class="btn btn-danger btn-sm" onclick="return eliminarAlumno('¿Estás seguro de eliminar este alumno?')">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
<!-- Links de paginación -->
<div class="d-flex justify-content-center mt-4">
    {{ $alumnos->links() }}
</div>

        <!-- Enlace para crear nuevo alumno -->
        
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Confirmación de eliminación -->
    <script>
        function eliminarAlumno(mensaje) {
            return confirm(mensaje);
        }
    </script>
</body>

</html>
