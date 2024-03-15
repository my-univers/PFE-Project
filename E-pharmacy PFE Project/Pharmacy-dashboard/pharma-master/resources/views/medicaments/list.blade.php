@extends('master')
@section('content')
    
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Médicaments </li>
    </ul>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
        Liste des Médicaments
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          Médicaments
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
            <th>#</th>
            <th>Nom</th>
            <th style="width: 460px">Description</th>
            <th>Prix</th>
            <th>Quantité en stock</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            @foreach($medicaments as $m)
            <tr>
                <td></td>
                <td>{{ $m->id }}</td>
                <td>{{ $m->nom }}</td>
                <td>{{ $m->descr }}</td>
                <td>{{ $m->prix }} DH</td>
                <td>{{ $m->qte_en_stock }}</td>
                <td class="actions-cell">
                <div class="buttons right nowrap">
                    <a class="button small green --jb-modal" href="/medicaments/updateForm/{{$m->id}}">
                    <span class="icon"><i class="mdi mdi-pencil"></i></span>
                    </a>
                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                </div>
                </td>
            </tr>
            @endforeach
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
      <p class="modal-card-title">Confirmer la Suppression</p>
    </header>
    <section class="modal-card-body">
      <p>Êtes-vous sûr de vouloir supprimer ce médicament ?</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Annuler</button>
      <a class="button red --jb-modal-close" href="/medicaments/delete/{{$m->id}}">Confirmer</a>
    </footer>
  </div>
</div>

{{-- <div id="sample-modal-2" class="modal">
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
</div> --}}

</div>

@endsection