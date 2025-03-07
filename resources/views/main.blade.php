@extends('layouts.main')
@section('content')
<div>
    
    @foreach ($categories as $category)
    <div><a href="{{route('review.index')}}{{"?category_id="}}{{$category->id}}">{{$category->id}}.{{$category->title}}</a></div>
    @endforeach
    
  </div>  
@endsection