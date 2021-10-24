@extends('users.dashboard_main')
@section('dashboard_view')
Hello <b style="color:#4361ee">{{ Auth::user()->name }}</b>
@endsection
