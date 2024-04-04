<!DOCTYPE html>
<html lang="en" class="form-screen">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mot de passe oublié - Pharma One </title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="../css/main.css?v=1628755089081">

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

  <section class="section main-section">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-lock"></i></span>
              Mot de Passe Oublié
            </p>
        </header>
        <center>
            @error('success')
            <p class="help" style="color: green">{{ $message }}</p>
            @enderror
        </center>
        <center>
            @error('error')
            <p class="help" style="color: green">{{ $message }}</p>
            @enderror
        </center>
        <br>
        <center>
            <p class="help" >
                Entrez votre adresse mail et vous receverez un code de confirmation.
            </p>
            @error('error')
            <p class="help" style="color: red">{{ $message }}</p>
            @enderror
        </center>
      <div class="card-content">
        <form method="post" action="{{ route('send.verification.code') }}">
            @csrf
            <div class="field spaced">
                <label class="label">Email</label>
                <div class="control icons-left">
                    <input class="input" type="email" name="email" placeholder="user@example.com" autocomplete>
                    <span class="icon is-small left"><i class="mdi mdi-mail"></i></span>
                </div>
                @error('email')
                    <p class="help" style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="field spaced">
                <label class="label">Email Confirmation</label>
                <div class="control icons-left">
                    <input class="input" type="email" name="email_confirm" placeholder="user@example.com" >
                    <span class="icon is-small left"><i class="mdi mdi-mail"></i></span>
                </div>
                @error('email_confirm')
                    <p class="help" style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <hr>
            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </section>


</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../js/main.min.js?v=1628755089081"></script>


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
