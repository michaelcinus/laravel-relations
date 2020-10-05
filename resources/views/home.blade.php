@extends('layouts.main-layout')

@section ('content')

<h3><a href="{{route('create')}}">Registra nuovo Employee</a>
</h3>

<h1>Employees</h1>

<ul>
        @foreach ($emps as $emp)

            <li>
                <a href="{{route('show', $emp -> id)}}"> 
                {{ $emp -> firstname }}
                {{ $emp -> lastname }}

                </a> 
            </li>
        @endforeach
    </ul>


@endsection 
