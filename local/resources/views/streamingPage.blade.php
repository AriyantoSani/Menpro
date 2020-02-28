@extends('layouts.master')
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
                                    <h3><a href="#">{{ $d->title }}</a></h3>
                                </div>

                                <img src="{{ $d->img }}" width="150px" height="150px" alt="" />
                                <br>
                                {{-- <iframe width="100%" height="480" src="{{ $d->link }}">
                                </iframe> --}}
                            </div>
                            {{-- <div class="meta-post">
                                        <a href="#" class="author">By<br /> Admin</a>
                                        <a href="#" class="date">10 Jun<br /> 2013</a>
                                    </div> --}}
                            <div class="post-entry">
                                <p>
                                    {{ $d->description }}
                                </p>
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
        </div>
    </div>
</section>

@endsection
