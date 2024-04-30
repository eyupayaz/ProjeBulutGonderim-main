<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>İş Sıralaması</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <li><a href="/iletisim">İletişim</a></li>
    <li><a href="/atananisler">Atanan İşler</a></li>
    <li><a href="#"  class="active">İşleri Sıralama</a></li>
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

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/takvim.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                         <h2>İş Sıralaması</h2>
                        <p>İş önceliklerinize göre sıralamanızı oluşturun</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
		<br>
		<br>
           <div class="row">
		   <div class="col-4">
		    <div class="card" style="width: 18rem;">
        <div class="card-header bg-primary">
            To Do
        </div>

        <ul class="list-group list-group-flush">
@foreach ($isleriki as $veri)
    @if ($veri->work_name)
        <li class="list-group-item" onclick="fillWorkName('{{ $veri->work_name }}')" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer;">{{ $veri->work_name }}</li>
    @endif
@endforeach

        </ul>
    </div>
		   </div>
		   
		   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action="{{ route('kaydet') }}" method="post">
    @csrf
    
    <input type="hidden" id="user_mail" name="user_mail" value="{{ session('email') }}">

    <input type="hidden" id="work_name" name="work_name" value="">
    <label for="siralama">Puanlayınız:</label><br>
    <input type="number" class="form-control" id="siralama" name="siralama" min="1" max="5" style="width:200px;"value="1"><br><br>


    <button type="submit" class="float-right btn btn-outline-success">Kaydet</button>
</form>
	
    </div>
  </div>
</div>


		    </div> <div class="col-8">
		   
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">İş Sıralaması</th>
        </tr>
    </thead>
    <tbody>
	 @php $counter = 1; @endphp
        @foreach ($islerdort as $veri1)
            @if ($veri1->work_name)
                <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>{{ $veri1->work_name }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

		   </div>
		   
		 
        </div>
    <div class="row">
	


	</div>
	</section>
    <!-- ***** Blog End ***** -->

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
<script>
    function fillWorkName(workName) {
        document.getElementById('work_name').value = workName;
    }
	 var alertMessage = '{{ session("alert") }}';
   if (alertMessage) {
        alert(alertMessage);
    }
</script>
  </body>
</html>