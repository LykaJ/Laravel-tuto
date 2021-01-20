@extends('base')

@section('title')
    <title>Hello City</title>
@endsection

@section('content')
        <h1>Hello from Paris</h1>
        <p>It's currently {{ date('H:i') }}.</p>
@endsection
