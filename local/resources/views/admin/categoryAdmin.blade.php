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
                    {{ csrf_field() }}
                    <input type="text" placeholder="Insert Category" name="category">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <table class="table table-striped table-bordered" id="Datatables">
                    <thead>
                        <th>Title</th>

                    </thead>
                    <tbody>
                        <?php foreach ($category as $c) {
                         ?>
                        <tr>
                            <td>{{$c->title}}</td>
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
