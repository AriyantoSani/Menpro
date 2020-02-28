@extends('layouts.master')
@section('content')

<!-- section intro -->
<!-- /section intro -->

<section id="content">
    <div class="container">

        <div class="row">
            <div class="span12">
                {{-- <ul class="portfolio-categ filter">
                            <li class="all active"><a href="#">All</a></li>
                            <li class="web"><a href="#" title="">Web design</a></li>
                            <li class="icon"><a href="#" title="">Icons</a></li>
                            <li class="graphic"><a href="#" title="">Graphic design</a></li>
                        </ul> --}}

                <div class="clearfix"></div>
                <div class="row">
                    <a href="{{asset('courses')}}"><button class="btn btn-default btn-large ">Courses</button></a>
                    <a href="{{asset('takencourses')}}"><button class="btn btn-default btn-large active">Taken
                            Courses</button></a>
                    <hr>
                    <div align="center" class="span12">
                        <a href="{{asset('takencourses')}}"
                            class="btn {{ request()->is('takencourses') ? 'btn-inverse' : '' }}">All</a>
                        <?php  foreach($categories as $c){?>
                        <a href="{{asset('takencoursesfilter/'.$c->id)}}"
                            class="btn {{ request()->is('takencoursesfilter/'.$c->id) ? 'btn-inverse' : '' }}">{{$c->title}}</a>
                        <?php  }?>
                    </div>
                    <br>
                    <section id="projects" style="margin-top: 2%;">
                        <ul id="thumbs" class="grid cs-style-3 portfolio">
                            <?php foreach ($course as $co) :?>
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span6 design" data-id="id-0" data-type="web">
                                <div class="item">
                                    <figure>
                                        <div><img src="{{ $co->img }}" alt=""></div>
                                        <figcaption>
                                            <h3><a
                                                    href="{{ asset('streamingPage/'.$co->courseId) }}">{{ $co->title }}</a>
                                            </h3>

                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <!-- End Item Project -->
                            <?php endforeach; ?>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {{ $course->links() }}
</section>


@endsection
