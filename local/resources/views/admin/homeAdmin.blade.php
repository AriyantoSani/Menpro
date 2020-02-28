@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="Datatables">
                    <thead>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Balance</th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u) {
                         ?>
                        <tr>
                            <td>{{$u->username}}</td>
                            <td> <a href="#" class="enama" data-type="text" data-pk="{{$u->username}}"
                                    data-url="{{url('api/user/'.$u->username.'/editnama')}}"
                                    data-title="Masukan Nilai">{{$u->nama}}</a></td>
                            <td>{{$u->birthday}}</td>
                            <td>{{$u->gender}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->notelepon}}</td>
                            <td>{{$u->balance}}</td>
                        </tr>
                        <?php              } ?>
                    </tbody>
                </table>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Input Account</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{url('user/insert')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="FirstName">First Name</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="FirstName"
                            required>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
