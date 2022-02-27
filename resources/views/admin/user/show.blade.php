@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex align-items-center">
          <a href="{{ url()->previous() }}" class="btn btn-light mr-3"><i class="fas fa-long-arrow-alt-left"></i></a>
          <h1 class="m-0">Пользователь - {{ $user->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active">Пользователи</li>
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
                  
                  <li class="list-group-item d-flex justify-content-center align-items-center">
                    <div class="p-5"> 
                      <div class="rounded-circle border d-flex justify-content-center align-items-center" style="width:200px; height:200px" alt="Avatar">
                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="preview_image" class="rounded-circle" style="width:180px; height:180px; object-fit: cover">
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    ID
                    <b>{{ $user->id }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Имя пользователя
                    <b>{{ $user->name }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Email пользователя
                    <b>{{ $user->email }}</b>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Роль пользователя
                    <h5><span class="badge badge-{{ $rolesColor[$user->role] }}">{{ $roles[$user->role] }}</span></h5>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Дата создания
                    <b>{{ $user->created_at }}</b>
                  </li>
                </ul>
                <div class="card mt-3">
                  <div class="card-body d-flex">
                    <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-pen"></i>
                      <span class="ml-2">Редактировать</span>
                    </a>
                    <button class="ml-2 btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                      <i class="fas fa-trash"></i>
                      <span class="ml-2">Удалить</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Подтвердить удаление?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
          <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" class="ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Удалить</button>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- /.content -->
</div>

@endsection
