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
                <h5>Ajouter un laboratoire  <small></small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
    
            <div class="ibox-content">
            <form method="post" class="form-horizontal " action="{{ url('laboratoires') }}">
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
                    <div class="form-group"><label class="col-sm-2 control-label">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"> 
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Address: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="adresse" value="{{ old('address') }}"> 
                            @if ($errors->has('address'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('address') }}</strong>
                            </span>
                           @endif
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Tel: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tel"  value="{{ old('tel') }}">
                            @if ($errors->has('tel'))
                            <span class="help-block">
                                <strong class="text-danger">{{ $errors->first('tel') }}</strong>
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
                            <button class="btn btn-primary" type="submit">enregistrer</button>
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