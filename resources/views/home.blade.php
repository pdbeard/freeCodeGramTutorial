@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/me.jpg" class="rounded-circle img-thumbnail" alt="">
        </div>

        <div class="col-9 pt-5">
            <div>
                <h1>freeCodeCamp</h1>
            </div>
                <div class="d-flex">
                <div class="pr-4"><strong>145 </strong>posts </div>
                <div class="pr-4"><strong>24k </strong>followers </div>
                <div class="pr-4"><strong>224 </strong>following </div>
            </div>

            <div class="pt-4 font-weight-bold">freeCodecamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div> <a href="#">www.freecodecamp.org</a></div>

        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="img/me.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="img/me.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="img/me.jpg" class="w-100" alt="">
        </div>


    </div>
</div>
@endsection
