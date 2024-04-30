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

    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td>User_id</td>
                    <td><input type="text" name="user_id" value="{{ $data->user_id }}" readonly class="form-control"></td>
                </tr>
                <tr>
                    <td>Ad</td>
                    <td><input type="text" name="user_name" value="{{ $data->user_name }}" required class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="work_name" value="{{ $data->work_name }}" required class="form-control"></td>
                </tr>
                <tr>
                <td>
                    <input type="text" name="time" value="{{ $data->time}}" required class="form-control"></td>
                </tr>
                <tr>
                <td>
                    <input type="text" name="status" value="{{ $data->status}}" required class="form-control"></td>
                </tr>
            </tbody>
        </table>
        <div class="col-sm-12 pl-0">
            <p class="text-right">
                <button type="submit" class="btn btn-space btn-primary" onclick="reloadPage()">Güncelle</button>
            </p>
                            </div>
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