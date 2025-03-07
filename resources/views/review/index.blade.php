@extends('layouts.main')
@section('content')
<div>
    <div>
      <a href="{{route('review.create')}}" class="btn btn-primary">Написать обзор</a>
    </div>
    @foreach ($reviews as $review)
    <div>
      <a href="{{route('review.show', $review->id)}}">{{$review->id}}.{{$review->title}}</a>
      @foreach ($users as $user)
      <div>
        
            <p>{{ $user->id === $review->user_id ? "Обзор создал: ". $user->name : ''}}</p>
      </div>
      @endforeach
    </div>

    @endforeach
    <div>
      {{$reviews->withQueryString()->links()}}
    </div>
  </div>
@endsection