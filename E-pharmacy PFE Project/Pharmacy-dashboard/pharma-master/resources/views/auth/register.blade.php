  <!DOCTYPE html>
<html lang="en" class="form-screen">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inscription - Pharma One </title>

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
          Inscription
        </p>
      </header>
      <div class="card-content">
        <form method="POST" action="/register" enctype="multipart/form-data">
            @csrf
            <div class="field spaced">
                <label class="label">Username</label>
                <div class="control icons-left">
                    <input class="input" type="text" name="username" placeholder="username" autocomplete="username">
                    <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
                </div>
                @error('email')
                    <p class="help" style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="field spaced">
                <label class="label">Login Email</label>
                <div class="control icons-left">
                    <input class="input" type="text" name="email" placeholder="user@example.com" autocomplete="email">
                    <span class="icon is-small left"><i class="mdi mdi-mail"></i></span>
                </div>
                @error('username')
                    <p class="help" style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="field spaced">
                <label class="label">Mot de Passe</label>
                <p class="control icons-left">
                    <input class="input" type="password" name="mot_de_passe" placeholder="*********">
                    <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                </p>
                @error('mot_de_passe')
                    <p class="help" style="color: red">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Photo <small>(Optionnelle)</small></label>
                <div class="field-body">
                  <div class="field file">
                    <label class="upload control">
                      <a class="button blue">
                        Télécharger
                      </a>
                      <input type="file" id="image" name="image" onchange="displayImageName()">
                    </label>
                  </div>
                  <div id="image-preview" style="margin-top: 10px;">
                    <img id="preview" src="" alt="Aperçu de l'image" style="max-width: 100px; max-height: 100px; display: none;">
                    <span id="image-name"></span>
                  </div>
                </div>
                <script>
                    function displayImageName() {
                        var input = document.getElementById('image');
                        var fileName = input.files[0].name;
                        var preview = document.getElementById('preview');
                        var imageName = document.getElementById('image-name');
                        preview.src = URL.createObjectURL(input.files[0]);
                        preview.style.display = "block";
                        imageName.innerText = fileName;
                    }
                </script>
              </div>

            <hr>

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button blue">
                        S'inscrire
                    </button>
                </div>
                <div class="control">
                    <a href="/loginForm" class="button green">
                        Vous avez déjà un compte ?
                    </a>
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
