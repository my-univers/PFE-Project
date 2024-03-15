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
                            Ajouter Premiers Secours
                        </p>
                    </header>
                    <div class="card-content">

                        <form method="get" action="/premiers_secours/add" enctype="multipart/form-data">

                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Nom" name="nom">
                                            <span class="icon left"><i class="mdi mdi-medical-bag"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea" placeholder="Description" name="description"></textarea>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Marque"
                                                name="marque">
                                            <span class="icon left"><i class="mdi mdi-account"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Prix"
                                                name="prix">
                                            <span class="icon left"><span class="mdi mdi-cash"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Quantité en stock"
                                                name="qte_en_stock">
                                            <span class="icon left"><span class="mdi mdi-store"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="field">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control icons-left">
                                            <input class="input" type="text" placeholder="Image" name="image">
                                            <span class="icon left"><span class="mdi mdi-image-area"></span></span>
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
                                    <button type="reset" class="button red" onclick="annuler()">
                                        Annuler
                                    </button>
                                    <script>
                                        function annuler() {
                                            window.location.href = '/premiers_secours';
                                        };
                                    </script>
                                </div>
                            </div>

                            <hr>
                        </form>
                    </div>
                </div>


        </div>
    </div>

    <footer class="footer">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            <div class="flex items-center justify-start space-x-3">
                <div>
                    © 2024, Pharma One
                </div>
            </div>
        </div>
    </footer>

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
    </div>

@endsection
