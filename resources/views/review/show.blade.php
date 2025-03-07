@extends('layouts.main')
@section('content') 
<div>
  
    <div>{{$review->id}}.{{$review->title}}</div>
    <div>{{$review->content}}</div>
    
    
  </div>
  <div>
      <a href="{{route('review.edit', $review->id)}}">Редактировать</a>
  </div>
  <div>
      <form action="{{route('review.destroy', $review->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Удалить"></input>
      </form>
  </div>
  <div>
      <a href="{{route('review.index')}}">Назад</a>
  </div> 
@endsection