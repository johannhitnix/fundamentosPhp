@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit image</div>
                <div class="card-body">
                    <form action="{{ route('image.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="image_id" value="{{ $img->id }}">
                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                @if($img->user->image)
                                <div class="container-avatar">                                    
                                    <img src="{{ route('image.file', ['filename' => $img->image_path]) }}" class="avatar">
                                </div>
                                @endif
                                <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path" value="{{ Auth::user()->image_path }}" autofocus>
                                <!-- manejo de error de validacion -->
                                @if($errors->has('image_path'))
                                <span class="invalid-feedback" role="alert">
                                    <!-- muestra primer error en el array -->
                                    <strong>{{ $errors->first('image_path') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="file" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ Auth::user()->description }}" autofocus>{{ $img->description }}</textarea>                                
                                @if($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Image
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection