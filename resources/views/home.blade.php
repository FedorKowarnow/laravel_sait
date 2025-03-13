
@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Личный кабинет') }}</div>
                <div>{{Auth::user()->name}}</div>
                <div>{{Auth::user()->user_image}}</div>
                <div>{{Auth::user()->user_info}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ты тут пока что!') }}
                </div>



            </div>
        </div>
    </div>
</div>
<div>
    <form action="{{route('user.update', Auth::id())}}" method="post">
      @csrf
      @method('patch')
        <div class="mb-3">
          <label for="content" class="form-label">О себе</label>
          <textarea class="form-control" name="user_info" id="user_info" placeholder="User_info">{{Auth::user()->user_info}}</textarea>
      </div>
        </div>
        <div class="mb-3">
          <label for="user_image">Фото</label>
          <input type="text" name="user_image" class="form-control" id="user_image" placeholder="user_image" value="{{Auth::user()->user_image}}"></input>
        </div>
        
        <button type="submit" class="btn btn-primary mb-3">Изменить</button>
    </form>
  </div>  
@endsection
