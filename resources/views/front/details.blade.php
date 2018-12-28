@extends('front.layouts.master')
@section('title','')
@section('content')
    @php
         $img = $post->images()->first()['image']
    @endphp
<div class="container text-center">
    <h3 class="card-title">{{$post->title}}</h3>
    <div class="card mt-4">
        <img src="{{asset('storage/img/'.$img)}}" class="card-img-top img-fluid">
        <div class="card-body">
            <h4>{{trans('frontpost.general information')}}</h4>
            <p class="card-text">{{trans('frontpost.add by')}} : {{$post->user->name}}</p>
            <p class="card-text">{{trans('frontpost.country')}} : {{$post->country->name}}</p>
            <p class="card-text">{{trans('frontpost.price')}} : {{$post->price}} $</p>
            <h4>{{trans('frontpost.post details')}}</h4>
            <p class="card-text">{{$post->text}}</p>
        </div>
    </div>
</div>

@endsection
