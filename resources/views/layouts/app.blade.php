<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  {{-- Viene caricato il JS ed anche il file app.scss --}}
  @vite('resources/js/app.js')
</head>

<body>

  {{-- header --}}
  @include('partials.header')

  <div class="container p-5">
     {{-- segnaposto per il contenuto di ogni pagina.
        Questo dovrà essere sostituito in ogni pagina con un contenuto diverso --}}
    @yield('content') 
  </div>

  {{-- footer --}}
  @include('partials.footer')

</body>

</html>