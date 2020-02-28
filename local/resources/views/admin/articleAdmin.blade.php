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
                    <input type="text" name="title" placeholder="Insert Title..">
                    <input type="text" name="link" placeholder="Insert Image Link">
                    <br>
                    <textarea type="text" name="description" placeholder="Insert description"></textarea>
                    <select name="category">
                        <option value="">--Select--</option>
                    <?php foreach($categories as $cat){ ?>
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    <?php }?>
                    </select>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    {{ csrf_field() }}
                </form>
                <table class="table table-striped table-bordered" id="Datatables">
                    <thead>
                        <th>Title</th>
                        <th>Img</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        <?php foreach ($articles as $a) {
                         ?>
                        <tr>
                            <td>{{$a->title}}</td>
                            <td>{{$a->img}}</td>
                            <td>{{$a->body}}</td>
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
