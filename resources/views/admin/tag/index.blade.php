@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Теги</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active">Теги</li>
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
          <div class="card">
            <div class="card-header d-flex">
              <span class="card-title mr-auto">Создайте или отредактируйте теги</span>
              <a href="{{ route('admin.tag.create') }}" class="btn btn-primary btn-sm">Создать тег</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Краткое название (EN)</th>
                    <th>Статей с этим тегом</th>
                    <th>Дата создания</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tags as $tag)
                    <tr>
                      <td>{{ $tag->id }}</td>
                      <td>{{ $tag->title }}</td>
                      <td>{{ $tag->slug }}</td>
                      <td>-</td>
                      <td>{{ $tag->created_at }}</td>
                      <td class="d-flex">
                        <a href="{{ route('admin.tag.edit', $tag->id) }}" class="btn btn-success btn-sm">
                          <i class="fas fa-pen"></i>
                        </a>
                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" class="ml-2">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-block btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                        <a href="{{ route('admin.tag.show', $tag->id) }}" class="ml-2 btn btn-block btn-primary btn-sm">
                          <i class="fas fa-sign-in-alt"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
