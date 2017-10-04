@extends('adminlte::page')

@section('title')
    Messages
@endsection

@section('content')
    <div class="container-fluid">
        @foreach($messages as $message)
            <div class="col-md-4">
                <h2>Le client {{ $message->name }}<h2>
                <p>a dit : {{ $message->body }}</p>
                <p>Email : <a href="mailto:{{ $message->email }}" target="_top">{{ $message->email }}</a></p>
            </div>
        @endforeach
    </div>
@endsection

