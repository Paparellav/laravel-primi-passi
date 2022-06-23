<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav>
      <ul style="display: flex; justify-content: space-evenly; list-style: none;">
        <li>
          <a href="{{ route('home') }}">
            Home
          </a>
        </li>
        <li>
          <a href="{{ route('about-us') }}">
            About Us
          </a>
        </li>
        <li>
          <a href="{{ route('contact-us') }}">
            Contact Us
          </a>
        </li>
        <li>
          <a href="{{ route('join-us') }}">
            Join Us
          </a>
        </li>
      </ul>
    </nav>
    <h2>Studenti</h2>
    <br>
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
