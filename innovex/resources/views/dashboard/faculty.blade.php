@extends('layouts.app')

@section('content')
<div class="p-5 text-xl">Welcome, {{ auth()->user()->role }}!</div>
@endsection
