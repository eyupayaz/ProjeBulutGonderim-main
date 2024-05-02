@extends('layouts.admin')

@section('title', 'İs Atama') 

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">İŞLER</h3>
                <br><br>
                <div class="card">
                    <h1 class="card-header">İŞLER</h1>
                    <div class="card-body">
                    <form action="{{route('admin_isatama_update', ['id'=>$data->id])}}" method="post" >
                     @csrf
                     <div class="form-group">
                                                            <label>Kullanıcı Adı</label>
                                                                <input id="input" type="text" name="user_name" value="{{ $data->user_name }} " data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>İş Adı</label>
                                                                <input id="input" type="text" name="work_name" value="{{ $data->work_name }}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Süre</label>
                                                                <input id="input" type="date" name="time" value="{{ $data->time}}" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            
                                                                <div class="col-sm-12 pl-0">
                                                                    <p class="text-right">
                                                                        <button type="submit" class="btn btn-space btn-primary" onclick="reloadPage()">Güncelle</button>
                                                                    </p>
                                                                </div>
                                                    </div>
                                                        </form>
    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function reloadPage() {
        // Sayfayı yenile
        location.reload();
        // Kullanıcıya bir mesaj göster
        alert('Kullanıcı Güncellendi!');
    }
</script>