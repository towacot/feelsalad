<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feel Salad</title>
    <meta name="twitter:card" content="summary">
    <meta name="og:title" content="{{$pagetitle}}">
    <meta name="og:description" content="{{$pageinfo}}">
     <meta name="og:image" content="https://towacott.sakura.ne.jp/website/feelsalad/laravel/public/imageMain.png">
    

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
            <a class="ftbox_link" href="https://github.com/towacot">Github</a>
            <a class="ftbox_link" href="https://forms.gle/83BuAJsXhQsuQ6cR7">連絡フォーム</a>
            <div class="ftbox_text">ヤバい欠陥を見つけた等ありましたらご連絡ください。</div>
        </div>
        <div class="footer_box">
            <div class="footer_box_title">
                About
            </div>
            <div class="ftbox_text">
                PHP MySQL Laravel等々を学習するべく作成。したものの、結局CSSに一番時間を取られているような気がする。AIの助けを借りないことをサブの目標とした。
            </div>

        </div>
      </div>
    </footer>

    
    </html>
