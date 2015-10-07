@extends('backoffice.index')
@section('contenido')   

                
              
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Referidos <small>{{$cantidad_referidos}} contactos</small></h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    
                    
                    <div class="row">

                        @foreach ($arrausuarios as $usu) 
                           
                            <div class="col-md-3">
                                <!-- CONTACT ITEM -->
                                <div class="panel panel-default">
                                    <div class="panel-body profile">
                                        <div class="profile-image">
                                            <img src="../assets/img/usuarios/{{$usu->foto}}" alt="{{$usu->nombres}}"/>
                                        </div>
                                        <div class="profile-data">
                                            <div class="profile-data-name">{{$usu->nombres}}</div>
                                            <div class="profile-data-title">{{$usu->titulo}}</div>
                                        </div>
                                     
                                    </div>                                
                                    <div class="panel-body">                                    
                                        <div class="contact-info">
                                            <p><small>Telefono</small><br/>{{$usu->telefono}}</p>
                                            <p><small>Email</small><br/>{{$usu->email}}</p>                            
                                        </div>
                                    </div>                                
                                </div>
                                <!-- END CONTACT ITEM -->
                            </div>

                        @endforeach



                  
                   

                    </div>
                   
                <!-- END PAGE CONTENT WRAPPER -->                                                 
            </div>    


@stop