@extends('layouts.admin-master')

@section('title', 'Vehicle Details')
@section('vehicles', 'active')
@section('breadcrum')
    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="{{ url('admin/vehicles') }}">Vehicles</a></li>
@endsection