@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4><font color="orange"><b>Gestion des Spécialités</b></font></h4> 
</div>
<div class="col-md-12">
		<a style="margin: 19px;" href="{{ route('spécialités.create')}}" class="btn btn-primary"><b>Ajouter une nouvelle spécialité </b></a>
</div> 
<div class="col-md-12">
<div style="display:block;position:relative;height:300px;overflow:auto;"> 	
	<table class="table table-hover table-condensed " >
    <thead>
        <tr>
		  <th style="background-color:orange;"><font color="white"><b>ID spécialité</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Nom </b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Date pub jort</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Nombre d'inscription</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Type</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Charge hebdo totale</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Charge hebdo téorie</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Charge hebdo pratique</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Année</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Niveau</b></font></th>
      <th style="background-color:orange;text-align:center;" colspan="4"><font color="white"><b>Actions</b></font></th>

        </tr>
    </thead>

    <tbody>
        @foreach($Spécialités as $Spécialité)
        <tr>
            <td style="vertical-align:middle;">{{$spécialité->id}}</td>
			<td style="vertical-align:middle;">{{$spécialité->nom}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Date pub jort}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Nombre d'inscription}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Type}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Charge hebdo totale}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Charge hebdo téorie}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Charge hebdo pratique}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Année}}</td>
            <td style="vertical-align:middle;">{{$spécialité->Niveau}}</td>

			<td colspan="2">
			</td>
            <td>
                <a href="{{ route('spécialités.edit',$spécialité->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('spécialités.destroy', $spécialité->id)}}" method="post">
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