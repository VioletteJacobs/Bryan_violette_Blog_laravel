@extends('layouts.app')
<ul>
    <li class="nav-item">
        <a class="nav-link active" href="categories">Catégories d'images</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="images">Images</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="utilisateurs">Utilisateurs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="avatars">Avatars</a>
    </li>
</ul>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
