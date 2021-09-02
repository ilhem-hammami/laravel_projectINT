@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
		<div style="width:800px;">
    <h4> <font color="orange"> <b> Modification d'une spécialité </b></font></h4>
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
        <form name="spécialité" method="post" action="{{ route('spécialités.update', $spécialité->id) }}">
            @method('PATCH') 
            @csrf
			
			<div class="card">
			
			<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom" value="{{ $spécialité->nom }}"/>
					</div>
					<div class="form-group">
						<label for="date">Date pub jort:</label>
						<input type="date" class="form-control" name="date" value="{{ $spécialité->prénom }}"/>
					</div>  

			</div>
			<div class="col-md-6 ">

		                <div class="form-group">
					<label for="nbr_inscrit">Nombre d'inscription:</label>
					<input type="text" class="form-control" name="diplôme"  value="{{ $spécialité->nbr_inscrit }}"/>
				</div>
		      <div class="form-group">
					<label for="type">Type:</label>
					<input type="text" class="form-control" name="type"  value="{{ $spécialité->type }}"/>
				</div>
                	 <div class="form-group">
					<label for="Charge_hebdo_totale">Charge hebdo totale:</label>
					<input type="text" class="form-control" name="Charge_hebdo_totale:"  value="{{ $spécialité->Charge_hebdo_totale}}"/>
				</div>

                 <div class="form-group">
					<label for="charge_hebdo_téorie">Charge hebdo téorie:</label>
					<input type="text" class="form-control" name="Charge_hebdo_téorie"  value="{{ $spécialité->charge_hebdo_téorie }}"/>
				</div>
                <div class="form-group">
					<label for="charge_hebdo_pratique">Charge pratique:</label>
					<input type="text" class="form-control" name="Charge_hebdo_pratique"  value="{{ $spécialité->charge_hebdo_pratique }}"/>
				</div>
                <div class="form-group">
					<label for="niveau">Niveau:</label>
					<input type="text" class="form-control" name="niveau"  value="{{ $spécialité->niveau }}"/>
				</div>

				<div class="form-group">
						<label for="année:">Année:</label>
					<table><tr>
                     <td><input type="number" class="form-control" name="année" value="{{ $spécialité->année }}"/>
                    </td><td>&nbsp;</td><td>
						<button type="submit" class="btn btn-primary">Modification du spécialité</button></td></tr></table>
				</div>
		
		
		
		
		
			</div>
		</div>
	
</div>
        </form>
		</div>
		</div>

@endsection