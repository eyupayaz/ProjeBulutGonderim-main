@extends('layouts.admin')

@section('title','admin panel')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center">Services</h3>
                <br><br>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h1 class="card-header">İş Atama</h1>
                                <div class="card-body">
                                    <div class="table-responsive ">
                                        <table class="table">

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="card">
                                                    <h5 class="card-header">İş Ekleme Formu</h5>
                                                    <div class="card-body">
                                                        <form action="{{route('admin_isatama_create')}}" method="post" >
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>id</label>
                                                                <input id="input" type="text" name="id" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kullanıcı Adı</label>
                                                                <input id="input" type="text" name="user_name" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>İş Adı</label>
                                                                <input id="input" type="text" name="work_name" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Süre</label>
                                                                <input id="input" type="text" name="time" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Durum</label>
                                                                <select class="form-control select2-close" name="status">
                                                                <option  selected="selected">0</option>
                                                                <option>1</option>
                                                                </select>
                                                            </div>
                                                                <div class="col-sm-12 pl-0">
                                                                    <p class="text-right">
                                                                        <button type="submit" class="btn btn-space btn-primary">Oluştur</button>
                                                                    </p>
                                                                </div>
                                                    </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>




                                                    </div>
                                                </div>

                                            </thead>
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