<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>İşim Cepte</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/index" class="logo">İŞİM Cepte </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="/index"  class="active">Anasayfa</a></li>
    <li><a href="/iletisim">İLETİŞİM</a></li>
    <li><a href="atananisler">Atanan İşler</a></li>
    <li><a href="/islerisiralama">İŞLERİ Sıralama</a></li>
        <li>
            <a href="#" id="logout-link">Çıkış</a>
        </li>
   
</ul>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için

        document.getElementById('logout-form').submit(); // Formu gönder
    });
</script>

        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top" style="height:757px;">
       
            <img src="assets/images/image2.jpg" id="bg-video"  type="video/mp4" />
		
        <div class="video-overlay header-text">
            <div class="caption">
                
@if(session()->has('email'))
    <h3 style="color:white;">Hoşgeldin, {{ session('email') }}</h3>
@endif

                <h2>İŞİNİ TAKİP ET</h2>

                <div class="main-button">
                    <a href="/takvim">İş Takvimine Git</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>