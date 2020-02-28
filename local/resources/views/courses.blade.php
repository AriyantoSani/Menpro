@extends('layouts.master')
@section('content')

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
                    <a href="{{asset('courses')}}"><button class="btn btn-default btn-large active">Courses</button></a>
                    <a href="{{asset('takencourses')}}"><button class="btn btn-default btn-large">Taken
                            Courses</button></a>
                    <hr>
                    <div align="center" class="span12">
                        <a href="{{asset('courses')}}"
                            class="btn {{ request()->is('courses') ? 'btn-inverse' : '' }}">All</a>
                        <?php  foreach($categories as $c){?>
                        <a href="{{asset('coursesfilter/'.$c->id)}}"
                            class="btn {{ request()->is('coursesfilter/'.$c->id) ? 'btn-inverse' : '' }}">{{$c->title}}</a>
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
                                            <h3> {{ $co->title }} </h3>
                                            <h3>Rp:{{ $co->price }},-</h3>
                                            <p>
                                                <a href="{{ asset('takecourse/'.$co->courseId)  }}"
                                                    {{-- data-pretty="prettyPhoto[gallery1]" --}}
                                                    title="Portfolio caption here"><i
                                                        class="icon-shopping-cart icon-circled icon-bglight icon-2x active"></i></a>
                                            </p>
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
            {{ $course->links() }}
        </div>
    </div>
</section>


@endsection
