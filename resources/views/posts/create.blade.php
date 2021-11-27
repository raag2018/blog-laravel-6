
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="font-weight-bold text-uppercase text-center">Crear Articulo</h5>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Titulo *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Imagen *</label>
                            <div class="custom-file" id="customFile" lang="es">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"  name='file' aria-describedby="fileHelp">
                                    <label class="custom-file-label" for="exampleInputFile">
                                       Fotografía...
                                    </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Contenido *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contenido  </label>
                            <textarea name="iframe"  class="form-control"></textarea>
                        </div>
                        @csrf
                        <div class="form-group">
                            <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                        </div>
                        
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection