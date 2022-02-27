@extends('layouts.base')

@section('content')

<!-- Последняя новость -->
<header>
    <div id="headerImage">
        <img src="{{ asset('img/image/news_1.jpg') }}" alt="#">
    </div>
    <div id="wrapper">
        <div class="container">
            <div class="container_text">
                <div>
                    <span class="color-news" id="componentCropp">
                        <a href="#">category</a>
                        <span>&#149;</span>
                        <a href="#">tag</a>
                    </span>
                </div>
                <a href="#">
                    <h1>title</h1>
                </a>
                <div class="container_text_block">
                    <div class="container_text_block_left">
                        <img src="{{ asset('img/icon/icon_views_white.svg') }}" alt="#">
                        <span>91023</span>
                        <span id="componentDott">&#149;</span>
                        <span>21.08.1993</span>
                        <span id="componentDott">&#149;</span>
                        <a href="#">author_img author_name</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Реклама 3-х новостей -->
<section>
  <div class="lastNews">
    <div id="wrapper">
      <ul>
        <li>
          <div class="lastNews_news">
            <img src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            <div class="lastNews_news_text">
              <a href="#" class="lastNews_news_text_clamp"><h3>title</h3></a>
              <div class="lastNews_news_text_meta">
                <span>21.08.1993</span>
                <span id="componentDott">&#149;</span>
                <a href="#">category</a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Новости -->
<section>
  <div class="standardNews">
    <div id="wrapper">
      <div class="standardNews_header">
        <div class="standardNews_header_cont">
          <h2>category</h2>
          <a id="componentCroppNews" href="#">tag</a>
        </div>
        <a class="standardNews_header_link" href="#">В раздел<span></span></a>
      </div>
      <ul>
        <li id="componentNews">
          <div>
            <span class="color-news" id="componentCropp">
              <a href="#">tag</a>
            </span>
            <a href="#" id="componentNews_link">
              <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
            <h3><a href="#">title</a></h3>
            <div id="componentNews_clamp"><p>description</p></div>
          </div>
          <div id="componentNews_metaData">
            <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
            <span>91023</span>
            <span id="componentDott">&#149;</span>
            <span>21.08.1993</span>
          </div>
        </li>

        <li id="componentLastNews">
          <div id="componentLastNews_content">
            <img src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            <div id="componentLastNews_content_text">
              <h3><a href="#">title</a></h3>
              <span>21.08.1993</span>
            </div>
          </div>
          <hr>

          <div id="componentLastNews_adv">
            <h4>Блок рекламы</h4>
            <h4>300 х 97</h4>
          </div>
          <a href="#" id="componentLastNews_link">Все статьи по теме</a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Реклама -->
<section>
  <div id="wrapper">
    <div id="componentAdvFull">
      <div>
        <h4>Блок рекламы</h4>
        <h4>1530 x 150</h4>
      </div>
    </div>
  </div>
</section>

<!-- Игры -->
<section>
  <div class="fullNews">
    <div id="wrapper">
      <div class="fullNews_header">


        <div class="standardNews_header_cont">
          <h2>category</h2>
          <a id="componentCroppNews" href="#">tag</a>
        </div>
        <a class="standardNews_header_link" href="#">В раздел<span></span></a>
      </div>
      <ul>
        <li id="componentNewsFull">
          <div>
            <div id="componentNewsFull_header">
              <span class="color-news" id="componentCropp">
                <a href="#">tag</a>
              </span>
              <h3><a href="#">title</a></h3>
            </div>

            <a href="#" id="componentNewsFull_link">
            <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
          </div>
          <div id="componentNewsFull_metaData">
            <div id="componentNewsFull_metaData_data">
              <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
              <span>91023</span>
              <span id="componentDott">&#149;</span>
              <span>21.08.1993</span>
            </div>
          </div>
        </li>

        <li id="componentNews">
          <div>
            <span class="color-news" id="componentCropp">
              <a href="#">tag</a>
            </span>
            <a href="#" id="componentNews_link">
              <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
            <h3><a href="#">title</a></h3>
            <div id="componentNews_clamp"><p>description</p></div>
          </div>
          <div id="componentNews_metaData">
            <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
            <span>91023</span>
            <span id="componentDott">&#149;</span>
            <span>21.08.1993</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Подборки -->
<section>
  <div class="standardNews">
    <div id="wrapper">
      <div class="standardNews_header">
        <div class="standardNews_header_cont">
          <h2>category</h2>
          <a id="componentCroppNews" href="#">tag</a>
        </div>
        <a class="standardNews_header_link" href="#">В раздел<span></span></a>
      </div>
      <ul>
        <li id="componentNews">
          <div>
            <span class="color-news" id="componentCropp">
              <a href="#">tag</a>
            </span>
            <a href="#" id="componentNews_link">
              <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
            <h3><a href="#">title</a></h3>
            <div id="componentNews_clamp"><p>description</p></div>
          </div>
          <div id="componentNews_metaData">
            <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
            <span>91023</span>
            <span id="componentDott">&#149;</span>
            <span>21.08.1993</span>
          </div>
        </li>

        <li id="componentLastNews">
          <div id="componentLastNews_content">
            <img src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            <div id="componentLastNews_content_text">
              <h3><a href="#">title</a></h3>
              <span>21.08.1993</span>
            </div>
          </div>
          <hr>

          <div id="componentLastNews_adv">
            <h4>Блок рекламы</h4>
            <h4>300 х 97</h4>
          </div>
          <a href="#" id="componentLastNews_link">Все статьи по теме</a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Наши авторы статей -->
<section>
  <div class="ourHeader">
    <div id="wrapper"><h3>Наши авторы статей</h3></div>
  </div>
  <div class="ourAuthors">

    <div id="wrapper">
      <ul>
        <li>
          <div class="ourAuthors_content">
            <img src="{{ asset('/img/image/ava/avatar_3.jpg') }}" alt="{optional}">
            <div class="ourAuthors_content_meta">
              <a href="#"><h3>Екатерина Б.</h3></a>
              <div>
                <span>207 статей</span>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="ourAuthors_content">
            <img src="{{ asset('/img/image/ava/avatar_3.jpg') }}" alt="{optional}">
            <div class="ourAuthors_content_meta">
              <a href="#"><h3>Екатерина Б.</h3></a>
              <div>
                <span>207 статей</span>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="ourAuthors_content">
            <img src="{{ asset('/img/image/ava/avatar_3.jpg') }}" alt="{optional}">
            <div class="ourAuthors_content_meta">
              <a href="#"><h3>Екатерина Б.</h3></a>
              <div>
                <span>207 статей</span>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="ourAuthors_content">
            <img src="{{ asset('/img/image/ava/avatar_4.jpg') }}" alt="{optional}">
            <div class="ourAuthors_content_meta">
              <a href="#"><h3>Людмила Л.</h3></a>
              <div>
                <span>207 статей</span>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Первый взгляд -->
<section>
  <div class="fullNews">
    <div id="wrapper">
      <div class="fullNews_header">


        <div class="standardNews_header_cont">
          <h2>category</h2>
          <a id="componentCroppNews" href="#">tag</a>
        </div>
        <a class="standardNews_header_link" href="#">В раздел<span></span></a>
      </div>
      <ul>
        <li id="componentNewsFull">
          <div>
            <div id="componentNewsFull_header">
              <span class="color-news" id="componentCropp">
                <a href="#">tag</a>
              </span>
              <h3><a href="#">title</a></h3>
            </div>

            <a href="#" id="componentNewsFull_link">
            <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
          </div>
          <div id="componentNewsFull_metaData">
            <div id="componentNewsFull_metaData_data">
              <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
              <span>91023</span>
              <span id="componentDott">&#149;</span>
              <span>21.08.1993</span>
            </div>
          </div>
        </li>

        <li id="componentNews">
          <div>
            <span class="color-news" id="componentCropp">
              <a href="#">tag</a>
            </span>
            <a href="#" id="componentNews_link">
              <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
            <h3><a href="#">title</a></h3>
            <div id="componentNews_clamp"><p>description</p></div>
          </div>
          <div id="componentNews_metaData">
            <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
            <span>91023</span>
            <span id="componentDott">&#149;</span>
            <span>21.08.1993</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Полезное -->
<section>
  <div class="standardNews">
    <div id="wrapper">
      <div class="standardNews_header">
        <div class="standardNews_header_cont">
          <h2>category</h2>
          <a id="componentCroppNews" href="#">tag</a>
        </div>
        <a class="standardNews_header_link" href="#">В раздел<span></span></a>
      </div>
      <ul>
        <li id="componentNews">
          <div>
            <span class="color-news" id="componentCropp">
              <a href="#">tag</a>
            </span>
            <a href="#" id="componentNews_link">
              <img id="componentNews_coverImg" src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            </a>
            <h3><a href="#">title</a></h3>
            <div id="componentNews_clamp"><p>description</p></div>
          </div>
          <div id="componentNews_metaData">
            <img src="{{ asset('/img/icon/icon_views.svg') }}" alt="#">
            <span>91023</span>
            <span id="componentDott">&#149;</span>
            <span>21.08.1993</span>
          </div>
        </li>

        <li id="componentLastNews">
          <div id="componentLastNews_content">
            <img src="{{ asset('img/image/news_1.jpg') }}" alt="#">
            <div id="componentLastNews_content_text">
              <h3><a href="#">title</a></h3>
              <span>21.08.1993</span>
            </div>
          </div>
          <hr>

          <div id="componentLastNews_adv">
            <h4>Блок рекламы</h4>
            <h4>300 х 97</h4>
          </div>
          <a href="#" id="componentLastNews_link">Все статьи по теме</a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Реклама -->
<section>
  <div id="wrapper">
    <div id="componentAdvFull">
      <div>
        <h4>Блок рекламы</h4>
        <h4>1530 x 150</h4>
      </div>
    </div>
  </div>
</section>

@endsection
