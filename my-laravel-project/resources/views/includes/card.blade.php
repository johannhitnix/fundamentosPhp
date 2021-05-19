<div class="card pub_image">
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
        <div class="image-container">
            <a href="{{ route('image.detail', ['id' => $img->id]) }}">
            <img src="{{ route('image.file', ['filename' => $img->image_path]) }}">
            </a>
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
        <div class="comments">
            <a href="{{ route('image.detail', ['id' => $img->id]) }}" class="btn btn-warning btn-sm btn-comments">Comments ({{ count($img->comments) }})</a>
        </div>
    </div>
</div>