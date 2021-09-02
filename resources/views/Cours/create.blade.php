@extends('layouts.app')

@section('content')
<div class="row" style="width:600px;">
 <div class="col-md-12">
   <h4><font color="orange"><b> Ajouter un Cours </b></font></h4>
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
      <form method="post" action="{{ route('cours.store') }}">
          @csrf
		  
		<div class="row">
			<div class="col-md-6 ">
					<div class="form-group">
						<label for="nom">Nom:</label>
						<input type="text" class="form-control" name="nom"/>
					</div>
					<div class="form-group">
						<label for="masse horaire">Masse horaire:</label>
						<input type="text" class="form-control" name="masse horaire"/>
					</div>
			</div>
			<div class="col-md-6 ">
				<div class="form-group">
					<label for="type">Type:</label>
					<input type="text" class="form-control" name="type"/>
				</div>
				<div class="form-group">
					<label for="date">date:</label>
					<input type="date" class="form-control" name="date"/>
				</div>  
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				          <button type="submit" class="btn btn-primary">Ajouter un cours</button>
				</div>
			</div>
		</div>

      </form>
  </div>
</div>
</div>
@endsection