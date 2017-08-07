@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card w-200">
                <div class="card-header">
                    <h4 class="card-title">{{ $chore->name }}</h4><p>Due by {{ $chore->due_at->format('F jS, Y') }}</p>
                </div>
                <div class="card-block">
                    <p class="card-text">{{ $chore->additional_information }}</p>
                    <a href="#" class="btn btn-primary">Mark as completed</a>
                </div>
            </div>
        </div>
    </div>
@endsection
