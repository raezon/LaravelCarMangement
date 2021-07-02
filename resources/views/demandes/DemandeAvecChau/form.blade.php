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
    <label for="lieu_deplacement"  for="lieu_deplacement" class="control-label">{{ __('Lieu De Déplacement') }}</label>
    <input id="lieu_deplacement" type="string" class="form-control @error('lieu_deplacement') is-invalid @enderror" name="lieu_deplacement" value="{{ isset($demandesanschau->lieu_deplacement) ? $demandesanschau->lieu_deplacement : ''}}" required autocompnum_référencete="lieu_deplacement" >
    @error('lieu_deplacement')
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
    <label for="date_depart"  for="date_depart" class="control-label">{{ __('Date De Départ') }}</label>
    <input id="date_depart" type="Date" class="form-control @error('date_depart') is-invalid @enderror" name="date_depart" value="{{ isset($demandesanschau->date_depart) ? $demandesanschau->date_depart : ''}}" required autocompnum_référencete="date_depart"  >
    @error('date_depart')
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

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>


