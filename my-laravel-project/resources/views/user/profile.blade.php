@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-8">
            <div class="profile-user">
                
                @if($user->image)
                <div class="container-avatar">
                    <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="avatar" class="avatar">
                </div>
                @endif
                
                <div class="user-info">
                    <h3>{{ '@' . $user->nick }}</h3>
                    <h4>{{ $user->name . ' ' . $user->surname }}</h4>
                    <p>{{  'created ' . \FormatTime::LongTimeFilter($user->created_at)}}</p>
                </div>
                <div class="clearfix"></div><!-- con clearfix literal corto el fujo del flotado -->
                <hr>
            </div>
            <div class="clearfix"></div><!-- con clearfix literal corto el fujo del flotado -->
            @include('includes.msg')
            @foreach($user->images as $img)
                @include('includes.card', ['img' => $img])
            @endforeach
                
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection