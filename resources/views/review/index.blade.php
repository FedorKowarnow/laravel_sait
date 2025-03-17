@extends('layouts.main')
@section('content')
<div>
    <div>
      <a href="{{route('review.create')}}" class="btn btn-primary">Написать обзор</a>
    </div>
    @foreach ($reviews as $review)
    <div>
      <a href="{{route('review.show', $review->id)}}">{{$review->id}}.{{$review->title}}</a>
      <div> 
            <p>{{ "Обзор создал: ". $review->user->name}}</p>
      </div>
    </div>

    @endforeach
    <div>
      {{$reviews->withQueryString()->links()}}
    </div>
  </div>
@endsection