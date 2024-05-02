@extends('layouts.admin')

 @section('title', 'İsatama') 

<div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">İs Atama</h3>
                    <br><br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                          
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h1 class="card-header"> İsler </h1>
                                                    <form role="form" action="{{route('admin_isatama_create')}}" method="post">

                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">
                                                            <button type="submit" class="btn btn-space btn-primary"><a href="{{ route('admin_isatama_add') }}" style="color: black">iş Ekle</a></button><br>

                                                                <thead>
                                                                <tr>
                                                                  
                                                                    <th scope="col">Kullanıcı Adı</th>
                                                                    <th scope="col">İş Adı</th>
                                                                    <th scope="col">Süre</th>
                                                                    <th scope="col">Durum</th>
                                                                    <th scope="col">Düzenle</th>
                                                                    <th scope="col">Sil</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($datalist as $rs)
                                                                <tr>
                                                               
                                                                    <td>{{$rs->user_name}}</td>
                                                                     <td>{{$rs->work_name}}</td>
                                                                     <td>{{$rs->time}}</td>
                                                                     <td>{{$rs->status}}</td>
                                                                     <td><a href="{{route('admin_isatama_edit', ['id'=> $rs->id])}}">Düzenle</a></td>
                                                                     <td><a href="{{ route('admin_isatama_delete', ['id'=> $rs->id]) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
                                                                      <td>
                                             
                                                                </tr>
                                                                @endforeach
                                                    </form>
                                                                </tbody>
                                                            </table>
                            
                                                         </div>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>