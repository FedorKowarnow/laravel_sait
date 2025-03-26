@extends('layouts.main')
@section('content') 
<div>
    <form action="{{route('review.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
          <label for="title" class="form-label">Название обзора</label>
          <input value="{{old('title')}}" type="text" name="title" class="form-control" id="title" placeholder="Title"></input>
          @error('title')
          <p class="text-danger">Ошибка в названии</p>
          @enderror
          </div>
        <div class="mb-3">
          <label for="content" class="form-label">Текст обзора</label>
          <textarea class="form-control" name="content" id="content" placeholder="Content">{{old('content')}}</textarea>
          @error('content')
          <p class="text-danger">Проверьте введеный текст</p>
          @enderror
        </div>
        </div>
        <div>
          <label for="category">Обозреваемый продукт</label>
          <select class="form-select" id="category" name="category_id">
            @foreach ($categories as $category)
            <option
            {{old('category_id')== $category->id? 'selected': ''}}
            value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image">Фото</label>
          <input type="file" multiple name="image[]" class="form-control" id="image" placeholder="Image" accept=".png, .jpg, .jpeg"></input>
          @error('image')
          <p class="text-danger">Ошибка с добавлением фото</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Опубликовать</button>
    </form>
  </div>
@endsection