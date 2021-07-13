@extends('layout.app')

@section('title', 'Package Page Travel Agency')

@section('content')




    @foreach($packages as $package)
    <div class="card_trips">
        <img src="{{$package->image}}" alt="">
        <h2>{{$package->vacation_name}}</h2>
        <div class="content">
            <p>
                {{$package->description}}
            </p>
            <span>{{$package->place}}</span>
            <span>Offer Date: {{$package->dates}}</span>
        </div>
        
    </div>
        
    @endforeach
   
@endsection