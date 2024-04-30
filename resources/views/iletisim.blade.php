<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>İletisim</title>

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
                        <a href="index.html" class="logo">İşim Cepte </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="/index">Anasayfa</a></li>
    <li><a href="#" class="active">İletişim</a></li>
    <li><a href="/atananisler">Atanan İşler</a></li>
    <li><a href="/islerisiralama">İşleri Sıralama</a></li>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/send.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Geri Bildirim Yapabilirsiniz</h2>
          
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="/iletisim-kaydet" method="post">
    @csrf <!-- CSRF koruması için gerekli -->
    <div class="mb-3">
        <input type="hidden" name="user_name" value="{{ session('email') }}">
        <input type="text" class="form-control" name="message_title" placeholder="Mesaj Konusu" required>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mesajınızı Giriniz</label>
            <textarea class="form-control" name="user_message" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Gönder</button>
</form>

                    </div>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="tabs-content">
                        <label>Email</label>
                        @if(session()->has('email'))
    <p >{{ session('email') }}</p>
@endif
						<p>
		
                        <p> +1 333 4040 5566</p>

                        <label>Address</label>
                        <p> 212 Barrington Court New York, ABC 10001 United States of America</p>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

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
@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

  </body>
</html>