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
                                    By {{$a->nama}}
                                    <br>
                                    Created At : {{$a->created}}</p>
                                <a href="{{asset('article/'.$a->id)}}" class="btn btn-primary">Read more <i
                                        class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
                <div id="pagination">
                    <span class="all">Page 1 of 3</span>
                    <span class="current">1</span>
                    <a href="#" class="inactive">2</a>
                    <a href="#" class="inactive">3</a>
                </div>
            </div>

            <div class="span4">
                <aside class="right-sidebar">
                    <div class="widget">

                        <h5 class="widgetheading">Categories</h5>

                        <ul class="cat">
                            <?php foreach ($categories as $c) { ?>
                            <li><i class="icon-angle-right"></i> <a
                                    href="{{ asset('articleFilter/'.$c->id )}}" >{!! request()->is('articleFilter/'.$c->id) ? '<b>'.$c->title.'</b>' : $c->title !!}</a></li>

                            <?php } ?>
                        </ul>
                    </div>


                </aside>
            </div>

        </div>
    </div>
</section>
@endsection
