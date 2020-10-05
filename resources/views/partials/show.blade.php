@extends('layouts.main-layout')

@section ('content')

<ul>

    <li>Name : {{ $emp -> firstname }}</li>
    <li>Lastname : {{ $emp -> lastname }}</li>
    <li>Date of birth : {{ $emp -> date_of_birth }}</li>
    <li>Private code : {{ $emp -> private_code }}</li>
    <li>Location : {{ $emp -> location -> name }} ({{ $emp -> location -> state }})</li>

</ul>

<a href="">EDIT</a>
<a href="{{route('delete', $emp -> id)}}">DELETE</a>


@endsection 