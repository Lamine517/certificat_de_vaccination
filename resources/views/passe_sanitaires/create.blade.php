@extends('passe_sanitaires.layout')

@section('content')
<div class="containn">
<p id="titre1">Demande du Certificat de vaccination contre le COVID 19</p><br><br>
    </div>
    <!-- <p id="titre1">Demande du Certificat de vaccination contre le COVID 19</p><br><br> -->
    <main class="containn">
        <!-- <p id="titre1">Demande du Certificat de vaccination contre le COVID 19</p><br><br> -->
        <div class="demo-left">
            <img src=" {{ asset('img/TELFIGMA.jpeg') }}" alt="" id="mon-image">
        </div>
        <div class="demo-right">
            <div class="contain-form">
                <form action="{{ route('passe_sanitaires.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                    <div id="ip">
                        <h4>Informations Personnelles</h4><hr>
                        <div class="row">
                            <div class="col-75-m">
                                <label for="prenom">Prénom</label><br>
                                <input type="text" id="prenom" name="prenom" placeholder="votre prénom">
                            </div>
                            <div class="col-75-m">
                                <label for="nom">Nom</label><br>
                                <input type="text" id="nom" name="nom" placeholder="votre nom">
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-75">
                                <label for="tel">Numéro de Téléphone</label><br>
                                <input type="number" id="telephone" name="telephone" placeholder="votre numéro de téléphone">
                            </div>
                        </div>
                    </div>
                    <!-- pour la carte de vaccination -->
                    <div id="cs">
                        <h4>Carte de vaccination</h4><hr>
                        <div class="row">
                            <div class="col-75-m">
                                <label for="cv_recto">Recto</label><br>
                                <input type="file" id="cv_recto" name="cv_recto">
                            </div>
                            <div class="col-75-m">
                                <label for="cv_verso">Verso</label><br>
                                <input type="file" id="cv_verso" name="cv_verso">
                            </div>
                        </div>
                    </div>
                     <!-- pour le cni -->
                     <div>
                        <h4>CNI / Passeport</h4><hr>
                        <div class="row">
                            <div class="col-75-m">
                                <label for="cni_recto">Recto</label><br>
                                <input type="file" id="cni_recto" name="cni_recto">
                            </div>
                            <div class="col-75-m">
                                <label for="cni_verso">Verso</label><br>
                                <input type="file" id="cni_verso" name="cni_verso">
                            </div>
                        </div>
                    </div><br>
                    <!-- En cas d'urgence cocher  -->
                    <div id="urgence">
                        <input type="checkbox" onclick="billett()">&nbsp;&nbsp;
                        <label for="">Cocher en cas d'urgence ( optionnel )</label>

                        <span class="billet" id="divCacher" style="display: none;">
                            <label for="billet">Billet d'avion / VISA / Autres</label><br>
                            <input type="file" id="billet" name="billet"><br>
                        </span>
                    </div><br><br>
                    <div class="row">
                        <input type="submit" value="Envoyer">
                    </div>
                    
                </form>
            </div>
        </div>
    </main>

    <script>
        function billett() { 
            var span = document.getElementById("divCacher");
            if (span.style.display === "none"){
                span.style.display = "block";
            } else {
                span.style.display = "none";
            }
        }
    </script>
@endsection