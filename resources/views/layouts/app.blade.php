<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ig=edge">
    <style>
        h1, table, th, td, text, label{
            color: #39FF14;
            border: 3px solid #FF00FF;
            border-collapse: collapse;
            text-align: center;
            align-content: center;
        }
        a{
            color: #FFFFFF;
        }
    </style>
    <title>Proyecto</title>
</head>
<body style="background-color: rgb(0, 0, 0); font-family: monospace;">
    <a href="{{ route('students.index') }}">Listar alumnos</a>
    <a href="{{ route('student.create') }}">Registar alumno</a>
    @yield('content')
</body>
</html>