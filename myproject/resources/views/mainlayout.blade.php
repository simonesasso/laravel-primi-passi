<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <!-- link fontawesome ------------------------------------------------->
        <script src="https://kit.fontawesome.com/3226911cfb.js" crossorigin="anonymous"></script>
        <title>Laravel</title>

    </head>
    <body>

     <header>
       <h1>myheader</h1>
     </header>
     <nav>
      <h5>Home</h5>
      <h5>History</h5>
      <h5>Pricing</h5>
      <h5>Team</h5>
      <h5>Services</h5>
     </nav>

     <div class="main">
      @yield ("content")
     </div>

     <footer>
      <div class="div-ul-footer">
        <ul>
          <li>History</li>
          <li>Team</li>
          <li>Pricing</li>
        </ul>
        <ul>
          <li>History</li>
          <li>Team</li>
          <li>Pricing</li>
        </ul>
        <ul>
          <li>History</li>
          <li>Team</li>
          <li>Pricing</li>
        </ul>
      </div>
      <div class="footer-contatti">
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-youtube"></i>
      </div>
     </footer>
    </body>
</html>
