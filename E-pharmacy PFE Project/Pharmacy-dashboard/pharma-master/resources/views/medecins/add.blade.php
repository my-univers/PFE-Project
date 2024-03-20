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
      <li >
        <a href="/dashboard">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Tableau de Bord</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Gestion</p>
    <ul class="menu-list">
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-account"></i></span>
          <span class="menu-item-label">Clients</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/clients/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/clients/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li  class="active">
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          <span class="menu-item-label">Médecins</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/medecins/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/medecins/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Produits</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/produits/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/produits/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <li>
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-format-list-bulleted-type"></i></span>
            <span class="menu-item-label">Catégories</span>
            <span class="icon"><i class="mdi mdi-plus"></i></span>
          </a>
          <ul>
            <li>
              <a href="/categories/list">
                  <span>Liste</span>
              </a>
            </li>
          </ul>
        </li>
      <li>
      {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          <span class="menu-item-label">Médicaments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/medicaments/list">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/medicaments/addForm">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
      {{-- <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-needle"></i></span>
          <span class="menu-item-label">Compléments</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/complements">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/complements/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li> --}}
      {{-- <li>
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
      </li> --}}
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-cart"></i></span>
          <span class="menu-item-label">Commandes</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/commandes">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/commandes/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-package-variant"></i></span>
          <span class="menu-item-label">Packs</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/packs">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/packs/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
          <span class="menu-item-label">Packs Produits</span>
          <span class="icon"><i class="mdi mdi-plus"></i></span>
        </a>
        <ul>
          <li>
            <a href="/packs_produits">
              <span>Liste</span>
            </a>
          </li>
          <li>
            <a href="/packs_produits/form">
              <span>Ajout</span>
            </a>
          </li>
        </ul>
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
      <li>Médecins </li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
        Ajouter Médecin
    </h1>
  </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-doctor"></i></span>
          Médecin
        </p>
      </header>
      <div class="card-content">
        <form method="post" action="/medecins/add">
            @csrf
          <div class="field">
            {{-- <label class="label">From</label> --}}
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" id="nom" name="nom" placeholder="Nom">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" type="email" id="email" name="email" placeholder="E-mail">
                  <span class="icon left"><i class="mdi mdi-mail"></i></span>
                  <span class="icon right"><i class="mdi mdi-check"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="field-body">
              <div class="field">
                <div class="field addons">
                  <div class="control">
                    <input class="input" value="+212" size="3" readonly>
                  </div>
                  <div class="control expanded">
                    <input class="input" type="tel" id="telephone" name="telephone" placeholder="Téléphone">
                  </div>
                </div>
                <p class="help">Entrez le premier zero</p>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Spécialité</label>
            <div class="control">
              <div class="select">
                <select name="specialite">
                    <option value="Cardiologie">Cardiologie</option>
                    <option value="Dermatologie">Dermatologie</option>
                    <option value="Endocrinologie">Endocrinologie</option>
                    <option value="Gastro-entérologie">Gastro-entérologie</option>
                    <option value="Gynécologie">Gynécologie</option>
                    <option value="Hématologie">Hématologie</option>
                    <option value="Neurologie">Neurologie</option>
                    <option value="Ophtalmologie">Ophtalmologie</option>
                    <option value="Oto-rhino-laryngologie (ORL)">Oto-rhino-laryngologie (ORL)</option>
                    <option value="Pédiatrie">Pédiatrie</option>
                    <option value="Pneumologie">Pneumologie</option>
                    <option value="Rhumatologie">Rhumatologie</option>
                    <option value="Urologie">Urologie</option>
                    <option value="Oncologie">Oncologie</option>
                    <option value="Médecine interne">Médecine interne</option>
                    <option value="Médecine générale">Médecine générale</option>
                    <option value="Nutrition">Nutrition</option>
                    <option value="Pharmacologie">Pharmacologie</option>
                    <option value="Toxicologie">Toxicologie</option>
                    <option value="Microbiologie">Microbiologie</option>
                    <option value="Immunologie">Immunologie</option>
                    <option value="Hépatologie">Hépatologie</option>
                    <option value="Néphrologie">Néphrologie</option>
                    <option value="Chirurgie">Chirurgie</option>
                    <option value="Orthopédie">Orthopédie</option>
                    <option value="Traumatologie">Traumatologie</option>
                    <option value="Anesthésie">Anesthésie</option>
                    <option value="Radiologie">Radiologie</option>
                    <option value="Radiologie">Radiologie</option>
                    <option value="Pathologie">Pathologie</option>
                    <option value="Médecine du sport">Médecine du sport</option>
                    <option value="Médecine d'urgence">Médecine d'urgence</option>
                    <option value="Médecine légale">Médecine légale</option>
                    <option value="Médecine du travail">Médecine du travail</option>
                    <option value="Médecine de la reproduction">Médecine de la reproduction</option>
                    <option value="Médecine physique et de réadaptation">Médecine physique et de réadaptation</option>
                    <option value="Médecine tropicale">Médecine tropicale</option>
                    <option value="Médecine esthétique">Médecine esthétique</option>
                    <option value="Médecine alternative">Médecine alternative</option>
                </select>
              </div>
            </div>
          </div>
          <div class="field">
            <label class="label">Ville</label>
            <div class="control">
              <div class="select">
                <select name="ville">
                    <option value="Agadir">Agadir</option>
                    <option value="Al Hoceïma">Al Hoceïma</option>
                    <option value="Béni Mellal">Béni Mellal</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Chefchaouen">Chefchaouen</option>
                    <option value="Dakhla">Dakhla</option>
                    <option value="El Jadida">El Jadida</option>
                    <option value="Erfoud">Erfoud</option>
                    <option value="Essaouira">Essaouira</option>
                    <option value="Fès">Fès</option>
                    <option value="Guelmim">Guelmim</option>
                    <option value="Ifrane">Ifrane</option>
                    <option value="Kénitra">Kénitra</option>
                    <option value="Laâyoune">Laâyoune</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Meknès">Meknès</option>
                    <option value="Nador">Nador</option>
                    <option value="Ouarzazate">Ouarzazate</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Safi">Safi</option>
                    <option value="Salé">Salé</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Tétouan">Tétouan</option>
                    <option value="Zagora">Zagora</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Ajouter
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red" onclick="reset()">
                Annuler
              </button>
              <script>
                function reset() {
                    document.getElementById('nom').value = "";
                    document.getElementById('email').value = "";
                    document.getElementById('telephone').value = "";
                }
              </script>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

@endsection
