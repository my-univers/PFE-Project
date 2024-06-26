<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Pharma One</title>

  <link rel="stylesheet" href="../../css/main.css?v=1628755089081">
    <link href="../css/app.css" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="/img/pharmaOne-logo-bg.png">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
        {{-- <a href="https://192.168.1.8:8080" target="blank" class="navbar-item has-divider">
        <span class="icon"><i class="mdi mdi-monitor"></i></span>
        <span><strong>PHARMA</strong></span>
      </a> --}}
      <div class="navbar-item dropdown has-divider has-user-avatar">
        @auth('admin')
        <a class="navbar-link">
            <div class="user-avatar">
                <img src="{{ asset(auth('admin')->user()->photo) }}" alt="{{ ucwords(auth('admin')->user()->username) }}" class="rounded-full">
            </div>
            <div class="is-user-name"><span>{{ ucwords(auth('admin')->user()->username) }}</span></div>
            <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
        </a>
        @endauth
        <div class="navbar-dropdown">
            <a href="/profil" class="navbar-item">
              <span class="icon"><i class="mdi mdi-account"></i></span>
              <span>Mon Profile</span>
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="/logout">
              <span class="icon"><i class="mdi mdi-logout"></i></span>
              <span>Déconnexion</span>
            </a>
        </div>

      </div>
    </div>
  </div>
</nav>

@yield('aside')


@yield('content')


<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2024, Pharma One
      </div>
    </div>
  </div>
</footer>
</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../js/main.min.js?v=1628755089081"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="../js/chart.sample.min.js"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
