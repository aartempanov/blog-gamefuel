@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Создание категории</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Категории</a></li>
            <li class="breadcrumb-item active">Создание категории</li>
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
                <form action="{{ route('admin.category.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Название категории</label>
                    <input type="text" class="form-control" name="title" placeholder="Введите название категории">
                    @error('title')
                        <small class="text-danger">Поле не может быть пустым</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Краткое название (EN)</label>
                    <input type="text" class="form-control" name="slug" placeholder="Введите краткое название (EN)">
                    @error('slug')
                        <small class="text-danger">Поле не может быть пустым</small>
                    @enderror
                  </div>
                  <input type="submit" class="btn btn-primary" value="Создать">
                </form>
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