<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Hello World</h2>
    <br>
    <a href="{{ route('home') }}"></a>
    <ul>
        @foreach ($students as $student)
            <li>
                <p>
                    Nome: {{ $student['name'] }}
                </p>
                <p>
                    Cognome: {{ $student['surname'] }}
                </p>
                <p>
                    Età: {{ $student['age'] }}
                </p>
            </li>
        @endforeach
    </ul>
</body>

</html>
