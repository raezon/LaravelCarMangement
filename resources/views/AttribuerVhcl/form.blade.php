<div  >
    <label for="N_serie"  for="N_serie" class="control-label">{{ __('N serie') }}</label>
                                <input id="N_serie" type="string" class="form-control @error('N_serie') is-invalid @enderror" name="N_serie" value="{{ isset($voitures->mmatriculation) ? $voitures->N_serie : ''}}" required autocomplete="N_serie" >
                                @error('N_serie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

<div  >
    <label for="entité"  for="entité" class="control-label">{{ __('entité') }}</label>
                                <input id="entité" type="string" class="form-control @error('entité') is-invalid @enderror" name="entité" value="{{ isset($voitures->mmatriculation) ? $voitures->entité : ''}}" required autocomplete="entité" >
                                @error('entité')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   <div  >
    <label for="direction"  for="direction" class="control-label">{{ __('direction') }}</label>
                                <input id="direction" type="string" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ isset($voitures->mmatriculation) ? $voitures->direction : ''}}" required autocomplete="direction" >
                                @error('direction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   <div  class="form-group ">
    <label for="ser_expl"  for="ser_expl" class="control-label">{{ __('ser_expl') }}</label>
                                <input id="ser_expl" type="string" class="form-control @error('ser_expl') is-invalid @enderror" name="ser_expl" value="{{ isset($voitures->ser_expl) ? $voitures->ser_expl : ''}}" required autocomplete="ser_expl" >
                                @error('ser_expl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>


   <div >
    <label for="nom"  for="nom" class="control-label">{{ __('nom') }}</label>
                                <input id="nom" type="string" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ isset($voitures->nom) ? $voitures->nom : ''}}" required autocomplete="nom" >
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
   </div>
  

   <div  class="form-group ">
    <label for="prenom"  for="prenom" class="control-label">{{ __('prenom') }}</label>
                                <input id="prenom" type="string" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ isset($voitures->prenom) ? $voitures->prenom : ''}}" required autocomplete="prenom" >
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
 <div  class="form-group ">
    <label for="fonction"  for="fonction" class="control-label">{{ __('fonction') }}</label>
                                <input id="fonction" type="string" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ isset($voitures->fonction) ? $voitures->fonction : ''}}" required autocomplete="fonction" >
                                @error('fonction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>
   <br>   <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
