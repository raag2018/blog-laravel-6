@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-2  border-botton border-primary">
                <div class="card-body ">
                    <h5 class="card-title d-inline-block badge badge-primary text-uppercase text-truncate">{{$post->title}}</h5>
                    @if($post->image)
                        <img src="{{$post->get_image}}" class="card-img-top" width="250" height="250">
                    @elseif($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                        
                    @endif
                    <p class="card-text text-justify">
                        {{$post->body}}
                    </p>
                    <p class="text-muted mb-0 text-right">
                        <em class='font-weight-bold'> 
                            <!--&ndash; crea una linea en el html-->
                            &ndash; {{$post->user->name}}
                        </em><br/>
                        {{$post->created_at->format('d M Y')}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection