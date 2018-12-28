@extends('front.layouts.master')
@section('title','')
@section('content')

<div class="container text-center">
    <div class="col-md-10">
        <h2>{{trans('frontpost.Add New Ad')}}</h2>
    </div>
    <form method="post" action="{{route('savepost')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label>{{trans('frontpost.category')}}</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>{{trans('frontpost.country')}}</label>
            <select name="country_id" class="form-control">
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>{{trans('frontpost.posttitle')}}</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>{{trans('postdetails')}}</label>
            <input type="text" name="text" class="form-control">
        </div>
        <div class="form-group">
            <label>{{trans('frontpost.postprice')}}</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label>{{trans('frontpost.Images')}}</label>
            <input type="file" multiple name="images" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{trans('frontpost.Save')}}</button>
        </div>
    </form>
</div>

@endsection
