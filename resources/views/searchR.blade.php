@extends('layouts.app')
@section('content')
<div class="container">

@if(isset($offer))
<h2>Search results</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>category</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        @foreach($offer as $off)
        <tr>
            <td>{{$off->title}}</td>
            <td>{{$off->description}}</td>
            <th>{{$cat['name_cat']}}</th>
            <th>{{$city['name_city']}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
@else
no results!
@endif
</div>
@endsection



