@extends('app')

@foreach($results as $result)
    <div>
        <h3>{{ $result->title }}</h3>
        <p>{{ $result->description }}</p>
    </div>
@endforeach