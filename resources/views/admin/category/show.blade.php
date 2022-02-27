@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Категория - {{ $category->title }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active">Категория</li>
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
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    ID
                    <b>{{ $category->id }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Название
                    <b>{{ $category->title }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Краткое название (EN)
                    <b>{{ $category->slug }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Статей с этой категорией
                    <b>-</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Дата создания
                    <b>{{ $category->created_at }}</b>
                  </li>
                </ul>
                <div class="card mt-3">
                  <div class="card-body d-flex">
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-pen"></i>
                      <span class="ml-2">Редактировать</span>
                    </a>
                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" class="ml-2">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                        <span class="ml-2">Удалить</span>
                      </button>
                    </form>
                  </div>
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
