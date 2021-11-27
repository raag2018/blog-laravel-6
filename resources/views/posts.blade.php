@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $p)
            <div class="card my-2  border-botton border-primary">
                <div class="card-body ">
                    <h5 class="card-title">{{$p->title}}</h5>
                    <div class="row">
                    @if($p->image)
                        <div class="col-sm-12 col-md-6">
                            <img src="{{$p->get_image}}" class="card-img-top" width="250" height="250">
                        </div>
                    @endif
                    @if($p->iframe)
                        <div class="col-sm-12 col-md-6 my-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $p->iframe !!}
                            </div>
                        </div>
                    @endif
                    </div>
                    <p class="card-text text-justify">
                        {{$p->get_excerpt}}
                        <br/>
                        <a href="{{route('post', $p)}}"  class="btn btn-primary border border-success">Leer más</a>
                    </p>
                    <p class="text-muted mb-0 text-right">
                        <em class='font-weight-bold'> 
                            <!--&ndash; crea una linia en el html-->
                            &ndash; {{$p->user->name}}
                        </em><br/>
                        {{$p->created_at->format('d M Y')}}
                    </p>
                </div>
            </div>
            @endforeach
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection