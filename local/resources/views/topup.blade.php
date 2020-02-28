@extends('layouts.master')
@section('content')

<!-- section intro -->
<section id="intro">
    <div class="intro-content">
        <h2>Your Balance:</h2>
        <h3>{{$balance}}</h3>
    </div>
</section>
<!-- /section intro -->

<section id="content">
    <div class="container">


        <div class="row">
            <form action="" method="post">
                {{ csrf_field() }}
                <input type="number" class="input-group" name="topup">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
</section>


@endsection
