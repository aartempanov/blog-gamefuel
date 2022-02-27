@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Пост - {{ $post->title }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active">Пост</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <div class="row justify-content-md-center">
              <div class="col-6">
                <div class="card mt-3">
                  <div class="card-body d-flex">
                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-pen"></i>
                      <span class="ml-2">Редактировать</span>
                    </a>
                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" class="ml-2">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                        <span class="ml-2">Удалить</span>
                      </button>
                    </form>
                  </div>
                </div>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    ID
                    <b>{{ $post->id }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Заголовок поста
                    <b>{{ $post->title }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Категории поста
                    <b>{{ $post->category_id }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Теги поста
                    <b>-</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Дата создания
                    <b>{{ $post->created_at }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Дата создания
                    <b>{{ $post->updated_at }}</b>
                  </li>
                </ul>
                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="img-fluid rounded mb-3 mt-3">
                <div>
                  {!! $post->content !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
