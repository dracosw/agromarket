@extends('backoffice.index')
@section('contenido')   

                

                    <div class="row">


                         <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Curso Facebook Marketing</h2>  

                                    
                                    
                                     <div class="panel-body">        
                                        <p>Hola, Bienvenido al curso de Facebook Marketing, potencializa tu negocio con esta grandiosa herramienta.</p>
                                       <div class="form-group">
                                            <button type="button" class="btn btn-danger col-md-12 botones" >1. Configuración FanPage.</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" >1. ¿Cómo funciona el Back Office?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" >2. ¿Cómo Editar el Perfíl?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" >3. ¿Cómo configurar el embudo?</button>   
                                            <button type="button" class="btn btn-info col-md-12 botones mb-control" data-box="#mensaje_evuluacion"> EVALUACIÓN CURSO.</button>    

                                                                              
                                        </div>
                                    </div>
                                  
                                </div>
                                               
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>


                         <div class="col-md-5">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>1. Configuración FanPage.</h2>        

                                    <div id="contenedor_global">
                                                                            
                                        <div class="embed-responsive embed-responsive-16by9" id="contenedor_video">

                                          <iframe id="video_principal" class="embed-responsive-item" src="https://www.youtube.com/embed/7Wk_-tVhvlo" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                    </div>


                                </div>   
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>


                         <div class="col-md-3">                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Documentos</h2>   
                                    
                                </div>   
                            </div>                            
                            <!-- END WIDGET REGISTRED -->                            
                        </div>

                    </div>
                    <!-- END WIDGETS --> 
                </div>

                

                <div class="message-box animated fadeIn" data-sound="alert" id="mensaje_evuluacion">
                    <div class="mb-container">


                        <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa-sign-out"></span>Evaluación <strong>Facebook Marketing</strong></div>
                            <div class="mb-content">
                                <p>Está seguro de Empezar la evualuación de Facebook Marketing?</p>                    
                                <p>Una vez ingreses, debes terminarla, no se guardan las respuestas si llegas a cerrar esta ventana, y deberás ingresar nuevamente.</p>
                            </div>
                            <div class="mb-footer">
                                <div class="pull-right">
                                    <button class="btn btn-success btn-lg mb-control-close" onclick="abrir_evaluacion()">SI</button>
                                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


                <div class="message-box message-box-info animated fadeIn" id="evaluacion">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa-question-circle"></span> <div id="pregunta">porque es necesario una fanpage de Facebook?</div></div>
                            <div class="mb-content">

                                <p><input type="radio" name="pregunta1" id="answ1" value="a" checked><span id="txt_ans1"> a) Sólo sirve para fans de música.</span></p>
                                <p><input type="radio" name="pregunta1" id="answ2" value="b"><span id="txt_ans2"> b) Esto no sirve para marketing por internet, es mejor una pagina normal de facebook.</span></p>
                                <p><input type="radio" name="pregunta1" id="answ3" value="c"><span id="txt_ans3"> c) Para dar a conocer la empresa o nuestra marca persona de una manera profesional. </span></p>
                                <p><input type="radio" name="pregunta1" id="answ4" value="d"><span id="txt_ans4"> d) Ninguna de las anteriores. </span></p>
                                
                            </div>
                            <div class="mb-footer">
                                <button class="btn btn-danger btn-lg pull-right" id="btn_finalizar" style="margin-left:5px; margin-right:5px; display:none;" onclick="mostrar_certificado()">Finalizar</button>
                                <button class="btn btn-success btn-lg pull-right" style="margin-left:5px; margin-right:5px;" onclick="siguiente_pregunta()" id="btn_siguiente">Siguiente &gt;&gt;</button>
                               
                            </div>
                        </div>
                    </div>
                </div>


                



                 <div class="message-box message-box-success animated fadeIn" id="certificado">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><span class="fa fa fa-thumbs-o-up"></span> <div id="pregunta">MUY BIEN, HAZ PASADO EL CURSO CON UN 95% </div></div>
                            <div class="mb-content">
                                <button class="btn btn-danger btn-lg pull-left" id="btn_finalizar" style="margin-left:5px; margin-right:5px;" onclick="abrir_certificado()">DESCARGAR CERTIFICADO</button>
                            </div>
                            <div class="mb-footer">
                                
                                
                                <button class="btn btn-default btn-lg pull-left mb-control-close" onclick="cerrar_pop()">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- END PAGE CONTENT WRAPPER --> 

@stop
@section('scripts')
<script type="text/javascript">

    var arra_preguntas=new Array();
    var arra_respuestas=new Array();

    

    function abrir_evaluacion(){
        
        $("#evaluacion").show();

        arra_preguntas=new Array();
        arra_respuestas=new Array();

        var obj_pregunta=new Object();
        var obj_res=new Object();

        


        //carga base de datos de respuestas

        //respuesta 1
       
       
        for(var i=1;i<=10;i++){
            obj_pregunta=new Object();
            obj_pregunta.codigo=""+i;
            obj_pregunta.pregunta="pregunta "+i+"?";
            arra_preguntas.push(obj_pregunta);


            for(var j=1;j<=4;j++){
                obj_res=new Object();
                obj_res.pregunta=""+i;
                obj_res.respuesta=" Respuesta "+j+" de la pregunta No. "+i;
                arra_respuestas.push(obj_res);
            }

        }
        

        

    }

    
    var cont_pregunta=0;

    function siguiente_pregunta(){

        if(cont_pregunta<=10){
             $("#pregunta").html(""+arra_preguntas[cont_pregunta].pregunta);
            armar_respuestas(arra_preguntas[cont_pregunta].codigo);
            cont_pregunta++;

            if(cont_pregunta==10){
                $("#btn_finalizar").show();          
                $("#btn_siguiente").hide();                
            }
        } 
        

    }

    function armar_respuestas(cod_pregunta){
        var respuesta1="";
        var respuesta2="";
        var respuesta3="";
        var respuesta4="";
        var conta=0;
        for(var i=0;i<arra_respuestas.length;i++){
            if(arra_respuestas[i].pregunta==cod_pregunta){
                conta++;

                if(conta==1)
                    respuesta1=""+arra_respuestas[i].respuesta;
                 if(conta==2)
                    respuesta2=""+arra_respuestas[i].respuesta;
                 if(conta==3)
                    respuesta3=""+arra_respuestas[i].respuesta;
                 if(conta==4)
                    respuesta4=""+arra_respuestas[i].respuesta;               

            }
        }
        $("#txt_ans1").html(respuesta1);
        $("#txt_ans2").html(respuesta2);
        $("#txt_ans3").html(respuesta3);
        $("#txt_ans4").html(respuesta4);
        
    }


    function cerrar_pop(){
         $("#certificado").hide();
        $("#evaluacion").hide();

        cont_pregunta=0;
        $("#pregunta").html(""+arra_preguntas[cont_pregunta].pregunta);
        armar_respuestas(arra_preguntas[cont_pregunta].codigo);
        cont_pregunta++;
        $("#btn_finalizar").hide();          
        $("#btn_siguiente").show();           

    }


    function mostrar_certificado(){
        $("#certificado").show();
        $("#evaluacion").hide();
    }

    function abrir_certificado(){
        window.open("../assets/img/backoffice/diploma.pdf","_blank");
    }
</script>
@stop

