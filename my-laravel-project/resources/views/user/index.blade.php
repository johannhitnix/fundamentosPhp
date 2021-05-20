@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-8">
            <h1>People</h1>
            <form action="{{ route('people') }}" method="get" id="search_form">
                <div class="row">
                    <div class="form-group col">
                        <input type="text" id="search" class="form-control">
                    </div>
                    <div class="form-group col btn-search">
                        <input type="submit" value="Search" class="btn btn-success">
                    </div>
                </div>
            </form>
            <hr>
            @foreach($users as $user)
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
                        <a href="{{ route('profile', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-success">Show Profile</a>
                    </div>
                    <div class="clearfix"></div><!-- con clearfix literal corto el fujo del flotado -->
                    <hr>
                </div>
            @endforeach
            <!-- PAGINACION -->
            <div class="clearfix"></div>
            {{ $users->render() }}
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection