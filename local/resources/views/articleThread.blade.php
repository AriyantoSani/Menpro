@extends('layouts.master')
@section('content')
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span8">
                <?php foreach($articles as $a) { ?>
                <article>
                    <div class="row">
                        <div class="span8">
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><a href="{{asset('article/'.$a->id)}}">{{$a->title}}</a></h3>
                                </div>
                                <img src="{{$a->img}}" alt="" />
                            </div>
                            <div class="post-entry">
                                <p>
                                    {{$a->body}}</p>

                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <div style="">
                <div class="row">
                    <div style="margin-left: 3% ; margin-right: 3%" class=" col-lg-12">
                        <b>
                            <p>Comment In Article: </p>
                        </b>
                        <hr>
                        <?php foreach($comment as $c) { ?>
                        <div class="testimonial">
                            <div class="author">
                                <img height="60px" width="60px" src="
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
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Verification</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure want to delete this?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <a href="{{asset('deletecommentA/'.$c->id)}}">
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
                                <textarea name="comment" class="form-control" rows="5" id="comment" cols="50"
                                    required="">
        </textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"> Comment </button>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            <div class="span4">
                <aside class="right-sidebar">
                    <div class="widget">
                        <h5 class="widgetheading">Categories</h5>
                        <ul class="cat">
                            <?php foreach ($categories as $c) { ?>
                            <li><i class="icon-angle-right"></i> <a href="#">{{$c->title}}</a></li>
                            <?php } ?>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
        {{ $comment->links() }}
    </div>
</section>
@endsection
