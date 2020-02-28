@extends('layouts.admin')
@section('css')

@endsection
@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form action="" method="post">
                {{ csrf_field() }}
                <input type="text" name="title" id="" placeholder="Insert Title">
                <input type="text" name="image" id="" placeholder="Insert Image">
                <input type="number" name="price" id="" placeholder="Insert Price">
                <textarea name="description" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
                <select name="category" id="">
                    <option value="">--Select--</option>
                    <?php foreach($category as $cat){ ?>
                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                    <?php } ?>
                </select>
            </form>
            <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="Datatables">
                    <thead>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Section</th>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $c) {
                         ?>
                        <tr>
                            <td>{{$c->title}}</td>
                            <td>{{$c->img}}</td>
                            <td>{{$c->price}}</td>
                            <td>{{$c->description}}</td>
                        <td><a href="{{asset('sectionAdmin/'.$c->courseId)}}"><button>Section</button></a> </td>
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
