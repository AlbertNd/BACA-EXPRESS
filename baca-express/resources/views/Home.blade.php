<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/FormulaireRecherche.js','resources/js/Menuhamburger.js','resources/js/FormulaireReserveJquery.js'])
</head>

<body>
  <div class="min-h-screen">
    <div class="z-40 top-0 sticky">
      <x-bar-navigation />
    </div>
    <div>
      @yield('Acceuil')
      @yield('horaire')
      @yield('reservation')
      @yield('apropos')
      @yield('contact')
      @yield('service')
    </div>
  </div>
  <footer class="bg-green-500 py-5 ">
    <div class="container mx-auto ">
      <div class="text-center">
        &copy; 2023 BacaExpress. Tous droits réservés
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</body>

</html>