
<div class="form-group ">
   <label for="num_dot"  for="num_dot" class="control-label">{{ __('Numéro De Dotation') }}</label>
                                  <input id="num_dot" type="string" class="form-control @error('num_dot') is-invalid @enderror" name="num_dot" value="{{ isset($demande_de_dotation_en_carburants->num_dot) ? $demande_de_dotation_en_carburants->num_dot : ''}}" required autocomplete="num_dot" >
                                  @error('num_dot')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
<div class="form-group ">
   <label for="division"  for="division" class="control-label">{{ __('Division') }}</label>
                                  <input id="division" type="string" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ isset($demande_de_dotation_en_carburants->division) ? $demande_de_dotation_en_carburants->division : ''}}" required autocomplete="division" >
                                  @error('division')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 
<div class="form-group ">
   <label for="direction"  for="direction" class="control-label">{{ __('Direction') }}</label>
                                  <input id="direction" type="string" class="form-control @error('direction') is-invalid @enderror" name="direction" value="{{ isset($demande_de_dotation_en_carburants->direction) ? $demande_de_dotation_en_carburants->direction : ''}}" required autocomplete="direction" >
                                  @error('direction')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 <div class="form-group ">
   <label for="réf"  for="réf" class="control-label">{{ __('Référence') }}</label>
                                  <input id="réf" type="String" class="form-control @error('réf') is-invalid @enderror" name="réf" value="{{ isset($demande_de_dotation_en_carburants->réf) ? $demande_de_dotation_en_carburants->réf : ''}}" required autocomplete="réf" >
                                  @error('réf')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

 <div class="form-group ">
   <label for="lieu"  for="lieu" class="control-label">{{ __('Lieu') }}</label>

                               
         <select id="lieu" type="string" class="textfield @error('lieu') is-invalid @enderror" name="lieu" value="{{ isset($demande_de_dotation_en_carburants->lieu) ? $demande_de_dotation_en_carburants->lieu : ''}}" required autocomplete="lieu">
            <option value>&nbsp;</option>
            <option value= 'alger' > alger </option>
           </select>
 </div>


 <div class="form-group ">
   <label for="date_jour"   class="control-label">{{ __("Date d'aujourd'hui") }}</label>
                                  <input id="date_jour" type="date" class="form-control @error('date_jour') is-invalid @enderror" name="date_jour" value="{{ isset($demande_de_dotation_en_carburants->date_jour) ? $demande_de_dotation_en_carburants->date_jour : ''}}" required autocomplete="date_jour" >
                                  @error("Date d'aujourd'hui")
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

<br>
<h5>DEMANDE DE DOTATION EN CARBURANT:</h5>

<br>
<div class="form-group ">
   <label for="date_etab_dmnd"  for="date_etab_dmnd" class="control-label">{{ __('Date Détablissemnt De La Demande') }}</label>
                                  <input id="date_etab_dmnd" type="date" class="form-control @error('date_etab_dmnd') is-invalid @enderror" name="date_etab_dmnd" value="{{ isset($demande_de_dotation_en_carburants->date_etab_dmnd) ? $demande_de_dotation_en_carburants->date_etab_dmnd : ''}}" required autocomplete="date_etab_dmnd" >
                                  @error('Date Etablissemnt De La Demande')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
</div>

 <div class="form-group ">
   <label for="date_dernier_app"  for="date_dernier_app" class="control-label">{{ __('Demande De Dotation En Carburants') }}</label>
                                  <input id="date_dernier_app" type="date" class="form-control @error('date_dernier_app') is-invalid @enderror" name="date_dernier_app" value="{{ isset($demande_de_dotation_en_carburants->demande_de_dotation_en_carburants) ? $demande_de_dotation_en_carburants->date_dernier_app : ''}}" required autocomplete="date_dernier_app" >
                                  @error('Date Du Dernier Approvisionnement En Carburant')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 <div class="form-group ">
   <label for="km_par" class="control-label">{{ __('Kilométrage Parcouru') }}</label>
                                  <input id="km_par" type="string" class="form-control @error('km_par') is-invalid @enderror" name="km_par" value="{{ isset($demande_de_dotation_en_carburants->km_par) ? $demande_de_dotation_en_carburants->km_par : ''}}" required autocomplete="km_par" >
                                  @error('Kilométrage Parcouru')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 <div class="form-group ">
   <label for="index"   class="control-label">{{ __('Index') }}</label>
                                  <input id="index" type="string" class="form-control @error('index') is-invalid @enderror" name="index" value="{{ isset($demande_de_dotation_en_carburants->index) ? $demande_de_dotation_en_carburants->index : ''}}" required autocomplete="index" >
                                  @error('index')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 <div class="form-group ">
   <label for="date"  for="date" class="control-label">{{ __('Date') }}</label>
                                  <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ isset($demande_de_dotation_en_carburants->date) ? $demande_de_dotation_en_carburants->date : ''}}" required autocomplete="date" >
                                  @error('date')
                                  <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
<br>
<br>
<h5>Je vous prie de bien vouloir affecter une dotation en carburant:</h5>

<br>
<div class="form-group ">
   <label for="nbr_bon"  for="nbr_bon" class="control-label">{{ __('Nombre De Bon') }}</label>
                                  <input id="nbr_bon" type="String" class="form-control @error('nbr_bon') is-invalid @enderror" name="nbr_bon" value="{{ isset($demande_de_dotation_en_carburants->nbr_bon) ? $demande_de_dotation_en_carburants->nbr_bon : ''}}" required autocomplete="nbr_bon" >
                                  @error('Nombre De Bon')
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

 <div class="form-group ">
   <label for="nom"  for="nom" class="control-label">{{ __('Nom') }}</label>
                                  <input id="nom" type="string" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ isset($demande_de_dotation_en_carburants->nom) ? $demande_de_dotation_en_carburants->nom : ''}}" required autocomplete="nom" >
                                  @error('Nom')
                                  <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>


 <div class="form-group ">
   <label for="prenom"  for="prenom" class="control-label">{{ __('Prenom') }}</label>
                                  <input id="prenom" type="string" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ isset($demande_de_dotation_en_carburants->prenom) ? $demande_de_dotation_en_carburants->prenom : ''}}" required autocomplete="prenom" >
                                  @error('Prenom')
                                  <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

 <div class="form-group ">
   <label for="fonction"  for="fonction" class="control-label">{{ __('Fonction') }}</label>
                                  <input id="fonction" type="string" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ isset($demande_de_dotation_en_carburants->fonction) ? $demande_de_dotation_en_carburants->fonction : ''}}" required autocomplete="fonction" >
                                  @error('fonction')
                                  <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>
 <div class="form-group ">
   <label for="strctr_attache"  for="strctr_attache" class="control-label">{{ __('Structure Dattache') }}</label>
                                  <input id="strctr_attache" type="string" class="form-control @error('strctr_attache') is-invalid @enderror" name="strctr_attache" value="{{ isset($demande_de_dotation_en_carburants->strctr_attache) ? $demande_de_dotation_en_carburants->strctr_attache : ''}}" required autocomplete="strctr_attache" >
                                  @error('Structure Dattache')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                            @enderror  
                               
 </div>

<br>
 <div class="form-group ">


   <label for="type_de_véhicule"  for="type_de_véhicule" class="control-label">{{ __('Type De Véhicule') }}</label>

                               
         <select id="type_de_véhicule" type="string" class="textfield @error('type_de_véhicule') is-invalid @enderror" name="type_de_véhicule" value="{{ isset($demande_de_dotation_en_carburants->type_de_véhicule) ? $demande_de_dotation_en_carburants->type_de_véhicule : ''}}" required autocomplete="type_de_véhicule">
            <option value>&nbsp;</option>
            <option value= 'Véhicule De Service "Essence"' > Véhicule De Service "Essence"  </option>
            <option value= 'Véhicule De Service "Diesel"'>   Véhicule De Service "Diesel"   </option>
            <option value= 'Véhicule De Fonction "Essence"'> Véhicule De Fonction "Essence" </option>
            <option value= 'Véhicule De Fonction "Diesel"'>  Véhicule De Fonction "Diesel"  </option>
             
        </select>
                              
 </div>
 <br>

 <div class="form-group ">
   <label for="N_serie"  for="N_serie" class="control-label">{{ __('N° serie') }}</label>
                                  <input id="N_serie" type="string" class="form-control @error('N_serie') is-invalid @enderror" name="N_serie" value="{{ isset($demande_de_dotation_en_carburants->N_serie) ? $demande_de_dotation_en_carburants->N_serie : ''}}" required autocomplete="N_serie" >
                                  @error('N° serie')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

 <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>

