@extends('master')

@section('aside')
<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Pharma <b class="font-black">One</b>
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li>
        <a href="/">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Tableau de Bord</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Gestion</p>
    <ul class="menu-list">
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-account-group"></i></span>
          <span class="menu-item-label">Clients</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          <span class="menu-item-label">Medecins</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Médicaments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="#void">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="#void">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-medication"></i></span>
          <span class="menu-item-label">Compléments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="{{ route('complements.list') }}">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="{{ route('complements.form') }}">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="active">
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
          <span class="menu-item-label">Premiers Secours</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/premiers_secours">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/premiers_secours/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="set-active-forms-html">
        <a href="#">
          <span class="icon"><i class="mdi mdi-cart-outline"></i></span>
          <span class="menu-item-label">Commandes</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">A Propos</p>
    <ul class="menu-list">
      <li>
        <a href="#" class="has-icon">
          <span class="icon"><i class="mdi mdi-github-circle"></i></span>
          <span class="menu-item-label">GitHub</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
@endsection

@section('content')
<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <ul>
        <li>Admin</li>
        <li>Premiers Secours</li>
      </ul>
    </div>
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <ul>
        <li>Admin</li>
        <li>Premiers Secours</li>
      </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
      <h1 class="title">
        Premiers Secours
      </h1>
    </div>
</section>

<div class="card-content">

    <section class="section main-section">
      <div class="card mb-6">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-ballot"></i></span>
            Modifier Premiers Secours 
          </p>
        </header>
        <div class="card-content">
          <form method="post" action="/premiers_secours/update/{{$premier->id}}">
            @csrf
                <div class="field">
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Nom" name="nom" value="{{ $premier->nom }}">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Description" name="description">{{$premier->description}}</textarea>
                </div>
                </div>


                <div class="field">
                  <div class="control">
                    <textarea class="textarea" placeholder="Marque" name="marque">{{$premier->marque}}</textarea>
                </div>
                </div>


                <div class="field">
                  <div class="field-body">
                    <div class="field">
                      <div class="control icons-left">
                        <input class="input" type="text" placeholder="Prix" name="prix" value="{{ $premier->prix }}">
                        <span class="icon left"><span class="mdi mdi-cash"></span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="field">
                    <div class="field-body">
                      <div class="field">
                        <div class="control icons-left">
                          <input class="input" type="text" placeholder="Quantité en stock" name="qte_stock" value="{{ $premier->qte_en_stock }}">
                          <span class="icon left"><span class="mdi mdi-store"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="field">
                    <div class="field-body">
                      <div class="field">
                        <div class="control icons-left">
                          <input class="input" type="text" placeholder="Image" name="image" value="{{ $premier->image_path }}">
                          <span class="icon left"><span class="mdi mdi-store"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="field grouped">
                    <div class="control">
                      <button type="submit" class="button green">
                        Modifier
                      </button>
                    </div>
                    <div class="control">
                      <button type="reset" class="button red" onclick="annuler()">
                        Annuler
                      </button>
                      <script>
                          function annuler() {
                              window.location.href = '{{ route('complements.list') }}';
                          };
                      </script>
                    </div>
                  </div>
  
                </form>
              </div>
            </div>
    </section>
</div>

@endsection