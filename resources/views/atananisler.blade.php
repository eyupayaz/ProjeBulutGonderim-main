<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Atanan İşler</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
                        <a href="/index" class="logo">İşim Cepte </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
  <ul class="nav">
    <li><a href="/index">Anasayfa</a></li>
    <li><a href="/iletisim">İletişim</a></li>
    <li><a href="#" class="active">Atanan İşler</a></li>
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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/about-image-1-940x460.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>ATANAN IŞLERİNİZİ GÖRÜN</h2>
                        <!-- <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
                <div class="container">
            <br>
            <br>
			<div class="row">
			<div class="col-4">
			<div class="card">
  <div class="card-header bg-primary">
    To Do
</div>
<ul class="list-group list-group-flush">
  @foreach($assignedWorks as $work)
    <li class="list-group-item {{ $work->status == 1 ? 'text-decoration-line-through' : '' }}">
        @if ($work->status == 1)
            <del>{{ $work->work_name }}</del>
        @else
            {{ $work->work_name }}
        @endif
        ({{ $work->time }} Saat) 

        <form action="{{ route('start.work') }}" method="POST" style="display: inline;">
            @csrf
            <input type="hidden" name="work_name" value="{{ $work->work_name }}">
            <input type="hidden" name="time" value="{{ $work->time }}">
            <button type="submit" class="btn btn-primary" style="float:right; background-color:blue; border-color:blue;">Start</button>
        </form>
    </li>
@endforeach

</ul>

</div>
			</div>
			<div class="col-4">
			<div class="card">
  <div class="card-header bg-info">
    In Progress
  </div>
  @foreach($listele as $list)
  <ul class="list-group list-group-flush">
    <li class="list-group-item  {{ $list->status == 1 ? 'text-decoration-line-through' : '' }}"> 
	    @if ($list->status == 1)
            <del>{{ $list->work_name }}</del>
        @else
            {{ $list->work_name }}
        @endif
        ({{ $list->time }} Saat) 

	
	
	
	
	
            <form action="{{ route('finish.work') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="work_name" value="{{ $list->work_name }}">
                <input type="hidden" name="time" value="{{ $list->time }}">
                <button type="submit" class="btn btn-info" style="float:right;">Finish</button>
            </form>


	</li>
 	    @endforeach
  </ul>
</div>
			</div>
			<div class="col-4">
			
			<div class="card">
  <div class="card-header bg-success">
 Done
  </div>

  <ul class="list-group list-group-flush">
  @foreach($listele2 as $list2)
    <li class="list-group-item">{{ $list2->work_name }}</li>
    @endforeach
  </ul>
</div>
			</div>
			
			</div>
    <!--
   <table>
        <thead>
            <tr>
                <th>İş Adı</th>
                <th>Zaman</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
               <td>{{ $work->time }}</td>
            </tr>
        </tbody>
    </table>-->

            <br>
             
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
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
  

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
<!-- Button trigger modal -->

<script src="https://kit.fontawesome.com/558de1d289.js" crossorigin="anonymous"></script>

<!-- Modal -->
<script>
	

var alertMessage = '{{ session("error") }}';
if (alertMessage) {
        alert(alertMessage);
    }
		
	
	</script>
  </body>
</html>