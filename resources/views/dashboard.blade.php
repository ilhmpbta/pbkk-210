@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon"><i class="bi bi-people"></i></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalAdmins }}</h3>
                    <p>Total Admins</p>
                </div>
                <div class="icon"><i class="bi bi-shield-lock"></i></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalStaf }}</h3>
                    <p>Total Staf</p>
                </div>
                <div class="icon"><i class="bi bi-person-badge"></i></div>
            </div>
        </div>
    </div>
@stop
