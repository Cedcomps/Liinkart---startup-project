@extends('layouts.app')

    <!-- Sidebar -->
    @section('sidebar')
        @include('admin.sidebar')
    @endsection

    @yield('content')

