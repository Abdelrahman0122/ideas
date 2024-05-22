@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-3">
     @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <hr>
            <div class="mt-3">
                @include('ideas.shared.idea-card')
            </div>

            <div class="mt-3">

            </div>
        </div>
        <di.v class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
    </div>
    </div>
@endsection
