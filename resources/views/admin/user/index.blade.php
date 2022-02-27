@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Пользователи</h1>
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
          <div class="card">
            <div class="card-header d-flex">
              <span class="card-title mr-auto">Создайте или отредактируйте пользователя</span>
              <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm">Создать пользователя</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Имя пользователя</th>
                    <th>Email пользователя</th>
                    <th>Роль пользователя</th>
                    <th>Дата создания</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td><h5><span class="badge badge-{{ $rolesColor[$user->role] }}">{{ $roles[$user->role] }}</span></h5></td>
                      <td>{{ $user->created_at }}</td>
                      <td class="d-flex">
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-success btn-sm">
                          <i class="fas fa-pen"></i>
                        </a>
                        <button class="ml-2 btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                          <i class="fas fa-trash"></i>
                        </button>
                        <a href="{{ route('admin.user.show', $user->id) }}" class="ml-2 btn btn-block btn-primary btn-sm">
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
