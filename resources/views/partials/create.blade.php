@extends('layouts.main-layout')

@section ('content')

<form action="{{route('store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="firstname">NAME</label>
            <input type="">
        </div>
        <div class="form-group">
            <label for="lastname">LASTNAME</label>
            <input type="">
        </div>
        <div class="form-group">
            <label for="date_of_birth">DATE OF BIRTH</label>
            <input type="">
        </div>
        <div class="form-group">
            <label for="private_code">PRIVATE CODE</label>
            <input type="">
        </div>
        <button type="submit">INSERISCI</button>
    </form>


@endsection 
