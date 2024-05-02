<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="{{route('admin')}}">İŞ CEPTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </li>
                <li class="nav-item dropdown notification">
                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title">Mesajlar</div>
                            <form role="form" action="#" method="post">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Kullanıcı E-posta</th>
                                                    <th scope="col">Tarih</th>
                                                </tr>
                                            </thead>
                                           
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li>
                            <div class="list-footer"> <a href="{{route('admin_iletisim')}}">Mesajlara Git</a></div>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/ben.png" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">
                            @if(session()->has('email'))
                         <h3 style="color:white;">{{ session('email') }}</h3>
                            @endif
                            </h5>
                            <span class="status"></span><span class="ml-2">Mevcut</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Hesap</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Ayarlar</a>
                        <a class="dropdown-item" href="#" id="logout-link"><i class="fas fa-power-off mr-2"></i>Çıkış Yap</a>

                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <script>
                            document.getElementById('logout-link').addEventListener('click', function(event) {
                                event.preventDefault(); // Sayfanın yeniden yüklenmesini engellemek için

                                document.getElementById('logout-form').submit(); // Formu gönder
                            });
                        </script>


                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
