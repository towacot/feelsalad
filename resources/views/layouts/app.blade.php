<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FEEL SALAD</title>

 @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<header>
  <nav class="head_container">
    <div class="title_box">
      <a class="title_text" href="{{ route('posts.index') }}">Feel Salad</a>
        <div class="title_description">archive of my progress, job hunting diary or rejected record</div>
    </div>
    <div class="navibar">
        <a class="navibar_item" href="{{ route('posts.index') }}">Home</a>

         </div>
  </nav>
</header>


<body>
  @yield('content')
    </body>


    <footer class="footer">
        <hr>
      <div class="footer_container">
        <div class="footer_box">
            <div class="footer_box_title">
                Contact
            </div>
            <a class="ftbox_link" href="https://github.com/towacot">Github Account</a>
            <div class="ftbox_link">mynavisnak@gmail.com</div>
            <div class="ftbox_text">ヤバい欠陥を見つけた等ありましたらご連絡ください。</div>
        </div>
        <div class="footer_box">
            <div class="footer_box_title">
                About
            </div>
            <div class="ftbox_text">
                PHP MySQL Laravel等々を学習するべく作成。したものの、結局CSSに一番時間を取られているような気がする。
                <br>具体的にはMasonryレイアウトの夢を10時間ほど見ていた。
            </div>

        </div>
      </div>
    </footer>

    
    </html>
