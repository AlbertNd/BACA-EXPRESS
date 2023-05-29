<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  <div class="min-h-screen">
    <div class="z-40 top-0 sticky">
      <x-bar-navigation />
    </div>
    <div>
      @yield('Acceuil')
    </div>
  </div>
  <footer class="bg-green-500 py-5 ">
    <div class="container mx-auto ">
      <div class="text-center">
        &copy; 2023 BacaExpress. Tous droits réservés
      </div>
    </div>
  </footer>
</body>

</html>