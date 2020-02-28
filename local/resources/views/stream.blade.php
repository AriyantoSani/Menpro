@extends('layouts.master')
@section('css')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@endsection
@section('content')

<section id="content">
    <div class="container">
        <div class="row">

            <div class="span4">

                <aside class="left-sidebar">


                    <div class="widget">

                        <a href="{{asset('streamingPage/'.$id)}}">

                            <h5 class="widgetheading">About E-Learning</h5>
                        </a>
                        <h5 class="widgetheading">Section</h5>

                        <ul class="cat">
                            <?php foreach($link  as $l) { ?>
                            <li><i class="icon-angle-right"></i> <a
                                    href="{{asset('streamingPage/'.$id.'/stream/'.$l->id)}}">Section</a><span>{{$l->no}}</span>
                            </li>
                            <?php }?>
                        </ul>
                    </div>


                </aside>
            </div>

            <div class="span8">
                <article>
                    <div class="row">
                        <?php foreach ($data as $d) {
                                  ?>
                        <div class="span8">
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="#">Section {{ $d->no }}</a></h3>
                                </div>

                                <br>
                                <iframe width="100%" height="480" src="{{$d->link}}"> kamehameha
                                </iframe>
                            </div>
                            {{-- <div class="meta-post">
                                        <a href="#" class="author">By<br /> Admin</a>
                                        <a href="#" class="date">10 Jun<br /> 2013</a>
                                    </div> --}}
                            <div class="post-entry">

                                {{-- <a href="#" class="btn btn-color">Read more <i class="icon-angle-right"></i></a> --}}
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </article>

                {{-- <div id="pagination">
                            <span class="all">Page 1 of 3</span>
                            <span class="current">1</span>
                            <a href="#" class="inactive">2</a>
                            <a href="#" class="inactive">3</a>
                        </div> --}}
            </div>
            <hr>

        </div>
    </div>
    <div style="">
        <div class="row">
            <div style="margin-left: 3% ; margin-right: 3%" class=" col-lg-12">
                <b>
                    <p>Comment In Section: </p>
                </b>
                <hr>
                <?php foreach($comment as $c) { ?>
                <div class="testimonial">
                    <div class="author">
                        <img height="120px" width="120px" src="
                        <?php if($c->image == '' ) {  ?>
                        {{ asset('images/personblank.png') }}
                        <?php  } else{  ?>
                            {{asset('images/profile/'.$c->image)}}
                        <?php  } ?>
                            " class="img-circle bordered" alt="" />
                        <p class="name">{{$c->nama}}</p>
                        <p class="info">{{$c->created}}</p>
                        <p style="font-size: 20px;">{{$c->body}}</p>
                        <?php if ($c->username == Session::get('username')) {
                       ?>
                        <a class="pull-right" data-toggle="modal" data-target="#Modal{{$c->id}}"> <i
                                class="icon-trash"></i></a>


                        <?php           }?>

                        <!-- Modal -->
                        <div class="modal fade" id="Modal{{$c->id}}" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Verification</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure want to delete this?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <a href="{{asset('deletecommentC/'.$c->id)}}">
                                            <button class="btn btn-danger"> Yes</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php } ?>
                <hr>
            </div>
            <div style="margin-left: 5%">
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="comment" class="form-control" rows="5" id="comment" cols="50" required="">
                </textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary"> Comment </button>
                </form>
            </div>
            {{ $comment->links() }}
        </div>
    </div>
</section>
@endsection
@section('js')
@endsection
