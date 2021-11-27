
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold text-uppercase ">Articulos <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-2x fa-plus-circle"></i></a> </h5>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-uppercase">id</th>
                                <th class="text-uppercase">titulo</th>
                                <th colspan='2' class="text-uppercase text-center"> Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach($posts as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->title}}</td>
                                <td>
                                    <a href="{{route('posts.edit', $p)}}" class="btn btn-sm btn-warning"><i class="fas  fa-pencil-alt"></i></a>
                                    
                                </td>
                                <td>
                                    <form action="{{route('posts.destroy', $p)}}" method="post" >
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                        class="btn btn-sm btn-danger" 
                                        type="submit"
                                        onclick="return confirm('Desea Eliminar...?')"
                                        ><i class="fas  fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection