@extends('layouts.app')

@section('content')
<div class="container min-vh-100">
    <h1>Hello, {{ $name }}</h1>
    <!-- @ foreach( $ posts as $ post ) -->
        <div class="card mb-2">
            <div class="card-body">
                <h3>post title</h3>
                <h5>Posted by keith</h5>
                <div class="d-flex align-items-center gap-2">
                    post
                </div>
            </div>
        </div>
    <!-- @ endforeach -->
</div>
@endsection