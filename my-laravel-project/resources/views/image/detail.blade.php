@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-10">
            @include('includes.msg')
                <div class="card pub_image pub_image_detail">
                    <div class="card-header">
                        @if($img->user->image)
                        <div class="container-avatar">
                            <img src="{{ route('user.avatar', ['filename' => $img->user->image]) }}" alt="avatar" class="avatar">
                        </div>
                        @endif
                        <div class="data-user">
                            {{ $img->user->name . ' ' . $img->user->surname }}
                            <span class="nickname">{{ ' | @' .$img->user->nick }}</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="image-container-detail">
                            <img src="{{ route('image.file', ['filename' => $img->image_path]) }}">
                        </div>
                        <div class="description">
                            <span class="nickname">{{ '@' . $img->user->nick }}</span>
                            <span class="nickname date">{{ ' | ' . \FormatTime::LongTimeFilter($img->created_at) }}</span>
                            <p>{{ $img->description }}</p>
                        </div>
                        <div class="likes">
                            <img src="{{ asset('img/heart-grey.png') }}">
                        </div>
                        <div class="clearfix"></div>
                        <div class="comments">
                            <h4>Comments ({{ count($img->comments) }})</h4>
                            <hr>
                            <form action="{{ route('comment.save') }}" method="post">
                            @csrf
                            <input type="hidden" name="image_id" value="{{ $img->id }}">

                            <p>
                                <textarea name="content" id="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" autofocus></textarea>
                                @if($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                                @endif
                            </p>

                            <button type="submit" class="btn btn-success">Comment</button>
                            </form>
                            <hr>
                            @foreach($img->comments as $comment)
                            <div class="comment">
                                <span class="nickname">{{ '@' . $comment->user->nick }}</span>
                                <span class="nickname date">{{ ' | ' . \FormatTime::LongTimeFilter($comment->created_at) }}</span>
                                <p>
                                    {{ $comment->content }}
                                    <br>
                                    @if(Auth::check() && ($comment->user_id == Auth::user()->id || $comment->image->user_id == Auth::user()->id))
                                        <a href="{{ route('comment.delete', ['id' => $comment->id]) }}" class="btn btn-sm btn-outline-danger">Delete</a>
                                    @endif
                                </p>                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>                        
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection
