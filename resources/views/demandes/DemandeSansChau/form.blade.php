<div class="form-group ">
   <label  for="num_référence" class="control-label">{{ __('Numero De Référence') }}</label>
    <input id="num_référence" type="string" class="form-control @error('num_référence') is-invalid @enderror" name="num_référence" value="{{ isset($demandesanschau->num_référence) ? $demandesanschau->num_référence : ''}}" required autocompnum_référencete="num_référence" >
    @error('num_référence')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="nom"  class="control-label">{{ __('Nom') }}</label>
    <input id="nom" type="string" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ isset($demandesanschau->nom) ? $demandesanschau->nom : ''}}"  required autocompnum_référencete="nom" >
    @error('nom')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror  
</div>

<div  class="form-group ">
    <label for="prenom"  for="prenom" class="control-label">{{ __('Prénom') }}</label>
    <input id="prenom" type="string" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ isset($demandesanschau->prenom) ? $demandesanschau->prenom : ''}}" required autocompnum_référencete="prenom" >
    @error('prenom')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror                               
</div>

<div  class="form-group ">
    <label for="grade"  for="grade" class="control-label">{{ __('Grade') }}</label>
    <input id="grade" type="string" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ isset($demandesanschau->grade) ? $demandesanschau->grade : ''}}" required autocompnum_référencete="grade" >
    @error('grade')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
   @enderror
</div>

<div  class="form-group ">
    <label for="direction_attache"  for="direction_attache" class="control-label">{{ __('Direction Dattache') }}</label>
    <input id="direction_attache" type="string" class="form-control @error('direction_attache') is-invalid @enderror" name="direction_attache" value="{{ isset($demandesanschau->direction_attache) ? $demandesanschau->direction_attache : ''}}" required autocompnum_référencete="direction_attache" >
    @error('direction_attache')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="lieu_demplacement"  for="lieu_demplacement" class="control-label">{{ __('Lieu De Déplacement') }}</label>
    <input id="lieu_demplacement" type="string" class="form-control @error('lieu_demplacement') is-invalid @enderror" name="lieu_demplacement" value="{{ isset($demandesanschau->lieu_demplacement) ? $demandesanschau->lieu_demplacement : ''}}" required autocompnum_référencete="lieu_demplacement" >
    @error('lieu_demplacement')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
   <label for="date"  for="date" class="control-label">{{ __('Date') }}</label>
    <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ isset($demandesanschau->date) ? $demandesanschau->date : ''}}" required autocompnum_référencete="date"  >
    @error('date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="heure_depart"  for="heure_depart" class="control-label">{{ __('Heure De Départ') }}</label>
    <input id="heure_depart" type="Time" class="form-control @error('heure_depart') is-invalid @enderror" name="heure_depart" value="{{ isset($demandesanschau->heure_depart) ? $demandesanschau->heure_depart : ''}}" required autocompnum_référencete="heure_depart"  >
    @error('heure_depart')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="motif"  for="motif" class="control-label">{{ __('Motif') }}</label>
    <input id="motif" type="string" class="form-control @error('motif') is-invalid @enderror" name="motif" value="{{ isset($demandesanschau->motif) ? $demandesanschau->motif : ''}}" required autocompnum_référencete="motif"  >
    @error('motif')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
                </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="N_serie"  for="N_serie" class="control-label">{{ __('N° serie') }}</label>
    <input id="N_serie" type="string" class="form-control @error('N_serie') is-invalid @enderror" name="N_serie" value="{{ isset($demandesanschau->N_serie) ? $demandesanschau->N_serie : ''}}" required autocompnum_référencete="N_serie" >
    @error('N_serie')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="type"  for="type" class="control-label">{{ __('Type') }}</label>
    <input id="type" type="string" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ isset($demandesanschau->type) ? $demandesanschau->type : ''}}"  required autocompnum_référencete="type">
    @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
   
<div  class="form-group ">
    <label for="marque"  for="marque" class="control-label">{{ __('Marque') }}</label>
    <input id="marque" type="string" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ isset($demandesanschau->marque) ? $demandesanschau->marque : ''}}" required autocompnum_référencete="marque"  >
    @error('marque')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="état_Véhicule"  for="état_Véhicule" class="control-label">{{ __('Etat De Véhicule') }}</label>
    <input id="état_Véhicule" type="String" class="form-control @error('état_Véhicule') is-invalid @enderror" name="état_Véhicule" value="{{ isset($demandesanschau->état_Véhicule) ? $demandesanschau->état_Véhicule : ''}}" required autocompnum_référencete="état_Véhicule" >
    @error('état_Véhicule')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
   
<div  class="form-group ">
    <label for="date_remise_véhicule"  for="date_remise_véhicule" class="control-label">{{ __('Date De Remise Du Véhicule') }}</label>
    <input id="date_remise_véhicule" type="date" class="form-control @error('date_remise_véhicule') is-invalid @enderror" name="date_remise_véhicule" value="{{ isset($demandesanschau->date_remise_véhicule) ? $demandesanschau->date_remise_véhicule : ''}}" required autocompnum_référencete="date_remise_véhicule" >
    @error('date_remise_véhicule')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
   
<div  class="form-group ">
    <label for="service_demandeur"  for="service_demandeur" class="control-label">{{ __('Service Demandeur') }}</label>
    <input id="service_demandeur" type="string" class="form-control @error('service_demandeur') is-invalid @enderror" name="service_demandeur" value="{{ isset($demandesanschau->service_demandeur) ? $demandesanschau->service_demandeur : ''}}"  required autocompnum_référencete="service_demandeur">
    @error('service_demandeur')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div  class="form-group ">
    <label for="service_demandeur"  for="sructure_donatrice" class="control-label">{{ __('Sructure Donatrice') }}</label>
    <input id="sructure_donatrice" type="string" class="form-control @error('sructure_donatrice') is-invalid @enderror" name="sructure_donatrice" value="{{ isset($demandesanschau->sructure_donatrice) ? $demandesanschau->sructure_donatrice : ''}}"   required autocompnum_référencete="sructure_donatrice" >
    @error('sructure_donatrice')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
   
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>


