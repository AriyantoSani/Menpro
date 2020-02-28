@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form method="POST">
                    <input type="number" name="no" placeholder="Insert No Section">
                    <input type="text" name="link" placeholder="Insert Link Video">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    {{ csrf_field() }}
                </form>
                <table class="table table-striped table-bordered" id="Datatables">
                    <thead>
                        <th>No</th>
                        <th>Link Video</th>
                    </thead>
                    <tbody>
                        <?php foreach ($section as $s) {
                         ?>
                        <tr>
                            <td>{{$s->no}}</td>
                            <td>{{$s->link}}</td>
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
@endsection

@section('js')

@endsection
