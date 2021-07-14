@extends('layout.app')

@section('title', 'Package Page Travel Agency')

@section('content')



<div class="container disp">
    @foreach($packages as $package)
    <div class="card_trips">
        <img src="{{$package->image}}" alt="">
        <h2>{{$package->vacation_name}}</h2>
        <div class="content">
            <p>
                {{$package->description}}
            </p>
            <div class="details">
                <span>{{$package->place}}</span> <br>
                <span>Offer Date: {{$package->dates}}</span>
            </div>
            
        </div>
        
    </div>
        
    @endforeach
   
</div>
    
@endsection