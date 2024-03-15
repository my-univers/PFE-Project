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
        Ajouter Médicament
    </h1>
  </div>
</section>

<section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-pill"></i></span>
          Médicament
        </p>
      </header>
      <div class="card-content">
        <form method="post" action="/medicaments/add" enctype="multipart/form-data">
            @csrf
          <div class="field">
            {{-- <label class="label">From</label> --}}
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" id="nom" name="nom" placeholder="Nom">
                  <span class="icon left"><i class="mdi mdi-tag"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <textarea class="textarea" id="description" name="descr" placeholder="Description"></textarea>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="number" id="prix" name="prix" placeholder="Prix" step="0.01">
                  <span class="icon left"><i class="mdi mdi-cash"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="number" id="qte_en_stock" name="qte_en_stock" placeholder="Quantité en stock">
                  <span class="icon left"><i class="mdi mdi-store"></i></span>
                </div>
              </div>
              <div class="field">
                <label class="label">Image</label>
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
              </div>
              <div class="field">
                <label class="label">Ordonnance</label>
                <div class="field-body">
                  <div class="field grouped multiline">
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="ordonnance" value="1">
                        <span class="check"></span>
                        <span class="control-label">Nécessaire</span>
                      </label>
                    </div>
                    <div class="control">
                      <label class="radio">
                        <input type="radio" name="ordonnance" value="0">
                        <span class="check"></span>
                        <span class="control-label">Facultative</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Ajouter
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red" onclick="resetForm()">
                Annuler
              </button>
              <script>
                function resetForm() {
                    document.getElementById('nom').value = "";
                    document.getElementById('description').value = "";
                    document.getElementById('prix').value = "";
                    document.getElementById('qte_en_stock').value = "";
                    document.getElementById('image').value = "";
                    document.getElementById('preview').style.display = "none";
                    document.getElementById('image-name').innerText = "";
                    document.getElementById('ordonnance').checked = false;
                }

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
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection