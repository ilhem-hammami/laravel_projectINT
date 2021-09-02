@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4><font color="orange"><b>Gestion des Modules</b></font></h4> 
</div>
<div class="col-md-12">
		<a style="margin: 19px;" href="{{ route('fournisseurs.create')}}" class="btn btn-primary"><b>Ajouter un nouveau Module</b></a>
</div> 
<div class="col-md-12">
<div style="display:block;position:relative;height:300px;overflow:auto;"> 	
	<table class="table table-hover table-condensed " >
    <thead>
        <tr>
		  <th style="background-color:orange;"><font color="white"><b>ID Module</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Nom</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Niveau</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Coefficient</b></font></th>
		  <th style="background-color:orange;"><font color="white"><b>Semestre</b></font></th>
          <th style="background-color:orange;"><font color="white"><b>Cours</b></font></th>
      <th style="background-color:orange;text-align:center;" colspan="4"><font color="white"><b>Actions</b></font></th>

        </tr>
    </thead>

    <tbody>
        @foreach($fournisseurs as $fournisseur)
        <tr>
            <td style="vertical-align:middle;">{{$Module->id}}</td>
			<td style="vertical-align:middle;">{{$Module->nom}}</td>
            <td style="vertical-align:middle;">{{$Module->niveau}}</td>
            <td style="vertical-align:middle;">{{$Module->coefficient}}</td>
            <td style="vertical-align:middle;">{{$Module->semestre}}</td>
            <td style="vertical-align:middle;">{{$Module->cours}}</td>

			<td colspan="2">
			</td>
            <td>
                <a href="{{ route('modules.edit',$module->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('modules.destroy', $module->id)}}" method="post">
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