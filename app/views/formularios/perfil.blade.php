@extends('backoffice.index')
@section('contenido')   

                

                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="widget widget-item-icon" style="background-color:#F9FFD0">
                                <div style="padding:10px;">
                                    <h2>Enlaces Marketer Money Pro{{$negocio4_pat}}</h2>  
                                
                                    
                                    
                                    
                                     <div class="panel-body"> 
                                          <ul>
                                            <li style="color:#000;">Su Enlace de Afiliado: <a href="https://marketermoneypro.com/registro.php?u={{$codigo_usuario}}" target="_blank">https://marketermoneypro.com/sala.php?u={{$codigo_usuario}}</a></li>
                                            <li style="color:#000;">El enlace de Sala: <a href="https://marketermoneypro.com/sala.php?u={{$codigo_usuario}}" target="_blank">https://marketermoneypro.com/registro.php?u={{$codigo_usuario}}</a></li>
                                           
                                        </ul>


                                     </div>
                                </div>
                            </div>                        

                        </div>

                         <div class="col-md-8">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Perfíl Personal</h2> 
                                     <div class="panel-body">        
                                                                            
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Usuario IC</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiusuario_ingreso" class="form-control" value="{{$usuario_negocio}}" />
                                                </div>                                            
                                                <span class="help-block">Usuario de IngresoCybernetico</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Usuario FDI</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiusuario_franquicia_impacto" class="form-control"  value="{{$usuario_negocio2}}"/>
                                                </div>                                            
                                                <span class="help-block">Usuario de Franquicia de Impacto</span>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Usuario Stairbucks</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiusuario_stairbuks" class="form-control"  value="{{$usuario_negocio3}}"/>
                                                </div>                                            
                                                <span class="help-block">Usuario de Stairbucks</span>
                                            </div>
                                        </div>



                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Usuario CustomersPlus4U</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiusuario_customers" class="form-control"  value="{{$usuario_negocio4}}"/>
                                                </div>                                            
                                                <span class="help-block">Usuario de CustomersPlus4U</span>
                                            </div>
                                        </div>





                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Nombres</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="finombres" class="form-control" value="{{$nombres}}"/>
                                                </div>                                            
                                                <span class="help-block">* Aquí va tu nombre y apellido personal.</span>
                                            </div>
                                        </div>

                                       

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Correo Electrónico</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiemail" class="form-control" value="{{$email}}"/>
                                                </div>                                            
                                                <span class="help-block">* Dirección de Correo Electronico.</span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="password" id="fipassword" class="form-control"/>
                                                </div>                                            
                                                <span class="help-block">* Si quieres cambiar de password.</span>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Repetir Password</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="password" id="fipassword_re" class="form-control"/>
                                                </div>                                            
                                                <span class="help-block">* Si quieres cambiar de password.</span>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Teléfono</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fitelefono" class="form-control" value="{{$telefono}}"/>
                                                </div>                                            
                                                <span class="help-block">* Ayuda a tus prospectos a comunicarte contigo.</span>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Foto</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    
                                                    
                                                     <form method="POST" id="formulario2" ecntype="multipar/form-data">
                                                      <input type="file"  name ="file">
                                                    </form>

                                                    <div  class="col-md-8" id="respuesta">
                                                        <img class='imagenes' src="../assets/img/usuarios/{{$foto}}" style='width:250px;' >
                                                        <span class="help-block">* Se recomienda que la foto sea de 250 x 250 pixeles.</span>
                                                    </div>

                                                
                                            </div>
                                        </div>
                                        

                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Facebook</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fifacebook" class="form-control" value="{{$facebook}}"/>
                                                </div>                                            
                                                <span class="help-block">* Usuario Facebook</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Twitter</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fitwitter" class="form-control"  value="{{$twitter}}"/>
                                                </div>                                            
                                                <span class="help-block">* Usuario Twitter.</span>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label">Skype</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" id="fiskype" class="form-control"   value="{{$skype}}"/>
                                                </div>                                            
                                                <span class="help-block">* Usuario Skype.</span>
                                            </div>
                                        </div>


                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Descripción</label>
                                            <div class="col-md-9">                                            
                                                <div class="input-group" >
                                                   
                                                    <textarea name="txtdescripcion" id="txtdescripcion" class="form-control" rows="5" >{{$descripcion}}</textarea>
                                                </div>                                            
                                                <span class="help-block">* Descripción Pequeña, a que te dedicas.</span>
                                            </div>
                                        </div>






                                    </div>

                                    <div class="panel-footer">
                                        <button class="btn btn-default" id="btncancelar">Cancelar</button>                                    
                                        <button class="btn btn-success pull-right" id="btnguardar" onclick="guardar_perfil()">Guardar</button>
                                    </div>
                                  
                                </div>
                                               
                            </div>         

                                                     
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>

                        

                      
                       


                        


                    </div>

                   
                    <!-- END WIDGETS -->                    
                    
                    
                    
               
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   




               
                
@stop
@section('scripts')    

 <script type="text/javascript">


              
                   function limpiar(){
                        $("#fiusuario_ingreso").val("");
                        $("#fiusuario_customers").val("");
                        $("#fiusuario_stairbuks").val("");
                        $("#fiusuario_franquicia_impacto").val("");

                        $("#finombres").val("");
                        $("#fiemail").val("");
                        $("#fipassword").val("");
                        $("#fipassword_re").val("");
                        $("#fitelefono").val("");
                        $("#fifacebook").val("");
                        $("#fitwitter").val("");
                        $("#fiskype").val("");
                        $("#txtdescripcion").val("");
                        
                   }

                   function guardar_perfil(){


                        var codigo_usuario="{{$codigo_usuario}}";
                        var usuario_negocio=""+$("#fiusuario_ingreso").val();
                        var usuario_negocio2=""+$("#fiusuario_franquicia_impacto").val();
                        var usuario_negocio3=""+$("#fiusuario_stairbuks").val();
                        var usuario_negocio4=""+$("#fiusuario_customers").val();

                        var nombres=""+$("#finombres").val();
                        var email=""+$("#fiemail").val();
                        var password=""+$("#fipassword").val();
                        var password_re=""+$("#fipassword_re").val();

                        var telefono=""+$("#fitelefono").val();
                        var foto=""+nombreimagen;
                        var facebook=""+$("#fifacebook").val();
                        var twitter=""+$("#fitwitter").val();
                        var skype=""+$("#fiskype").val();
                        var descripcion=""+$("#txtdescripcion").val();



                        if(nombres==""){
                            alert("El nombre es obligatorio");
                            return;
                        }   

                         if(email==""){
                            alert("El email es obligatorio");
                            return;
                        }   

                         if(telefono==""){
                            alert("El telefono es obligatorio");
                            return;
                        }

                        if(password!=""){
                            if(password!=password_re){
                                alert("Los Password no son iguales.");
                                return;
                            }
                        }


                        var request = $.ajax({
                          url: "guardar_usuario",
                          type: "POST",
                          data:{
                               codigo_usuario:codigo_usuario,
                               password:password,
                               usuario_negocio:usuario_negocio,
                               usuario_negocio2:usuario_negocio2,
                               usuario_negocio3:usuario_negocio3,
                               usuario_negocio4:usuario_negocio4,
                               password:password_re,
                               telefono:telefono,
                               foto:foto,
                               facebook:facebook,
                               twitter:twitter,
                               skype:skype,
                               descripcion:descripcion,
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




                     var nombreimagen="";
      
                        $("input[name='file']").on("change", function(){


                          $("#mensaje_subir").html("Subiendo imagen... esto puede tardar varios minutos");
                          var formData=new FormData($("#formulario2")[0]);
                          var ruta="imagen-ajax.php?usuario={{$codigo_usuario}}";
                          $.ajax({
                            url: ruta,
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData:false,
                            success: function (datos){
                               var obj = jQuery.parseJSON(datos);      
                              if( obj.status == "ok"){   
                                $("#respuesta").html("<img class='imagenes' src='"+obj.imagen+"' style='width:250px;' >");
                                nombreimagen=""+obj.nombre;
                              }else{
                                alert( obj.mensaje);
                              }
                              
                            }
                          });
                        });   
                </script>
            

@stop
          

