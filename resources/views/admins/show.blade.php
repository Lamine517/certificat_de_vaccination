@extends('layouts.admin')

<div class="wrapper" style="height:1000px">

    @section('content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <!-- <h1>Bienvenue</h1> -->
            <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Vous etes connecte en tant que administrateur') }} -->
                    <br><br>
                    <div class="row">
                        <table class="table striped">
                            <!-- <div class="row"> -->
                                <thead>
                                        <tr>
                                            <th scope="col">Numero:</th>
                                            <td>12</td>
                                            <th scope="col">Prenom:</th>
                                            <td>{{ $passe_sanitaire->prenom }} Lamine</td>
                                            <th scope="col">Nom:</th>
                                            <td>Dieme</td>
                                            <th scope="col">Telephone:</th>
                                            <td>+221 78 183 73 70</td>
                                        </tr>
                                </thead>
                        </table>
                    </div>
                    <!--  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-8 ">
                                    <!-- les images -->
                    <!-- <div class="col-9"> -->
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="">Carte de vaccination Recto</label>
                                <img src="{{ asset('img/cv_recto.jpeg') }}" alt="pas d'images" width="100%" >
                            </div>
                            <div class="col">
                                <label for="">Carte de vaccination Verso</label>
                                <img src="{{ asset('img/cv_recto.jpeg') }}" alt="pas d'images" width="100%" >
                            </div> 
                        </div>

                        <div class="row row-cols-3">
                            <div class="col">
                                <label for="">CNI/Passeport Recto</label>
                                <a href="#">
                                    <img src="{{ asset('img/cni_recto.jpeg') }}" alt="pas d'images" width="100%">
                                </a>
                            </div>
                            <div class="col">
                                <label for="">CNI/Passeport Verso</label>
                                <img src="{{ asset('img/cni_verso.jpeg') }}" alt="pas d'images" width="100%" >
                            </div>
                        </div>

                        <div class="row row-cols-4">
                            <div class="col-6">
                                <label for="">Billet / VISA / Autres</label>
                                <img src="{{ asset('img/billet.jpeg') }}" alt="pas d'images" width="100%" >
                            </div>
                        </div>
                    <!-- </div> -->
                    </div>
                            <div class="col-4 bg-lights">
                            <form>
                                <br>
                                    <div class="border border-5"></div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Heure</label>
                                            <input type="time" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <br>
                                            <label>Choisissez le mode d'envoi</label>
                                            <div class="row">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="envoi" id="sms" value="sms" class="custom-control-input">
                                                <label for="sms" class="custom-control-label">Par SMS</label>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="custom-control custom-radio">
                                                <input type="radio" name="envoi" id="email" value="email" class="custom-control-input">
                                                <label for="email" class="custom-control-label">Par Email</label>
                                            </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Observations</label>
                                            <textarea name="" id="" cols="90" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col">
                                            <label for=""></label><br>
                                            <button type="submit" class="btn btn-primary">Valider</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                            <button type="reset" class="btn btn-danger">Annuler</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>

@endsection

