@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Welcome to Laravel 8 from Services </h1>

<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>Add Service</button>
</form>
<p style="color:red";>@error('name') {{$message}} @enderror</p>
<ul>
@foreach($services as $service)
    <li>{{ $service->name }}</li>
 
@endforeach
</ul>

@endsection