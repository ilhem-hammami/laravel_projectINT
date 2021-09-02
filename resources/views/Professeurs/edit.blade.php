@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
		<div style="width:800px;">
    <h4> <font color="orange"> <b>Modification d'un professeur </b></font></h4>
		</div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
		<div class="row">
			    <div class="col-12">
        <form name="professeur" method="post" action="{{ route('professeurs.update', $Professeur->id) }}">
            @method('PATCH') 
            @csrf
			
			<div class="card">
			
			<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom" value="{{ $Professeur->nom }}"/>
					</div>
					<div class="form-group">
						<label for="prénom">Prénom:</label>
						<input type="text" class="form-control" name="prénom" value="{{ $Professeur->prénom }}"/>
					</div>  

			</div>
			<div class="col-md-6 ">

				<div class="form-group">
					<label for="CIN">CIN:</label>
					<input type="number" class="form-control" name="CIN"  value="{{ $Professeur->coef }}"/>
				</div>
                <div class="form-group">
					<label for="diplôme">Diplômes:</label>
					<input type="text" class="form-control" name="diplôme"  value="{{ $Professeur->diplôme }}"/>
				</div>
		      <div class="form-group">
					<label for="adresse">Adresse:</label>
					<input type="text" class="form-control" name="adresse"  value="{{ $Professeur->adresse }}"/>
				</div>
                	
				<div class="form-group">
						<label for="num_tél">Num tél:</label>
						<table><tr><td><input type="text" class="form-control" name="num_tél" value="{{ $Professeur->semestre }}"/></td><td>&nbsp;</td><td>
						<button type="submit" class="btn btn-primary">Modification du Module</button></td></tr></table>
				</div>
		
		
		
		
		
			</div>
		</div>
	
</div>
        </form>
		</div>
		</div>

@endsection