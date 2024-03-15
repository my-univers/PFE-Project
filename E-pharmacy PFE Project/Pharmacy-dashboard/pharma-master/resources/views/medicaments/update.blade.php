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
        Modifier Médicament
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
        <form method="post" action="/medicaments/update/{{ $medic->id }}" enctype="multipart/form-data">
            @csrf
          <div class="field">
            {{-- <label class="label">From</label> --}}
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="text" id="nom" name="nom" placeholder="Nom" value="{{ $medic->nom }}">
                  <span class="icon left"><i class="mdi mdi-tag"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control">
                  <textarea class="textarea" id="description" name="descr" placeholder="Description">{{ $medic->descr }}</textarea>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="number" id="prix" name="prix" placeholder="Prix" step="0.01" value="{{ $medic->prix }}">
                  <span class="icon left"><i class="mdi mdi-cash"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left">
                  <input class="input" type="number" id="qte_en_stock" name="qte_en_stock" placeholder="Quantité en stock" value="{{ $medic->qte_en_stock }}">
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
                            <input type="file" id="image" name="image" onchange="displayImagePreview()">
                        </label>
                    </div>
                    <div id="image-preview" style="margin-top: 10px;">
                        <img id="preview" src="{{ asset($medic->image_path) }}" alt="Aperçu de l'image" style="max-width: 100px; max-height: 100px; display: block;">
                        <span id="image-name">{{ basename($medic->image_path) }}</span>
                    </div>
                </div>
              </div>
            <div class="field">
                <label class="label">Ordonnance</label>
                <div class="field-body">
                    <div class="field grouped multiline">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="ordonnance" value="1" @if($medic->ordonnance == 1) checked @endif>
                                <span class="check"></span>
                                <span class="control-label">Nécessaire</span>
                            </label>
                        </div>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="ordonnance" value="0" @if($medic->ordonnance == 0) checked @endif>
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
                Modifier
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

                function displayImagePreview() {
                    var input = document.getElementById('image');
                    var preview = document.getElementById('preview');
                    var imageName = document.getElementById('image-name');
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            preview.src = e.target.result;
                            preview.style.display = "block"; // Ajout de cette ligne pour afficher l'aperçu de l'image
                        }
                        reader.readAsDataURL(input.files[0]);
                        imageName.innerText = input.files[0].name;
                    }
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
