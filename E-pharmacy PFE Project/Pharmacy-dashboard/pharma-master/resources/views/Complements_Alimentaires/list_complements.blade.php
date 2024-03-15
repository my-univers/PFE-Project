@extends('master')
<<<<<<< HEAD

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
      <li >
        <a href="index.html">
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
      <li class="active">
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
      <li>
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
=======
@section('content')
    
>>>>>>> 877efc0b3a96a514b270122d4fe7d5a48cc26704
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Compléments Alimentaires</li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Liste des Compléments
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><span class="mdi mdi-medication"></span></span>
            Compléments
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
            <thead>
                <tr>
                    <th></th>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col" style="width: 450px">Description</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Quantité en stock</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach($list as $complement)
                <tr>
                    <td></td>
                    <td scope="row">{{ $complement->id }}</td>
                    <td>{{ $complement->nom }}</td>
                    <td>{{ $complement->descr }}</td>
                    <td>{{ $complement->prix }} DH</td>
                    <td>{{ $complement->qte_en_stock }}</td>
                    <td class="actions-cell">
                      <div class="buttons right nowrap">
                          <a class="button small green --jb-modal" href="/complements/updateForm/{{$complement->id}}">
                          <span class="icon"><i class="mdi mdi-pencil"></i></span>
                          </a>
                          <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                          <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                          </button>
                      </div>
                      </td>
                </tr>
                @endforeach
          </table>
          </tbody>
        </table>

        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div>
  </section>


<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Confirmation de Suppression</p>
    </header>
    <section class="modal-card-body">
      <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
      <p> Cette action est irréversible.</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Annuler</button>
      <script>
        function annuler() {
            window.location.href = '{{ route('complements.list') }}';
        };
    </script>

      <a class="button red --jb-modal-close" href="/complements/delete/{{$complement->id}}">Confirmer</a>
    </footer>
  </div>
</div>
@endsection