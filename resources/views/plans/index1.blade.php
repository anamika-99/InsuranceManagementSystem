@extends('layouts.app')
@section('content')

<div class="image">
    <h1><center> Health Plans</center></h1>
        
    @foreach($plan as $value)
    
    <tr>
    <td><a href="{{route('healthplans.show',$value->id)}}"><div class="block"><h3>{{$value->Name}}</h3></div></td>
    
    </tr>
    @endforEach
    
</div>

@endsection