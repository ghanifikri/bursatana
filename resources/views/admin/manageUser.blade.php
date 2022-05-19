@extends('layouts.mainAdmin')

@section('container')
    <div class="mobile-menu-overlay"></div>
    <div id="main" class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Manajemen User</li>
                    <li class="breadcrumb-item active" aria-current="page">View User</li>
                </ol>
            </nav>
            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">User Terdaftar</div>
                <table class="table-responsive-xl table-bordered table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th class="datatable-nosort">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="weight-600">1</div>
                            </td>
                            <td>
                                <div class="weight-600">Ghani Fikri</div>
                            </td>
                            <td>ghanifikribaihaqi@gmail.com</td>
                            <td type="password">123</td>
                            <td>36712391912739</td>
                            <td>JL Kaenanga 1 kebayoran lama</td>
                            <td><span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7">Succes</span>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                    <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
