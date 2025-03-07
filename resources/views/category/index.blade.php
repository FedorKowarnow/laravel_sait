@extends('layouts.main')
@section('content')
<div>
  <div>
    <a class="nav-link" href="{{route('review.index')}}">Все обзоры</a>
  <div>
    @foreach ($categories as $category)
    <div><a href="{{route('review.index')}}{{"?category_id="}}{{$category->id}}">{{$category->id}}.{{$category->title}}</a></div>
    <div><a>{{$category->information}}</a></div>
    @endforeach
    
  </div>
@endsection