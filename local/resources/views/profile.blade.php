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
                    <section id="projects">
                        <ul id="thumbs" class="grid cs-style-3 portfolio">
                            <?php foreach ($data as $dt) : ?>
                            <?php if($dt->image == ""){ ?>
                            <img src="./images/personblank.png" width="300px" height="300px">
                            <?php }else{ ?>
                            <img src="./images/profile/{{  $dt->image }}" width="300px" height="300px">
                            <?php }?>
                            <hr>
                            <table align="center">
                                <tr>
                                    <td> <b> Username :</b></td>
                                    <td>
                                        {{ $dt->username }}
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <b> Name :</b></td>
                                    <td>
                                        {{ $dt->nama }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Birthday :</b></td>
                                    <td>

                                        <?php echo date('d-m-Y',strtotime($dt->birthday) ); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>
                                            Gender :</b></td>
                                    <td>

                                        {{ $dt->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Email :</b></td>
                                    <td>{{ $dt->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>
                                            Phone Number :</b>
                                    </td>
                                    <td>
                                        {{ $dt->notelepon }}
                                    </td>
                                </tr>
                            </table>
<br>
                            <a href="{{asset('editprofile')}}">
                                <button class="btn btn-primary">Edit Profile</button></td>
                            </a>

                            <?php endforeach; ?>
                        </ul>
                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
