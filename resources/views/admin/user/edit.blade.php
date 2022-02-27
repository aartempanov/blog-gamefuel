@extends('admin.layouts.base')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 d-flex">
          <a href="{{ url()->previous() }}" class="btn btn-light mr-3"><i class="fas fa-long-arrow-alt-left"></i></a>
          <h1 class="m-0">Редактирование пользователя - {{ $user->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Пользователи</a></li>
            <li class="breadcrumb-item active">Редактирование пользователя</li>
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
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
                  <div class="form-group">
                    <label for="exampleInputFile">Обложка пользователя (PNG, JPG)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cover_image">
                        <label class="custom-file-label">Выбрать файл</label>
                      </div>
                    </div>
                    @error('cover_image')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Аватар пользователя (PNG, JPG)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile_image">
                        <label class="custom-file-label">Выбрать файл</label>
                      </div>
                    </div>
                    @error('profile_image')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Имя пользователя</label>
                    <input type="text" class="form-control" name="name" placeholder="Введите имя пользователя" value="{{ $user->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Email пользователя</label>
                    <input type="text" class="form-control" name="email" placeholder="Введите email пользователя" value="{{ $user->email }}">
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label>Выберите роль пользователя</label>
                      <select class="form-control" name="role">
                        @foreach($roles as $id => $role)
                          <option
                            value="{{ $id }}" {{ $id == $user->role ? ' selected' : '' }}>{{ $role }}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('role')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                  </div>
                  <input type="submit" class="btn btn-primary" value="Сохранить">
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
