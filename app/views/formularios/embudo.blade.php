@extends('backoffice.index')
@section('contenido')   

                
                    <div class="row">


                         <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Confirguración Embudo</h2>  

                                    
                                    
                                     <div class="panel-body">        
                                        <p>Un embudo te ayudará a coseguir prospectos a través de internet:</p>       
                                        
                                     


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Autoresponder</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                   
                                                   <select id="txtautoresponder">
                                                       @if($autoresponder=="por_defecto")
                                                           <option value="por_defecto" selected >Por Defecto</option>
                                                           <option value="aweber">Aweber</option>
                                                           <option value="getresponse">Getresponse</option>
                                                           <option value="magicresponder">MagicResponder</option>
                                                       @endif

                                                       @if($autoresponder=="aweber")
                                                           <option value="por_defecto">Por Defecto</option>
                                                           <option value="aweber" selected>Aweber</option>
                                                           <option value="getresponse">Getresponse</option>
                                                           <option value="magicresponder">MagicResponder</option>
                                                       @endif

                                                       @if($autoresponder=="getresponse")
                                                           <option value="por_defecto">Por Defecto</option>
                                                           <option value="aweber">Aweber</option>
                                                           <option value="getresponse" selected>Getresponse</option>
                                                           <option value="magicresponder">MagicResponder</option>
                                                       @endif

                                                       @if($autoresponder=="magicresponder")
                                                           <option value="magicresponder">Por Defecto</option>
                                                           <option value="aweber">Aweber</option>
                                                           <option value="getresponse">Getresponse</option>
                                                           <option value="magicresponder" selected>MagicResponder</option>
                                                       @endif
                                                       
                                                   </select>
                                                </div>                                            
                                                <span class="help-block">* Si escoges "por defecto", tomará el autoresponder de MarketerMoneyPro.</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Código Autoresponder</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group" >
                                                   
                                                    <textarea name="txtcodigoauto" id="txtcodigoauto"  class="form-control">{{$codigo_autoresponder}}</textarea>
                                                </div>                                            
                                                <span class="help-block">* Si escoges "por defecto", tomará el autoresponder de MarketerMoneyPro.</span>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Código Chat</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group" >
                                                   
                                                    <textarea name="txtcodigochat" id="txtcodigochat" class="form-control" >{{$codigo_chat}}</textarea>
                                                </div>                                            
                                                <span class="help-block">* Chat and Service o ZopimChat</span>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Código Formulario</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group" >
                                                   
                                                    <textarea name="txtcodigoformulario" id="txtcodigoformulario" class="form-control">{{$codigo_formulario}}</textarea>
                                                </div>                                            
                                                <span class="help-block">* Si se deja vacío tomará por defecto el de MarketerMoneyPro</span>
                                            </div>
                                        </div>



                                         <div class="form-group">
                                            <label class="col-md-3 control-label">URL Calendario</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="txturlcalendar" class="form-control" value="{{$url_calendario}}" />
                                                </div>                                            
                                                <span class="help-block">* Debes tener una url de un administrador de Calendarios ejemplo 
                                                    <a href="http://youcanbook.me" target="_blank">http://youcanbook.me</a>
                                                </span>
                                            </div>
                                        </div>







                                    </div>

                                    <div class="panel-footer">
                                                               
                                        <button class="btn btn-success pull-right" id="btnguardar" onclick="guardar_embudo()">Guardar</button>
                                    </div>
                                  
                                </div>
                                               
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        
                        <div class="col-md-8">
                            <div class="row">
                             <div class="col-md-6">
                                
                                <!-- START WIDGET REGISTRED -->
                                <div class="widget widget-default widget-item-icon">
                                    <div style="padding:10px;">
                                        <h2 id="titulo_principal">Paginas de Captura No 1.</h2>        
                                        
                                        <div class="row" style="text-align:center;">

                                            
                                            <img src="../assets/img/backoffice/land1.jpg" class="col-md-4">

                                            <div class="col-md-8">
                                                
                                                <div class="widget" style="background-color:#F9FFD0 !important; text-align:center;">
                                                    
                                                    <p style="color:#000">Comparte este enlace</p>
                                                    <p><a href="http://draco.yo:8888/embudo">http://draco.yo:8888/embudo</a> </p>
                                                                                                                  
                                                </div>       
                                            </div>
                                            
                                            

                                        </div>

                                     
                                        
                                    </div>   
                                </div>                            
                                <!-- END WIDGET REGISTRED -->
                                
                            </div>

                           </div>
                       
                    </div>


                   

                   
                    <!-- END WIDGETS -->                    
                    
                    
                    
               
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

            


          

@stop
@section('scripts')   
    <script type="text/javascript">
        function abrir_video(video){
                        
            
        }

        function guardar_embudo(){
            var codigo_usuario="{{$codigo_usuario}}";
            var codigo_chat=""+$("#txtcodigochat").val();
            var codigo_autoresponder=""+$("#txtcodigoauto").val();
            var autoresponder=""+$("#txtautoresponder").val();
            var codigo_formulario=""+$("#txtcodigoformulario").val();
            var url_calendario=""+$("#txturlcalendar").val();

            var request = $.ajax({
              url: "guardar_embudo",
              type: "POST",
              data:{
                   codigo_usuario:codigo_usuario,
                   codigo_chat:codigo_chat,
                   codigo_autoresponder:codigo_autoresponder,
                   autoresponder:autoresponder,
                   codigo_formulario:codigo_formulario,
                   url_calendario:url_calendario,
                   tipo:"guardar"
              }
            });

            request.done(function(obj) { 
                  
           
              if( obj.status == "ok"){

                alert("Datos guardados con éxito");
              }else{
                alert(""+obj.mensaje);
              }

            });
             

             //respuesta si falla
            request.fail(function(jqXHR, textStatus) {
              alert( "Error de servidor  " + textStatus );
            });
        }

    </script>
            
@stop
