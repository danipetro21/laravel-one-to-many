@extends('layouts.base')

@section('content')
    <ul>
        @foreach ($data as $person)
            <li>  
                <h1>NAME: {{ $person -> name }}</h1>
                <h3>DETAILS</h3>
                Email: {{ $person -> mail }}    
                <br>
                Phone: {{ $person -> personDetail -> phone }}
                <br>
                Address: {{ $person -> personDetail -> address }}
                <hr>
                <br>
                <ul>
                    @foreach ($person -> posts as $post)
                    <h2>POST TITLE: {{ $post -> title }}</h2>

                    <p>{{ $post -> body }}</p>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection


