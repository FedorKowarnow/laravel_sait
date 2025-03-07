@extends('layouts.main')
@section('content')
<div>
    <form action="{{route('review.update', $review->id)}}" method="post">
      @csrf
      @method('patch')
      <div class="mb-3">
          <label for="title" class="form-label">Название обзора</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$review->title}}"></input>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Текст обзора</label>
          <textarea class="form-control" name="content" id="content" placeholder="Content">{{$review->content}}</textarea>
      </div>
        </div>
        <div class="mb-3">
          <label for="image">Фото</label>
          <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$review->image}}"></input>
        </div>
        <div>
          <label for="category">Категория</label>
          <select class="form-select" id="category" name="category_id">
            @foreach ($categories as $category)
            <option {{ $category->id === $review->category_id ? ' selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary mb-3">Изменить</button>
    </form>
  </div>  
@endsection