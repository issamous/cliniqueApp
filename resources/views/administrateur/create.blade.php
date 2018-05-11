@extends('layouts.masterBack')

@section('content')

<div class="row">
    
  @if(session()->has('success'))
   <div class="col-lg-12">
        <div class="ibox-content alert alert-success" style="background-color: #dff0d8 !important;">
        <p style="text-align:center"> {{ session()->get('success') }}
        </div>
   </div>  
  @endif

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Liste des clinique  <small></small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
    
            <div class="ibox-content">
            <form method="post" class="form-horizontal " action="{{ url('administrateurs') }}">
                      {{ csrf_field() }}
                    <div class="form-group"><label class="col-sm-2 control-label">Nom: </label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="nom" value="{{ old('nom') }}">
                          @if ($errors->has('nom'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('nom') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Prenom: </label>
                        <div class="col-sm-10">
                            <input type="prenom" class="form-control" name="prenom" value="{{ old('prenom') }}"> 
                            @if ($errors->has('prenom'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('prenom') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Role: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="role" value="{{ old('role') }}"> 
                            @if ($errors->has('role'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('role') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Photo: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="photo"  value="{{ old('photo') }}">
                            @if ($errors->has('photo'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('photo') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Login: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="login"  value="{{ old('login') }}"> 
                            @if ($errors->has('login'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('login') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Mot de passe: </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password"  > 
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">confirmation Mot de passe: </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control"  name="password_confirmation"  > 
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('jsSup')
  
@endsection



@section('cssSup')

@endsection