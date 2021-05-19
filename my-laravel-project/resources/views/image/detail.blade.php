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
                            <a href="{{ route('profile', ['id' => $img->user->id]) }}">
                                {{ $img->user->name . ' ' . $img->user->surname }}
                                <span class="nickname">{{ ' | @' .$img->user->nick }}</span>
                            </a>
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
                            <!-- check if the user liked it -->
                            <?php $user_like = false; ?>
                            @foreach($img->likes as $like)
                                @if($like->user->id == Auth::user()->id)
                                    <?php $user_like = true; ?>
                                @endif
                            @endforeach
                            
                            @if($user_like)
                                <img src="{{ asset('img/heart-red.png') }}" data-id="{{ $img->id }}" class="btn-like">
                            @else
                                <img src="{{ asset('img/heart-grey.png') }}" data-id="{{ $img->id }}" class="btn-dislike">
                            @endif
                            <span class="number-likes">{{ count($img->likes) }}</span>
                        </div>
                        @if(Auth::user() && Auth::user()->id == $img->user_id)
                        <div class="actions">
                            <a href="{{ route('image.edit', ['id' => $img->id]) }}" class="btn btn-sm btn-outline-primary">Update</a>
                            
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#myModal">
                                Delete
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Comfirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete it?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Skip</button>
                                        <a href="{{ route('image.delete', ['id' => $img->id]) }}" class="btn btn-danger">Yes Delete it!</a>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
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
