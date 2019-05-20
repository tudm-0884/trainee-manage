@extends('admin.layouts.master')

@section('content')
    @if (session('status'))
        <div class="alert alert-danger" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="content-wrapper">
        <div class="content-body">
            
        </div>
    </div>
@endsection
