@extends('layouts.main')
@section('content') 
<div>
  
    <div>{{$review->id}}.{{$review->title}}</div>
    <div>{{$review->content}}</div>

    <form action="{{route('reviewUserLike.store')}}" method="post">
        @csrf
        
        <select name="review_id" key="review_id" id="review_id">
            <option  value="{{ $review->id }}"></option>
        </select>
          <div name="review_id" key="review_id"  value="{{ $review->id }}"></div>
          <button type="submit" class="btn btn-primary mb-3" name="like"  value="{{1}}">Like</button>
          <button type="submit" class="btn btn-primary mb-3" name="like" value="{{0}}">Disike</button>
      </form>
    
    
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