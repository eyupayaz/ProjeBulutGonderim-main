@extends('layouts.admin')

 @section('title', 'İletisim') 

<div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Mesajlar</h3>
                    <br><br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                          
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h1 class="card-header"> Mesajlar </h1>
                                                    <form role="form" action="{{route('admin_iletisim_create')}}" method="post">

                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">

                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Id</th>
                                                                    <th scope="col">Kullanıcı E-posta</th>
                                                                    <th scope="col">Mesaj</th>
                                                                    <th scope="col">Mesaj saati</th>
                                                                    <th scope="col">Sil</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($datalist as $rs)
                                                                <tr>
                                                                    <td>{{$rs->mesaj_id}}</td>
                                                                    <td>{{$rs->user_name}}</td>
                                                                     <td>{{$rs->user_message}}</td>
                                                                     <td>{{$rs->message_date}}</td>
                                                                     <td><a href="{{ route('admin_iletisim_delete', ['mesaj_id' => $rs->mesaj_id]) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
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