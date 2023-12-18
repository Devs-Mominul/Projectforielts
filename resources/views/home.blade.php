@extends('layouts.frontend_master')

@section('frontend_content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <div class="card">
                {{-- <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="btn btn-sm btn-danger my-4" href="{{ route('logout') }}">LogOut</a>
                </form>
                <div class="card-header">{{ __('Dashboard') }}</div> --}}

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
