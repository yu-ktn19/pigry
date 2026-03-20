<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigry</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common2.css')}}">
    @yield('css')
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <p>PiGLy</p>
    </div>
    <form action="/wight_logs/goal_setting" action="post">
      <div>
        <button>
          ⚙目標体重設定
        </button>
      </div>
    </form>
    <form action="/wight_logs/goal_setting" action=""></form>
      <div>
        <button>
          🚪ログアウト
        </button>
      </div>
    </form>
  </header>

  <main>
    @yield('content')
  </main>
    
</body>
</html>