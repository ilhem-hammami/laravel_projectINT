@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
		<div style="width:800px;">
    <h4> <font color="orange"> <b>Modification d'un Module </b></font></h4>
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
        <form name="ffournisseur" method="post" action="{{ route('Modules.update', $Module->id) }}">
            @method('PATCH') 
            @csrf
			
			<div class="card">
			
			<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom" value="{{ $Module->nom }}"/>
					</div>
					<div class="form-group">
						<label for="niveau">Niveau:</label>
						<input type="text" class="form-control" name="ville" value="{{ $Module->niveau }}"/>
					</div>  

			</div>
			<div class="col-md-6 ">

				<div class="form-group">
					<label for="coef">Coefficient:</label>
					<input type="text" class="form-control" name="adresse"  value="{{ $Module->coef }}"/>
				</div>
                <div class="form-group">
					<label for="cours">Cours:</label>
					<input type="text" class="form-control" name="adresse"  value="{{ $Module->cours }}"/>
				</div>
		
		
				<div class="form-group">
						<label for="semestre">Semestre:</label>
						<table><tr><td><input type="text" class="form-control" name="tel" value="{{ $Module->semestre }}"/></td><td>&nbsp;</td><td>
						<button type="submit" class="btn btn-primary">Modification du Module</button></td></tr></table>
				</div>
		
		
		
		
		
			</div>
		</div>
	
</div>
        </form>
		</div>
		</div>

@endsection