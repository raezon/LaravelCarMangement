
<div  class="form-group ">
    <label for="matricule" class="control-label">{{ __('Matricule') }}</label>
                                <input id="matricule" type="string" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ isset($employes->matricule) ? $employes->matricule : ''}}"  >
                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
   </div>
<div  class="form-group ">
    <label for="nom"  class="control-label">{{ __('Nom') }}</label>
                                <input id="nom" type="string" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ isset($employes->nom) ? $employes->nom : ''}}" required autocomplete="nom" >
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
   </div>
<div class="form-group ">
    <label for="prenom"  class="control-label">{{ __('Prénom') }}</label>
                                <input id="prenom" type="string" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ isset($employes->prenom) ? $employes->prenom : ''}}" required autocomplete="prenom">
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
   </div>
<div  class="form-group ">
    <label for="mobile"  class="control-label">{{ __('Mobile') }}</label>
                                <input id="mobile" type="intger" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ isset($employes->mobile) ? $employes->mobile : ''}}" required autocomplete="mobile">
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
   <div class="form-group ">
    <label for="email" class="control-label">{{ __('Email') }}</label>
                                <input id="email" type="string" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($employes->email) ? $employes->email : ''}}" required autocomplete="email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>

<div class="form-group ">
   <label for="fonction"  class="control-label">{{ __('Fonction') }}</label>
                                <input id="fonction" type="string" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ isset($employes->fonction) ? $employes->fonction : ''}}" required autocomplete="fonction">
                                @error('fonction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                      
 </div >
 <div class="form-group ">
   <label for="grade"  class="control-label">{{ __('Grade') }}</label>
                                <input id="grade" type="string" class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ isset($employes->grade) ? $employes->grade : ''}}" required autocomplete="grade" >
                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                                
 </div class="form-group ">


 <div class="form-group ">
   <label for="structure" class="control-label">{{ __('Structure') }}</label>
                                <input id="structure" type="string" class="form-control @error('structure') is-invalid @enderror" name="structure" value="{{ isset($employes->structure) ? $employes->structure : ''}}" required autocomplete="structure" >
                                @error('structure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                                
 </div>

 <br>
 <div class="form-group ">


   <label for="pc"  class="control-label">{{ __('Permis De Conduire') }}</label>

                               
         <select id="pc" type="string" class="textfield @error('pc') is-invalid @enderror" name="pc" value="{{ isset($employes->pc) ? $employes->pc : ''}}" required autocomplete="pc">
            <option value>&nbsp;</option>
            <option value="oui" >Oui</option>
            <option value="non" >Non</option>          
          </select>  
                              
 </div>
 <br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
