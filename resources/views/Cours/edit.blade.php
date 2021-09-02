@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
		<div style="width:800px;">
    <h4><font color="orange"><b>Modification d'un cours </b></font></h4>
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
        <form name="cours" method="post" action="{{ route('cours.update', $cours->id) }}">
            @method('PATCH') 
            @csrf
			
			<div class="card">
			
			<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom" value="{{ $cours->nom }}"/>
					</div>
					<div class="form-group">
						<label for="masse horaire">Masse horaire:</label>
						<input type="text" class="form-control" name="ville" value="{{ $cours->masse horaire }}"/>
					</div>  

			</div>
			<div class="col-md-6 ">

				<div class="form-group">
					<label for="type">Type:</label>
					<input type="text" class="form-control" name="adresse"  value="{{ $cours->type }}"/>
				</div>
		
		
				<div class="form-group">
						<label for="date">Date:</label>
						<table><tr><td><input type="date" class="form-control" name="tel" value="{{ $cours->date }}"/></td><td>&nbsp;</td><td>
						<button type="submit" class="btn btn-primary">Modification du cours</button></td></tr></table>
				</div>
		
		
		
		
		
			</div>
		</div>
	
</div>
        </form>
		</div>
		</div>

@endsection