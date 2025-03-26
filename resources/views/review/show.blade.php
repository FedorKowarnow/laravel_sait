@extends('layouts.main')
@section('content') 
<div>
  
    <div>{{$review->id}}.{{$review->title}}</div>
    <div>{{$review->content}}</div>
    <hr>
    @foreach ($review->getMedia('reviews') as $image)
    <div>
      <img src="{{$image->getUrl()}}"></img>
    </div>
    <hr>

    @endforeach

    <form action="{{route('review.reviewUserLike.store', $review->id)}}" method="post">
        @csrf  
          <button type="submit" class="btn btn-primary mb-3" name="like"  value="{{1}}">Like</button>
          <button type="submit" class="btn btn-primary mb-3" name="like" value="{{0}}">Disike</button>
    </form>

  <div>
      <a href="{{route('review.edit', $review->id)}}">Редактировать</a>
  </div>
  <div>
      <form action="{{route('review.destroy', $review->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Удалить Обзор"></input>
      </form>
  </div>
  <div>
      <a href="{{route('review.index')}}">Назад</a>
  </div>
  <hr>
</div>

@foreach ($reviewUserComments as $reviewUserComment)
<div>
  <p>{{ 'Автор: '.$reviewUserComment->user->name}}</p>
  <a>Текст комментария: {{$reviewUserComment->content}}</a>

  <form action="{{route('reviewUserComment.commentUserLike.store', $reviewUserComment->id)}}" method="post">
    @csrf  
      <button type="submit" class="btn btn-primary mb-3" name="like"  value="{{1}}">Like</button>
      <button type="submit" class="btn btn-primary mb-3" name="like" value="{{0}}">Disike</button>
</form>

  <div>
    <form action="{{route('reviewUserComment.destroy', $reviewUserComment->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Удалить"></input>
    </form>
</div>

  <hr>
</div>
@endforeach

<div>
  {{$reviewUserComments->withQueryString()->links()}}
</div>

  <hr>
  <div>
    <form action="{{route('review.reviewUserComment.store', $review->id)}}" method="post">
      @csrf
        <div class="mb-3">
          <textarea class="form-control" name="content" id="content" placeholder="Commentary">{{old('content')}}</textarea>
        </div>
        <div class="mb-3">
          <input value="{{old('image')}}" type="text" name="image" class="form-control" id="image" placeholder="Image">
          @error('image')
          <p class="text-danger">Ошибка с добавлением фото</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Опубликовать</button>
    </form>
  </div>
@endsection