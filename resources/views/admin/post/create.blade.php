@extends('admin.layouts.base')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Создание поста</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Главная</a></li>
              <li class="breadcrumb-item"><a href="#">Посты</a></li>
              <li class="breadcrumb-item active">Создание поста</li>
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
                  <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Заголовок поста</label>
                      <input type="text" class="form-control" name="title" placeholder="Введите заголовок поста"
                             value="{{ old('title') }}">
                      @error('title')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Превью поста (PNG, JPG)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="preview_image">
                          <label class="custom-file-label">Выбрать файл</label>
                        </div>
                      </div>
                      @error('preview_image')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label>Выберите категорию</label>
                        <select class="form-control" name="category_id">
                          @foreach($categories as $category)
                            <option
                              value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : '' }}>{{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>
                      @error('category_id')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Выберите теги</label>
                      <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                        @foreach($tags as $tag)
                          <option value="{{ $tag->id }}" {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}>{{ $tag->title }}</option>
                        @endforeach
                      </select>
                      @error('tag_ids')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Содержимое</label>
                      <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                      @error('content')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Создать">
                    </div>
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
