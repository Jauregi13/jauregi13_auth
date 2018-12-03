
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <title>Zubiri Manteo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Autentification">
      <meta name="author" content="ajuanenama">
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

      <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/png">
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ url("font-awesome/css/font-awesome.min.css") }}">
  </head>

  <body>

      @include("elements.navbar")

      <main class="p-0">
          @yield("content")
      </main>

  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
