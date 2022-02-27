@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Посты</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active">Посты</li>
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
              <span class="card-title mr-auto">Создайте или отредактируйте посты</span>
              <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-sm">Создать пост</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Заголовок поста</th>
                    <th>Категории поста</th>
                    <th>Теги поста</th>
                    <th>Дата создания</th>
                    <th>Дата изменения</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td>{{ $post->id }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->category_id }}</td>
                      <td>-</td>
                      <td>{{ $post->created_at }}</td>
                      <td>{{ $post->updated_at }}</td>
                      <td class="d-flex">
                        <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-success btn-sm">
                          <i class="fas fa-pen"></i>
                        </a>
                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" class="ml-2">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-block btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                        <a href="{{ route('admin.post.show', $post->id) }}" class="ml-2 btn btn-block btn-primary btn-sm">
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
