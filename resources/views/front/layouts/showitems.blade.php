@foreach($posts as $post)
    @php
        $img = $post->images->first();
        $img_name = $img['name'];
    @endphp
    <div class="col-lg-4 col-md-6 mb-4 text-right">
        <div class="card h-100">
            <a href="/showdetails/{{$post->id}}"><img class="card-img-top" height="150px" src="{{asset('storage/img/'.$img_name)}}"  alt="image" ></a>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/showdetails/{{$post->id}}">{{$post->title}}</a>
                </h5>
                <h6>{{$post->price}}</h6>
            </div>
        </div>
    </div>
@endforeach
