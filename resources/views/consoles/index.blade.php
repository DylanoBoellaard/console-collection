@extends('layouts.app')

@section('title', 'Consoles')

@section('content')

<!-- {{-- Console grid here --}} -->
<x-console-display :consoles="$consoles" />

@endsection