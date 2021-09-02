@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4><font color="orange"><b>Gestion des Professeurs</b></font></h4> 
</div>
<div class="col-md-12">
		<a style="margin: 19px;" href="{{ route('professeurs.create')}}" class="btn btn-primary"><b>Ajouter un nouveau Professeur</b></a>
</div> 
<div class="col-md-12">
<div style="display:block;position:relative;height:300px;overflow:auto;"> 	
	<table class="table table-hover table-condensed " >
    <thead>
        <tr>
		  <th style="background-color:orange;"><font color="white"><b>ID Professeur</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Nom</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Prénom</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>CIN</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Diplôme</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Adresse</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Num tél</b></font></th>

      <th style="background-color:orange;text-align:center;" colspan="4"><font color="white"><b>Actions</b></font></th>

        </tr>
    </thead>

    <tbody>
        @foreach($Profisseurs as $Profisseur)
        <tr>
            <td style="vertical-align:middle;">{{$Profisseur->id}}</td>
			<td style="vertical-align:middle;">{{$Profisseur->nom}}</td>
            <td style="vertical-align:middle;">{{$Profisseur->prénom}}</td>
            <td style="vertical-align:middle;">{{$Profisseur->CIN}}</td>
            <td style="vertical-align:middle;">{{$Profisseur->diplôme}}</td>
            <td style="vertical-align:middle;">{{$Profisseur->adresse}}</td>
            <td style="vertical-align:middle;">{{$Profisseur->num tél}}</td>


			<td colspan="2">
			</td>
            <td>
                <a href="{{ route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('professeurs.destroy', $professeur->id)}}" method="post">
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