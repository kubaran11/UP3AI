<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favico.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
 <!-- ======== Swiper Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title>SŠMG Merch - obchod s merchem</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="">
        <img src="./images/logov2.png" height="70px" alt="">
      </a>
      </div>
      <ul class="nav-list">
        <div class="top">
        </div>
        <li><a href="index.html">Prihlasit se</a></li>
        <li>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="./images/nav.png" alt="" />
              </div>
 
        <!-- icons -->
        <li class="icons">
                  <!-- kosik -->
          <a href="kosik">
          <h1>
            <span>
            <img src="./images/bag.png" height="24px" alt="" />
                    <!-- celkova cena produktu v kosiku-->
              </h1>
          </span>
          </a>
          <span>
            <img src="./images/search.svg" alt="" /></span>
          <a href="login">
            <span>
              <img src="./images/user-solid.svg" alt="">
            </span>
          </a>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  


  <div class="hero">
    <div class="row">
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/mikca.png" alt="" />
            <div class="content">
              <h1>Nova mikina 
                <br/>
                Pouze za
                <span>300kč</span>
              </h1>
              <p>nvm.</p>
              <button>Do košíku</button>
            </div>
          </div>

          
          <div class="swiper-slide">
            <img src="./images/tricko.png" alt="tshirt" />
            <div class="content">
              <h1>První objednavka
                <br/>
                <span>20% sleva</span>
                na tricko
              </h1>
              <p>tricko.</p>
              <button>Do košíku</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Navigation -->
    <div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevrons-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevrons-right swiper-icon"></i>
        </div>
    </div>
  </div>

 
  <!-- Products -->
  <section class="section products">
    <div class="title">
      <h2>Produkty</h2>
      <span>Vyberte si jeden z našich preimových kousků!</span>
    </div>

    <div class="product-layout">
      <div class="product">
        <div class="img-container">
          <img src="./images/mikca.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

        </div>
        <div class="bottom">
          <a href="">Mikinka</a>
          <div class="price">
            <span>150kč-,</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/cap.jpg" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <a href="">Stylova cepka</a>
          <div class="price">
            <span>1800kč</span>
            <span class="cancel">2500-,</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/kryt.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <a href="">Kryt nma mobil </a>
          <div class="price">
            <span>800kč</span>
          </div>
        </div>
      </div>

      <div class="product">
        <div class="img-container">
          <img src="./images/tricko.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>
        </div>
        <div class="bottom">
          <a href="">Seksi tshirt</a>
          <div class="price">
            <span>250kč</span>
            <span class="cancel">400</span>
          </div>
        </div>
      </div>
  </section>


  <!-- Zacatek Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <!-- NADPIS VE SKUPINE ODKAZY -->
          <h3>ODKAZY</h3>
          <a href="#">Doprava</a>
          <a href="#">Darkové Kupony</a>
          <a href="#">Obchodní podmínky</a>
          <a href="#">Reklamační řád</a>
          <a href="#">Služby</a>
          <!-- Konec první skupiny -->
        </div>

        <div class="footer-center">
<!-- NADPIS VE SKUPINE O SPOLECNOSTI -->
          <h3>O Společnosti</h3>
          <a href="#">Základní informace</a>
          <a href="#">Kariéra</a>
          <a href="#">Kontaktujte nás</a>
          <a href="#">APlikace</a>
        </div>
          <!-- Konec skupiny -->
        <div class="footer-center">
          <!-- Kontakty kde najit -->
          <h3>Najdete nás</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            Školní 145, 282 01 Český Brod CZ
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            info@sosceskybrod.cz
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            763048374065
          </div>
      <!-- Kontakty konec -->
<!-- fotka s platebnimiy moznostmiy-->
          <div class="payment-methods">
            <img src="./images/payment.png" alt="">
          </div>
          <!-- konec fotky-->
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- Konec footru -->

  <!-- ======== cdnjs script ======= -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
  <!-- scripty -->
  <script src="./js/count.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>

