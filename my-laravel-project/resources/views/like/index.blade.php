@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- inicio columna -->
        <div class="col-md-8">
            <h1>Liked Photos</h1>

            @foreach($likes as $like)
                @include('includes.card', ['img' => $like->image])
            @endforeach
            <!-- PAGINACION -->
            <div class="clearfix"></div>
            {{ $likes->render() }}
            
        </div>
        <!-- fin columna -->
    </div>
</div>
@endsection