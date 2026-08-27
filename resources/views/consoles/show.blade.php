@extends('layouts.app')

@section('title', 'Consoles')

@section('content')

<div>
    {{ $console->name }}

    {{ $console->manufacturer->name }}

    {{ $console->generation->name }}

    @foreach ($console->models as $model)
    ...
    @endforeach

    @foreach ($console->controllers as $controller)
    ...
    @endforeach

    @foreach ($console->accessories as $accessory)
    ...
    @endforeach
</div>
@endsection