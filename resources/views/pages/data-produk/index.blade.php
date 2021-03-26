@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12 p-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AF99101</td>
                                        <td>Kipas Dewa</td>
                                        <td>Pendingin Suasana</td>
                                        <td>20.000</td>
                                        <td>3</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="far fa-images"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>AF99101</td>
                                        <td>Kipas Dewa</td>
                                        <td>Pendingin Suasana</td>
                                        <td>20.000</td>
                                        <td>3</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="far fa-images"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>AF99101</td>
                                        <td>Kipas Dewa</td>
                                        <td>Pendingin Suasana</td>
                                        <td>20.000</td>
                                        <td>3</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="far fa-images"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
