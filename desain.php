<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Saham Tani</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="style/css/paralax.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/css/custom/custom.css">
  </head>
  <body>
  <!-- header -->
  <nav class="green darken-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">Home</a></li>
          <li><a href="badges.html">Tentang</a></li>
          <li><a href="collapsible.html">Cari Lahan</a></li>
          <li><a href="mobile.html">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

  <!-- isi Halaman -->
  <section>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="gambar/slider/background.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="gambar/slider/background-2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="gambar/slider/background-3.jpeg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
  </section>
<!-- tentang saham tani -->
  <section>
    <div class="container">
      <h4 class="center">Tentang Saham tani</h4>
      <p class="flow-text">
        test test test test test test test test test test test test test test test test test test test test test
      </p>
    </div>
  </section>
  <!-- tombol login -->
  <section>
      <div class="parallax-container">
        <div class="parallax"><img src="gambar/slider/background-4.jpeg"></div>
      </div>
  </section>
  <!-- Lahan Sample -->
  <section>
    <div class="container">
      <h4 class="center">Daftar lahan terbaru</h4>
      <div class="row">
          <div class="card col m3 s12 ">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="images/office.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
              <p><a href="#">This is a link</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section>
    <footer class="page-footer green darken-5">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright green darken-2">
        <div class="container">
          &copy 2018 copyright web
        </div>
      </div>
    </footer>
  </section>

    <script type="text/javascript" src="style/js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
          indicators: false
          });
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
    </script>
  </body>
</html>