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
                            <form method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <?php foreach ($data as $dt) : ?>
                                <?php if($dt->image == ""){ ?>
                                <img src="./images/personblank.png" width="240px" height="240px">
                                <?php }else{ ?>
                                <img src="./images/profile/{{  $dt->image }}" width="240px" height="240px">
                                <?php }?>
                                <br>
                                <hr>
                                <table align="center">
                                    <tr>
                                        <td> <b> Username :</b></td>
                                        <td>
                                            <input disabled type="text " name="username" value="{{$dt->username}}"
                                                placeholder="username">
                                            <input  type="hidden" name="username" value="{{$dt->username}}"
                                                placeholder="username">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <b>Profile Picture :</b></td>
                                        <td>
                                            <input type="file" name="profilepict">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b> Name :</b></td>
                                        <td>
                                            <input type="text" name="name" value="{{ $dt->nama }}" placeholder="Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b> Birthday :</b></td>
                                        <td>
                                            <input type="date" name="birthday"
                                                value="<?php echo date('Y-m-d',strtotime($dt->birthday) ); ?>"
                                                placeholder="Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                Gender :</b></td>
                                        <td>
                                            <input type="radio" name="gender" value="male" <?php if ($dt->gender == "male") {
                                                echo "checked";
                                            } ?>> Male
                                            <input type="radio" name="gender" value="female" <?php if ($dt->gender == "female") {
                                                echo "checked";
                                            } ?>> Female
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Email :</b></td>
                                        <td>
                                            <input type="text" name="email" value="{{ $dt->email }}"
                                                placeholder="Email">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                Phone Number :</b>
                                        </td>
                                        <td>
                                            <input type="number" name="phonenumber" value="{{ $dt->notelepon }}"
                                                placeholder="Phone Number">
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <button class="btn btn-warning">Submit</button>

                                <?php endforeach; ?>
                            </form>
                        </ul>
                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
