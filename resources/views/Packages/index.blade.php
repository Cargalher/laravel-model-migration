@extends('layout.app')

@section('title', 'Package Page Travel Agency')

@section('content')

<h1>Package page</h1>


    @foreach($packages as $package)
        <img src="{{$package->image}}" alt="">
        <h2>{{$package->vacation_name}}</h2>
        <div class="content">
            <p>
                {{$package->description}}
            </p>
            <span>{{$package->place}}</span>
            <span>Offer Date: {{$package->dates}}</span>
        </div>
    @endforeach

@endsection