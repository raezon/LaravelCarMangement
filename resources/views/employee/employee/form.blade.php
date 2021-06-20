
<div class="form-group {{ $errors->has('matricule') ? 'has-error' : ''}}">
    <label for="matricule" class="control-label">{{ 'Matricule' }}</label>
    <input class="form-control" name="matricule" type="text" id="matricule" value="{{ isset($employee->matricule) ? $employee->matricule : ''}}" >
    {!! $errors->first('matricule', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($employee->nom) ? $employee->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prenom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($employee->prenom) ? $employee->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    <label for="mobile" class="control-label">{{ 'Mobile' }}</label>
    <input class="form-control" name="mobile" type="text" id="mobile" value="{{ isset($employee->mobile) ? $employee->mobile : ''}}" >
    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($employee->email) ? $employee->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fonction') ? 'has-error' : ''}}">
    <label for="fonction" class="control-label">{{ 'Fonction' }}</label>
    <input class="form-control" name="fonction" type="text" id="fonction" value="{{ isset($employee->fonction) ? $employee->fonction : ''}}" >
    {!! $errors->first('fonction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grade') ? 'has-error' : ''}}">
    <label for="grade" class="control-label">{{ 'Grade' }}</label>
    <input class="form-control" name="grade" type="text" id="grade" value="{{ isset($employee->grade) ? $employee->grade : ''}}" >
    {!! $errors->first('grade', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('structure') ? 'has-error' : ''}}">
    <label for="structure" class="control-label">{{ 'Structure' }}</label>
    <input class="form-control" name="structure" type="text" id="structure" value="{{ isset($employee->structure) ? $employee->structure : ''}}" >
    {!! $errors->first('structure', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pc') ? 'has-error' : ''}}">
    <label for="pc" class="control-label">{{ 'Pc' }}</label>
    <input class="form-control" name="pc" type="text" id="pc" value="{{ isset($employee->pc) ? $employee->pc : ''}}" >
    {!! $errors->first('pc', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
