


<div  >
    <label for="immatriculation"  for="immatriculation" class="control-label">{{ __('Immatriculation') }}</label>
                                <input id="immatriculation" type="string" class="form-control @error('immatriculation') is-invalid @enderror" name="immatriculation" value="{{ isset($voitures->mmatriculation) ? $voitures->immatriculation : ''}}" required autocomplete="immatriculation" >
                                @error('immatriculation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   <div >
    <label for="type"  for="type" class="control-label">{{ __('Type') }}</label>
                                <input id="type" type="string" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ isset($voitures->type) ? $voitures->type : ''}}" required autocomplete="type" >
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
   </div>
   <div >
    <label for="marque"  for="marque" class="control-label">{{ __('marque') }}</label>
                                <input id="marque" type="string" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ isset($voitures->marque) ? $voitures->marque : ''}}" required autocomplete="marque" >
                                @error('marque')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
   </div>
   <div  class="form-group ">
    <label for="numero_assurance"  for="numero_assurance" class="control-label">{{ __('numero_assurance') }}</label>
                                <input id="numero_assurance" type="string" class="form-control @error('numero_assurance') is-invalid @enderror" name="numero_assurance" value="{{ isset($voitures->numero_assurance) ? $voitures->numero_assurance : ''}}" required autocomplete="numero_assurance" >
                                @error('numero_assurance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
    <label for="modele"  for="modele" class="control-label">{{ __('modele') }}</label>
                                <input id="modele" type="string" class="form-control @error('modele') is-invalid @enderror" name="modele" value="{{ isset($voitures->modele) ? $voitures->modele : ''}}" required autocomplete="modele" >
                                @error('modele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
 <div  class="form-group ">
    <label for="couleur"  for="couleur" class="control-label">{{ __('couleur') }}</label>
                                <input id="couleur" type="string" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ isset($voitures->couleur) ? $voitures->couleur : ''}}" required autocomplete="couleur" >
                                @error('couleur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>
   
   <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
