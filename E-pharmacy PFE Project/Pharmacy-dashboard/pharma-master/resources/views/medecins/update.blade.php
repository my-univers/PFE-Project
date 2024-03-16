@extends('master')
@section('content')

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
            <span class="icon"><i class="mdi mdi-account-group"></i></span>
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
        <li class="active">
          <a class="dropdown">
            <span class="icon"><i class="mdi mdi-doctor"></i></span>
            <span class="menu-item-label">Medecins</span>
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
        </li>
        <li>
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
            <span class="icon"><i class="mdi mdi-medical-bag"></i></span>
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
        Modifier Médecin
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
        <form method="post" action="/medecins/update/{{ $m->id }}">
            @csrf
          <div class="field">
            {{-- <label class="label">From</label> --}}
            <div class="field-body">
                <div class="field">
                <div class="control icons-left">
                    <input class="input" type="text" id="nom" name="nom" placeholder="Nom" value="{{ $m->nom }}">
                    <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
                </div>
                <div class="field">
                <div class="control icons-left icons-right">
                    <input class="input" type="email" id="email" name="email" placeholder="E-mail" value="{{ $m->email }}">
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
                    <input class="input" type="tel" id="telephone" name="telephone" placeholder="Téléphone" value="{{ $m->telephone }}">
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
                    <option value="Cardiologie" @if($m->specialite == "Cardiologie") selected @endif>Cardiologie</option>
                    <option value="Dermatologie" @if($m->specialite == "Dermatologie") selected @endif>Dermatologie</option>
                    <option value="Endocrinologie" @if($m->specialite == "Endocrinologie") selected @endif>Endocrinologie</option>
                    <option value="Gastro-entérologie" @if($m->specialite == "Gastro-entérologie") selected @endif>Gastro-entérologie</option>
                    <option value="Gynécologie" @if($m->specialite == "Gynécologie") selected @endif>Gynécologie</option>
                    <option value="Hématologie" @if($m->specialite == "Hématologie") selected @endif>Hématologie</option>
                    <option value="Neurologie" @if($m->specialite == "Neurologie") selected @endif>Neurologie</option>
                    <option value="Ophtalmologie" @if($m->specialite == "Ophtalmologie") selected @endif>Ophtalmologie</option>
                    <option value="Oto-rhino-laryngologie (ORL)" @if($m->specialite == "Oto-rhino-laryngologie (ORL)") selected @endif>Oto-rhino-laryngologie (ORL)</option>
                    <option value="Pédiatrie" @if($m->specialite == "Pédiatrie") selected @endif>Pédiatrie</option>
                    <option value="Pneumologie" @if($m->specialite == "Pneumologie") selected @endif>Pneumologie</option>
                    <option value="Rhumatologie" @if($m->specialite == "Rhumatologie") selected @endif>Rhumatologie</option>
                    <option value="Urologie" @if($m->specialite == "Urologie") selected @endif>Urologie</option>
                    <option value="Oncologie" @if($m->specialite == "Oncologie") selected @endif>Oncologie</option>
                    <option value="Médecine interne" @if($m->specialite == "Médecine interne") selected @endif>Médecine interne</option>
                    <option value="Médecine générale" @if($m->specialite == "Médecine générale") selected @endif>Médecine générale</option>
                    <option value="Nutrition" @if($m->specialite == "Nutrition") selected @endif>Nutrition</option>
                    <option value="Pharmacologie" @if($m->specialite == "Pharmacologie") selected @endif>Pharmacologie</option>
                    <option value="Toxicologie" @if($m->specialite == "Toxicologie") selected @endif>Toxicologie</option>
                    <option value="Microbiologie" @if($m->specialite == "Microbiologie") selected @endif>Microbiologie</option>
                    <option value="Immunologie" @if($m->specialite == "Immunologie") selected @endif>Immunologie</option>
                    <option value="Hépatologie" @if($m->specialite == "Hépatologie") selected @endif>Hépatologie</option>
                    <option value="Néphrologie" @if($m->specialite == "Néphrologie") selected @endif>Néphrologie</option>
                    <option value="Chirurgie" @if($m->specialite == "Chirurgie") selected @endif>Chirurgie</option>
                    <option value="Orthopédie" @if($m->specialite == "Orthopédie") selected @endif>Orthopédie</option>
                    <option value="Traumatologie" @if($m->specialite == "Traumatologie") selected @endif>Traumatologie</option>
                    <option value="Anesthésie" @if($m->specialite == "Anesthésie") selected @endif>Anesthésie</option>
                    <option value="Radiologie" @if($m->specialite == "Radiologie") selected @endif>Radiologie</option>
                    <option value="Pathologie" @if($m->specialite == "Pathologie") selected @endif>Pathologie</option>
                    <option value="Médecine du sport" @if($m->specialite == "Médecine du sport") selected @endif>Médecine du sport</option>
                    <option value="Médecine d'urgence" @if($m->specialite == "Médecine d'urgence") selected @endif>Médecine d'urgence</option>
                    <option value="Médecine légale" @if($m->specialite == "Médecine lég
                    ale") selected @endif>Médecine légale</option>

                    <option value="Médecine du travail" @if($m->specialite == "Médecine du travail") selected @endif>Médecine du travail</option>
                    <option value="Médecine de la reproduction" @if($m->specialite == "Médecine de la reproduction") selected @endif>Médecine de la reproduction</option>
                    <option value="Médecine physique et de réadaptation" @if($m->specialite == "Médecine physique et de réadaptation") selected @endif>Médecine physique et de réadaptation</option>
                    <option value="Médecine tropicale" @if($m->specialite == "Médecine tropicale") selected @endif>Médecine tropicale</option>
                    <option value="Médecine esthétique" @if($m->specialite == "Médecine esthétique") selected @endif>Médecine esthétique</option>
                    <option value="Médecine alternative" @if($m->specialite == "Médecine alternative") selected @endif>Médecine alternative</option>
                </select>
                </div>
            </div>
            </div>
            <div class="field">
            <label class="label">Ville</label>
            <div class="control">
                <div class="select">
                <select name="ville">
                    <option value="Agadir" @if($m->ville == "Agadir") selected @endif>Agadir</option>
                    <option value="Al Hoceïma" @if($m->ville == "Al Hoceïma") selected @endif>Al Hoceïma</option>
                    <option value="Azrou" @if($m->ville == "Azrou") selected @endif>Azrou</option>
                    <option value="Beni Mellal" @if($m->ville == "Beni Mellal") selected @endif>Beni Mellal</option>
                    <option value="Berkane" @if($m->ville == "Berkane") selected @endif>Berkane</option>
                    <option value="Casablanca" @if($m->ville == "Casablanca") selected @endif>Casablanca</option>
                    <option value="Chefchaouen" @if($m->ville == "Chefchaouen") selected @endif>Chefchaouen</option>
                    <option value="Dakhla" @if($m->ville == "Dakhla") selected @endif>Dakhla</option>
                    <option value="El Jadida" @if($m->ville == "El Jadida") selected @endif>El Jadida</option>
                    <option value="Errachidia" @if($m->ville == "Errachidia") selected @endif>Errachidia</option>
                    <option value="Essaouira" @if($m->ville == "Essaouira") selected @endif>Essaouira</option>
                    <option value="Fès" @if($m->ville == "Fès") selected @endif>Fès</option>
                    <option value="Guelmim" @if($m->ville == "Guelmim") selected @endif>Guelmim</option>
                    <option value="Ifrane" @if($m->ville == "Ifrane") selected @endif>Ifrane</option>
                    <option value="Kénitra" @if($m->ville == "Kénitra") selected @endif>Kénitra</option>
                    <option value="Khouribga" @if($m->ville == "Khouribga") selected @endif>Khouribga</option>
                    <option value="Laâyoune" @if($m->ville == "Laâyoune") selected @endif>Laâyoune</option>
                    <option value="Marrakech" @if($m->ville == "Marrakech") selected @endif>Marrakech</option>
                    <option value="Meknès" @if($m->ville == "Meknès") selected @endif>Meknès</option>
                    <option value="Nador" @if($m->ville == "Nador") selected @endif>Nador</option>
                    <option value="Ouarzazate" @if($m->ville == "Ouarzazate") selected @endif>Ouarzazate</option>
                    <option value="Oujda" @if($m->ville == "Oujda") selected @endif>Oujda</option>
                    <option value="Rabat" @if($m->ville == "Rabat") selected @endif>Rabat</option>
                    <option value="Safi" @if($m->ville == "Safi") selected @endif>Safi</option>
                    <option value="Salé" @if($m->ville == "Salé") selected @endif>Salé</option>
                    <option value="Tanger" @if($m->ville == "Tanger") selected @endif>Tanger</option>
                    <option value="Taza" @if($m->ville == "Taza") selected @endif>Taza</option>
                    <option value="Tétouan" @if($m->ville == "Tétouan") selected @endif>Tétouan</option>
                </select>
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
              <button type="button" class="button red">
                Annuler
              </button>
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

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="../../js/main.min.js?v=1628755089081"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="../../js/chart.sample.min.js"></script>


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
@endsection
