@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4><font color="orange"><b>Gestion des cours</b></font></h4> 
</div>
<div class="col-md-12">
		<a style="margin: 19px;" href="{{ route('cours.create')}}" class="btn btn-primary"><b>Ajouter un nouveau Fournisseur</b></a>
</div> 
<div class="col-md-12">
<div style="display:block;position:relative;height:300px;overflow:auto;"> 	
	<table class="table table-hover table-condensed " >
    <thead>
        <tr>
		  <th style="background-color:orange;"><font color="white"><b>ID cours</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Nom</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Masse horaire</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Type</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Date</b></font></th>
      <th style="background-color:orange;text-align:center;" colspan="4"><font color="white"><b>Actions</b></font></th>

        </tr>
    </thead>

    <tbody>
        @foreach($cours as $cours)
        <tr>
            <td style="vertical-align:middle;">{{$cours->id}}</td>
			<td style="vertical-align:middle;">{{$cours->nom}}</td>
            <td style="vertical-align:middle;">{{$cours->masse horaire}}</td>
            <td style="vertical-align:middle;">{{$cours->Type}}</td>
            <td style="vertical-align:middle;">{{$cours->date}}</td>
			<td colspan="2">
			</td>
            <td>
                <a href="{{ route('cours.edit',$cours->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('cours.destroy', $cours->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">X</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  </div>
<div>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection