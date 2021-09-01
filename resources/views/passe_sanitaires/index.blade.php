@extends('passe_sanitaires.layout')

@section('content')
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>CV Recto</th>
            <th>CV Verso</th>
            <th>CNI Recto</th>
            <th>CNI Verso</th>
            <th>Billet</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($passe_sanitaires as $pass)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/img/{{ $pass->cv_recto }}" width="100px"></td>
            <td><img src="/img/{{ $pass->cv_verso }}" width="100px"></td>
            <td><img src="/img/{{ $pass->cni_recto }}" width="100px"></td>
            <td><img src="/img/{{ $pass->cni_verso }}" width="100px"></td>
            <td><img src="/img/{{ $pass->billet }}" width="100px"></td>
            <td>{{ $pass->prenom }}</td>
            <td>{{ $pass->nom }}</td>
            <td>
                <form action="{{ route('passe_sanitaires.destroy',$pass->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('passe_sanitaires.show',$pass->id) }}">Show</a>
      
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection