@extends('layouts.app')

@section('content')
<div class="row" style="width:600px;">
 <div class="col-md-12">
   <h4><font color="orange"><b> Ajouter un modules </b></font></h4>
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
      <form method="post" action="{{ route('fournisseurs.store') }}">
          @csrf
		  
		<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom"/>
					</div>
					<div class="form-group">
						<label for="niveau">Niveau:</label>
						<input type="text" class="form-control" name="niveau"/>
					</div>
			</div>
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="coef">Coefficient:</label>
					<input type="text" class="form-control" name="coef"/>
				</div>
				<div class="form-group">
					<label for="Semestre">Semestre:</label>
					<input type="text" class="form-control" name="semestre"/>
				</div>  
                <div class="form-group">
					<label for="cours">Cours:</label>
					<input type="text" class="form-control" name="cours"/>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				          <button type="submit" class="btn btn-primary">Ajouter le module</button>
				</div>
			</div>
		</div>

      </form>
  </div>
</div>
</div>
@endsection