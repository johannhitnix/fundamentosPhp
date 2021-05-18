@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-10">
            @include('includes.msg')            
                <div class="card pub_image">
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
                        <div class="comments">
                            <a href="" class="btn btn-warning btn-sm btn-comments">Comments ({{ count($img->comments) }})</a>
                        </div>
                    </div>
                </div>                        
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection
