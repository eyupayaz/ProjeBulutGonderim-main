@extends('layouts.admin')

 @section('title', 'Kullanıcılar') 

<div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Kullanıcılar</h3>
                    <br><br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                          
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h1 class="card-header"> Kullanıcılar </h1>
                                                    <form role="form" action="{{route('admin_user_create')}}" method="post">

                                                    <div class="card-body">
                                                        <div class="table-responsive ">
                                                            <table class="table">

                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">Id</th>
                                                                    <th scope="col">Kullanıcı Adı</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Sifre</th>
                                                                    <th scope="col">Düzenle</th>
                                                                    <th scope="col">Sil</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($datalist as $rs)
                                                                <tr>
                                                                    <td>{{$rs->user_id}}</td>
                                                                    <td>{{$rs->user_name}}</td>
                                                                     <td>{{$rs->email}}</td>
                                                                     <td>{{$rs->password}}</td>
                                                                     <td><a href="{{route('admin_user_edit', ['user_id' => $rs->user_id])}}">Düzenle</a></td>
                                                                     <td><a href="{{ route('admin_user_delete', ['user_id' => $rs->user_id]) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
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