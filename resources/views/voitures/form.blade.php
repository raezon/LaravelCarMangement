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
    <label for="ancienne_immat"  for="ancienne_immat" class="control-label">{{ __('ancienne_immat') }}</label>
                                <input id="ancienne_immat" type="string" class="form-control @error('ancienne_immat') is-invalid @enderror" name="ancienne_immat" value="{{ isset($voitures->mmatriculation) ? $voitures->ancienne_immat : ''}}" required autocomplete="ancienne_immat" >
                                @error('ancienne_immat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   <div  >
    <label for="nouvelle_immat"  for="nouvelle_immat" class="control-label">{{ __('nouvelle_immat') }}</label>
                                <input id="nouvelle_immat" type="string" class="form-control @error('nouvelle_immat') is-invalid @enderror" name="nouvelle_immat" value="{{ isset($voitures->mmatriculation) ? $voitures->nouvelle_immat : ''}}" required autocomplete="nouvelle_immat" >
                                @error('nouvelle_immat')
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


   <br>
 <div class="form-group ">


   <label for="Energie"  class="control-label">{{ __('Energie') }}</label>

                               
         <select id="Energie" type="string" class="textfield @error('Energie') is-invalid @enderror" name="Energie" value="{{ isset($employes->Energie) ? $employes->Energie : ''}}" required autocomplete="Energie">
            <option value>&nbsp;</option>
            <option value="ESS" >Essence</option>
            <option value="DIESEL" >Diesel</option>
            <option value="GPLc" >GPLc</option>       
          </select>  
                              
 </div>
 <br>

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
   <br>
 <div class="form-group ">
   <label for="Genre"  class="control-label">{{ __('Genre') }}</label>                        
         <select id="Genre" type="string" class="textfield @error('Genre') is-invalid @enderror" name="Genre" value="{{ isset($employes->Genre) ? $employes->Genre : ''}}" required autocomplete="Genre">
            <option value>&nbsp;</option>
            <option value="UTILITAIRE" >Utilitaire</option>
            <option value="TOURISTIQUE" >Touristique</option>     
          </select>    
 </div>
 <br>
 <div  class="form-group ">
    <label for="nbr_plc"  for="nbr_plc" class="control-label">{{ __('nbr_plc') }}</label>
                                <input id="nbr_plc" type="string" class="form-control @error('nbr_plc') is-invalid @enderror" name="nbr_plc" value="{{ isset($voitures->nbr_plc) ? $voitures->nbr_plc : ''}}" required autocomplete="nbr_plc" >
                                @error('nbr_plc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>
   <div  class="form-group ">
    <label for="nbr_chv"  for="nbr_chv" class="control-label">{{ __('nbr_chv') }}</label>
                                <input id="nbr_chv" type="string" class="form-control @error('nbr_chv') is-invalid @enderror" name="nbr_chv" value="{{ isset($voitures->nbr_chv) ? $voitures->nbr_chv : ''}}" required autocomplete="nbr_chv" >
                                @error('nbr_chv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>
   <div  class="form-group ">
    <label for="tonnage"  for="tonnage" class="control-label">{{ __('tonnage') }}</label>
                                <input id="tonnage" type="string" class="form-control @error('tonnage') is-invalid @enderror" name="tonnage" value="{{ isset($voitures->tonnage) ? $voitures->tonnage : ''}}" required autocomplete="tonnage" >
                                @error('tonnage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>
   <div  class="form-group ">
    <label for="dmc"  for="dmc" class="control-label">{{ __('dmc') }}</label>
                                <input id="dmc" type="Date" class="form-control @error('dmc') is-invalid @enderror" name="dmc" value="{{ isset($voitures->dmc) ? $voitures->dmc : ''}}" required autocomplete="dmc" >
                                @error('dmc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                   
   </div>

   <br>
 <div class="form-group ">
   <label for="etat"  class="control-label">{{ __('Etat') }}</label>                        
         <select id="etat" type="string" class="textfield @error('etat') is-invalid @enderror" name="etat" value="{{ isset($employes->etat) ? $employes->etat : ''}}" required autocomplete="etat">
            <option value>&nbsp;</option>
            <option value="En Exploitation" >En Exploitation</option>
            <option value="A larrêt" >A l'arrêt</option>     
          </select>    
 </div>
 <br>

 <br>
 <div class="form-group ">
   <label for="qualité"  class="control-label">{{ __('Permis De Conduire') }}</label>                        
         <select id="qualité" type="string" class="textfield @error('qualité') is-invalid @enderror" name="qualité" value="{{ isset($employes->qualité) ? $employes->qualité : ''}}" required autocomplete="qualité">
            <option value>&nbsp;</option>
            <option value="Bon" >Bon</option>
            <option value="Moyen" >Moyen</option>
            <option value="Mauvais" >Mauvais</option>     
          </select>    
 </div>
 <br>

   <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
