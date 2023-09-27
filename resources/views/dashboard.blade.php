@extends('main')

@section('title', 'Dashboard')
@section('css', 'dashboard.css')

@section('root')

<div class="row con">
    <div class="col-md-3 sidebar" id="sidebar" style="padding: 10px 30px;">
@include('sidebar')
    </div>
    <div class="col" id="root">
        @section('table')
        @show
    </div>
</div>
@endsection