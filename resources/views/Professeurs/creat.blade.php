@extends('layouts.app')

@section('content')
<div class="row" style="width:600px;">
 <div class="col-md-12">
   <h4><font color="orange"><b> Ajouter un Professeurs </b></font></h4>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('professeurs.store') }}">
          @csrf
		  
		<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom"/>
					</div>
					<div class="form-group">
						<label for="prénom">Prénom:</label>
						<input type="text" class="form-control" name="prénom"/>
					</div>
			</div>
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="CIN">CIN:</label>
					<input type="text" class="form-control" name="CIN"/>
				</div>
				<div class="form-group">
					<label for="diplôme">Diplôme:</label>
					<input type="text" class="form-control" name="diplôme"/>
				</div>  
                <div class="form-group">
					<label for="adresse">Adresse:</label>
					<input type="text" class="form-control" name="adresse"/>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				          <button type="submit" class="btn btn-primary">Ajouter le Professeur</button>
				</div>
			</div>
		</div>

      </form>
  </div>
</div>
</div>
@endsection