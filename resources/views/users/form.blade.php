


<div  >
    <label for="matricule"  for="matricule" class="control-label">{{ __('Matricule') }}</label>
                                <input id="matricule" type="string" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ isset($users->matricule) ? $users->matricule : ''}}" required autocomplete="matricule" >
                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
  
   <div >
    <label for="email"  for="email" class="control-label">{{ __('Email') }}</label>
                                <input id="email" type="string" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($users->email) ? $users->email : ''}}" required autocomplete="email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
   </div>
  

   <div  class="form-group ">
    <label for="role_as"  for="role_as" class="control-label">{{ __('Role') }}</label>
                                <input id="role_as" type="string" class="form-control @error('role_as') is-invalid @enderror" name="role_as" value="{{ isset($users->role_as) ? $users->role_as : ''}}" required autocomplete="role_as" >
                                @error('role_as')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                             
   </div>
 
    <div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}">
</div>
