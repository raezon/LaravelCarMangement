<div class="form-group ">
   <label  for="réf" class="control-label">{{ __('Référence') }}</label>
                                <input id="réf" type="string" class="form-control @error('réf') is-invalid @enderror" name="réf" value="{{ isset($RecuBonDotation->réf) ? $RecuBonDotation->réf : ''}}" required autocompnum_référencete="réf" >
                                @error('réf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                                
 </div>



 <div class="form-group ">
   <label for="lieu"  for="lieu" class="control-label">{{ __('Lieu') }}</label>

                               
         <select id="lieu" type="string" class="textfield @error('lieu') is-invalid @enderror" name="lieu" value="{{ isset($RecuBonDotation->lieu) ? $RecuBonDotation->lieu : ''}}" required autocomplete="lieu">
            <option value>&nbsp;</option>
            <option value= 'alger' > alger </option>
           </select>
 </div>


 <div class="form-group ">
   <label for="date_jour"   class="control-label">{{ __("Date d'aujourd'hui") }}</label>
                                  <input id="date_jour" type="date" class="form-control @error('date_jour') is-invalid @enderror" name="date_jour" value="{{ isset($RecuBonDotation->date_jour) ? $RecuBonDotation->date_jour : ''}}" required autocomplete="date_jour" >
                                  @error("Date d'aujourd'hui")
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror  
                                  
 </div>

   <div  class="form-group ">
    <label for="remis_le"  for="remis_le" class="control-label">{{ __('Date Remise') }}</label>
                                <input id="remis_le" type="date" class="form-control @error('remis_le') is-invalid @enderror" name="remis_le" value="{{ isset($RecuBonDotation->remis_le) ? $RecuBonDotation->remis_le : ''}}" required autocompnum_référencete="remis_le" >
                                @error('Date Remise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
    <label for="num_dot"  for="num_dot" class="control-label">{{ __('Dotation N°') }}</label>
                                <input id="num_dot" type="string" class="form-control @error('num_dot') is-invalid @enderror" name="num_dot" value="{{ isset($RecuBonDotation->num_dot) ? $RecuBonDotation->num_dot : ''}}" required autocompnum_référencete="num_dot" >
                                @error('Dotation N°')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
    <label for="du"  for="du" class="control-label">{{ __('Du') }}</label>
                                <input id="du" type="string" class="form-control @error('du') is-invalid @enderror" name="du" value="{{ isset($RecuBonDotation->du) ? $RecuBonDotation->du : ''}}" required autocompnum_référencete="du" >
                                @error('du')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
   
    <label for="nbr_bon"  for="nbr_bon" class="control-label">{{ __('Nombre De Bon') }}</label>
                                <input id="nbr_bon" type="string" class="form-control @error('nbr_bon') is-invalid @enderror" name="nbr_bon" value="{{ isset($RecuBonDotation->nbr_bon) ? $RecuBonDotation->nbr_bon : ''}}" required autocompnum_référencete="nbr_bon" >
                                @error('nbr_bon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   <div  class="form-group ">
   <label for="fin_ser"  for="debut_ser" class="control-label">{{ __('Debut de N° Série Du Bon') }}</label>
                                <input id="debut_ser" type="string" class="form-control @error('debut_ser') is-invalid @enderror" name="debut_ser" value="{{ isset($RecuBonDotation->debut_ser) ? $RecuBonDotation->debut_ser : ''}}" required autocompnum_référencete="debut_ser"  >
                                @error('Debut de N° Série Du Bon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>


   <div  class="form-group ">
   <label for="fin_ser"  for="fin_ser" class="control-label">{{ __('FIn de N° Série Du Bon') }}</label>
                                <input id="fin_ser" type="string" class="form-control @error('fin_ser') is-invalid @enderror" name="fin_ser" value="{{ isset($RecuBonDotation->fin_ser) ? $RecuBonDotation->fin_ser : ''}}" required autocompnum_référencete="fin_ser"  >
                                @error('Fin de N° Série Du Bon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
   <label for="nom"  for="nom" class="control-label">{{ __('Nom') }}</label>
                                <input id="nom" type="string" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ isset($RecuBonDotation->nom) ? $RecuBonDotation->nom : ''}}" required autocompnum_référencete="nom"  >
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

 
   <div  class="form-group ">
   <label for="prenom"  for="prenom" class="control-label">{{ __('Prenom') }}</label>
                                <input id="prenom" type="string" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ isset($RecuBonDotation->prenom) ? $RecuBonDotation->prenom : ''}}" required autocompnum_référencete="prenom"  >
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>



   <div  class="form-group ">
   <label for="fonction"  for="fonction" class="control-label">{{ __('Fonction') }}</label>
                                <input id="fonction" type="string" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ isset($RecuBonDotation->fonction) ? $RecuBonDotation->fonction : ''}}" required autocompnum_référencete="fonction"  >
                                @error('fonction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>

   <div  class="form-group ">
   <label for="structure_attache"  for="structure_attache" class="control-label">{{ __('Structure Dattache') }}</label>
                                <input id="structure_attache" type="String" class="form-control @error('structure_attache') is-invalid @enderror" name="structure_attache" value="{{ isset($RecuBonDotation->structure_attache) ? $RecuBonDotation->structure_attache : ''}}" required autocompnum_référencete="structure_attache" >
                                @error('structure_attache')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   
   <div  class="form-group ">
   <label for="immatriculation"  for="immatriculation" class="control-label">{{ __('Immatriculation') }}</label>
                                <input id="immatriculation" type="string" class="form-control @error('immatriculation') is-invalid @enderror" name="immatriculation" value="{{ isset($RecuBonDotation->immatriculation) ? $RecuBonDotation->immatriculation : ''}}" required autocompnum_référencete="immatriculation" >
                                @error('immatriculation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
   
   <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>


