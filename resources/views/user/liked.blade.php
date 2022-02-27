@extends('layouts.base')

@section('content')

<section>
  <div class="profile">
    <img src="{{ asset('storage/' . $userData['cover_image']) }}" alt="">
    <div id="wrapper">
      <h5 style="position: absolute; margin-top: -50px; padding-left: 130px"><span class="badge badge-{{ $rolesColor[$userData['role']] }}">{{ $roles[$userData['role']] }}</span></h5>
      <div class="profile_header">
        <img src="{{ asset('storage/' . $userData['profile_image']) }}" alt="" class="profile_avatar">
        <div class="profile_meta">
          <div class="profile_name">
            <b>{{ $userData['name'] }}</b>
            <span>{{ $userData['email'] }}</span>
          </div>
          <ul class="profile_controllers">
            <li>
              <a href="#">Подписаться</a>
            </li>
          </ul>
        </div>

        <hr>

        <div class="profile_data">
          <ul>
            <li>
              <a href="#">
                <h3 class="h3">89</h3>
                <span>Статьи</span>
              </a>
            </li>
            <li>
              <a href="#">
                <h3 class="h3">168</h3>
                <span>Комментарии</span>
              </a>
            </li>
            <li>
              <a href="#">
                <h3 class="h3">1680</h3>
                <span>Подписчиков</span>
              </a>
            </li>
            <li id="active_profile_data">
              <a href="{{ route('user.liked', $userData['id']) }}">
                <h3 class="h3">{{ $userData['liked_posts_count'] }}</h3>
                <span>Понравилось</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="standardNews">
    <div id="wrapper">
      <ul>
        <li id="componentHeader">
          <div class="standardNews_header_cont">
            <h2>Статьи</h2>
          </div>
        </li>
        <li id="componentHeader"></li>
        <li id="componentHeader"></li>
        <li id="componentHeader">
          <select class="form-control" name="role">
            <option selected>Все рубрики</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </li>
      </ul>
      <ul>
        @foreach ($userData['liked_post'] as $post)
          <li id="componentNews">
            <div>
              <span class="color-news" id="componentCropp">
                <a href="#">tag</a>
              </span>
              <a href="#" id="componentNews_link">
                <img id="componentNews_coverImg" src="{{ asset('storage/' . $post->preview_image) }}" alt="#">
              </a>
              <h3><a href="#">{{ $post->title }}</a></h3>
              <div id="componentNews_clamp"><p>description</p></div>
            </div>
            <div id="componentNews_metaData">
              <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
              <span>91023</span>
              <span id="componentDott">&#149;</span>
              <span>21.08.1993</span>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="mt-5">
    <div id="wrapper">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>

@endsection
