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