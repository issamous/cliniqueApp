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
                      <h5>Modifer des Laboratoire  <small></small></h5>
                      <div class="ibox-tools">
                          <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                          </a>
                      </div>
                  </div>
          
                  <div class="ibox-content">
                  <form method="post" class="form-horizontal " action="{{ url('laboratoires/'.$Laboratoire->id ) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                          <div class="form-group"><label class="col-sm-2 control-label">Nom: </label>
                              <div class="col-sm-10"><input type="text" class="form-control" name="nom" value="{{ $Laboratoire->nom  }}">
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
                                  <input type="email" class="form-control" name="email" readonly value="{{  $Laboratoire->email  }}"> 
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
                                  <input type="text" class="form-control" name="address" value="{{  $Laboratoire->adresse }}"> 
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
                                  <input type="text" class="form-control" name="tel"  value="{{ $Laboratoire->tel   }}">
                                  @if ($errors->has('tel'))
                                  <span class="help-block">
                                      <strong class="text-danger">{{ $errors->first('tel') }}</strong>
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
                          <div class="hr-line-dashed"></div>
                          <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">  
                                      <a href="#" class="btn btn-primary edit-password"  data-toggle="modal" data-target="#myModal" >Change le mot d passe</a>
                                  </div>
                              </div>
                        <div class="hr-line-dashed"></div>
                      </form>
                 
      
      
                      <form method="post" class="form-horizontal ch-pw " action="{{ url('laboratoires/'.$Laboratoire->id.'/password' ) }}"  >
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="form-group"><label class="col-sm-2 control-label">Actuel: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password_actuel"  >
                                @if ($errors->has('password_actuel'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('password_actuel') }}</strong>
                                </span>
                               @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">Nouveau: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password_nouveau"  >
                                @if ($errors->has('password_nouveau'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('password_nouveau') }}</strong>
                                </span>
                               @endif
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">Confirmer: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password_confirmer"  >
                                @if ($errors->has('password_confirmer'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('password_confirmer') }}</strong>
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
<script src="{{ asset('assets/js/plugins/toastr/toastr.min.js')}}"></script>
<script>
        $(document).ready(function(){
            $('.ch-pw').hide();
            $('.edit-password').click(()=>{
                $('.ch-pw').toggle( "slow");
            });

            
                 
            @if(session()->has('successPassword'))
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 6000
                    };
                    toastr.success( 'Le Laboratoire a étè bien supprimeé !!','Suppersion'  );

                }, 1000);

            @endif  


        });
</script>        
@endsection



@section('cssSup')

@endsection