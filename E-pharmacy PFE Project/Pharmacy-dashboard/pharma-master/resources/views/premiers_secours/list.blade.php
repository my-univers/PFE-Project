@extends('master')
@section('content')
    
<section class="is-title-bar">
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
      Liste des Premiers Secours
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><span class="mdi mdi-medication"></span></span>
            Premiers Secours
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
                  <th scope="col">Marque</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Quantité en stock</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach($list as $premier)
                <tr>
                    <td></td>
                    <td scope="row">{{ $premier->id }}</td>
                    <td>{{ $premier->nom }}</td>
                    <td>{{ $premier->description }}</td>
                    <td>{{ $premier->marque }}</td>
                    <td>{{ $premier->prix }} DH</td>
                    <td>{{ $premier->qte_en_stock }}</td>
                    <td class="actions-cell">
                      <div class="buttons right nowrap">
                          <a class="button small green --jb-modal" href="/premiers_secours/updateForm/{{$premier->id}}">
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
            window.location.href = '/premiers_secours/list';
        };
    </script>

      <a class="button red --jb-modal-close" href="/premiers_secours/delete/{{$premier->id}}">Confirmer</a>
    </footer>
  </div>
</div>
@endsection