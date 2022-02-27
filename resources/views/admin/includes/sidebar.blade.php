<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.index') }}" class="brand-link">
    <img src="{{ asset('dist/img/logo.png') }}" alt="GameFuel" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light ml-2">Admin panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.index') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Главная панель
            </p>
          </a>
        </li>
        <li class="nav-header">ПОСТЫ</li>
        <li class="nav-item">
          <a href="{{ route('admin.post.index') }}" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>
              Посты
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Категории
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Теги
            </p>
          </a>
        </li>
        <li class="nav-header">ПОЛЬЗОВАТЕЛИ</li>
        <li class="nav-item">
          <a href="{{ route('admin.user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Пользователи
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>
