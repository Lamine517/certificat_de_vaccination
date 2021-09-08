@extends('layouts.admin')

<div class="wrapper">

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
                                            <td>SEN-1234-56577</td>
                                            <th scope="col">Prenom:</th>
                                            <td>{{ $passe_sanitaire->prenom }}</td>
                                            <th scope="col">Nom:</th>
                                            <td>Dieme</td>
                                            <th scope="col">Telephone:</th>
                                            <td>+221 78 183 73 70</td>
                                        </tr>
                                </thead>

                        </table>
                    </div>

                        <div class="row">
                            <table class="table table-striped border border-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Carte de vaccination Recto</th>
                                        <th scope="col">Carte de vaccination Verso</th>
                                        <th scope="col">CNI/Passeport Recto</th>
                                        <th scope="col">CNI/Passeport Verso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <div class="row">
                                            <td>
                                                <div class="col-12">
                                                    <img src="{{ asset('img/20210901231823.jpeg') }}" alt="pas d'images" width="100%">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12 border border-primary">
                                                    <img src="{{ asset('img/TELFIGMA.jpeg') }}" alt="pas d'images" width="100%" height="auto">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <img src="{{ asset('img/20210901231823.jpeg') }}" alt="pas d'images" width="100%" height="100%">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <img src="{{ asset('img/TELFIGMA.jpeg') }}" alt="pas d'images" width="100%">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-12">
                                                    <img src="{{ asset('img/TELFIGMA.jpeg') }}" alt="pas d'images" width="100%">
                                                </div>
                                            </td>
                                        </div>
                                    </tr>
                                 
                                </tbody>
                                
                               
                            </table>
            
                </div>
                    <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Infos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admins.index') }}"> Retour</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom:</strong>
                {{ $passe_sanitaire->prenom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                {{ $passe_sanitaire->nom }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone:</strong>
                {{ $passe_sanitaire->telephone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CV Recto:</strong>
                <img src="/img/{{ $passe_sanitaire->cv_recto }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CV Verso:</strong>
                <img src="/img/{{ $passe_sanitaire->cv_verso }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CNI Recto:</strong>
                <img src="/img/{{ $passe_sanitaire->cni_recto }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CNI_Verso:</strong>
                <img src="/img/{{ $passe_sanitaire->cni_verso }}" width="500px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Billet :</strong>
                <img src="/img/{{ $passe_sanitaire->billet }}" width="500px">
            </div>
        </div>
    </div> -->
                    
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>

@endsection

