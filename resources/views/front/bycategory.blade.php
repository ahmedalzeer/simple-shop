@extends('front.layouts.master')
@section('title','')
@section('content')
    <div class="row">
        <div class="col-lg-12 text-right">
            <h4></h4><hr/>
        </div>
        @include('front.layouts.showitems')

        {{--{{$posts->links()}}--}}
    </div>

@endsection
