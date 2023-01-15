@extends('layouts.admin')

@section('content')
{{-- <div class="container">
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
</div> --}}
{{-- DASHBOARD CARDS TOP  --}}
<div class="dashboard-cards">
    <div class="dashboard-card-single">
        <div>
            <h2>70</h2>
            <span>Projects</span>
        </div>
        <div>
            <i class="fa-solid fa-folder-open"></i>
        </div>
    </div>
    <div class="dashboard-card-single">
        <div>
            <h2>10</h2>
            <span>Categories</span>
        </div>
        <div>
            <i class="fa-solid fa-rectangle-list"></i>
        </div>
    </div>
    <div class="dashboard-card-single">
        <div>
            <h2>20</h2>
            <span>Tags</span>
        </div>
        <div>
            <i class="fa-solid fa-tags"></i>
        </div>
    </div>
</div>
@endsection
