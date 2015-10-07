@extends('backoffice.index')
@section('contenido')   

                

                    <div class="row">


                         <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Formula 30 30 30</h2>  

                                    
                                    
                                     <div class="panel-body">        
                                        <p>La Formula 30 30 30, nos permitirá crear buenos hábitos para que las personas aumentes sus conocimientos, mantenga su enfoque en la compañía y así incrementar sus ventas, este es el secreto que otras compañías tienen, un Sistema Educativo constante, como si fuera una nueva carrera universitaria. En que consiste la formula 30/30/30, es que Tú por 30 días, debes <strong>leer 30 Minutos y Escuchar 30 minutos de audio</strong>; todos los días debes hacerlo para generar dichos habitos, si no llegas hacerlo por un día, vuelves y empiezas nuevamente desde el primer día hasta que finalices.  Además también consite en quitar malos habitos como ver tele novelas, noticias negativas, etc...</p>
                                       <div class="form-group">
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(1)" >Video Formula 30 30 30</button>
                                           
                                        </div>
                                    </div>
                                  
                                </div>
                                               
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>


                         <div class="col-md-8">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2 id="titulo_principal">Video Formula 30 30 30</h2>        
                                    <p id="descripcion_video"></p>
                                    <div id="contenedor_global">
                                                                            
                                        <div class="embed-responsive embed-responsive-16by9" id="contenedor_video">

                                          <iframe id="video_principal" class="embed-responsive-item" src="https://www.youtube.com/embed/ohdYnxPwqVw" frameborder="0" allowfullscreen></iframe>
                                        </div>

                                    </div>
                                </div>   
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>


                       


                        


                    </div>

                   
                    <!-- END WIDGETS -->                    
                    
                    
                    
               
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

                <script type="text/javascript">
                    function abrir_video(video){
                        var urlvideo="";
                        var titulo_video="";
                        var descripcion_video="";
                        if(video==1){
                            titulo_video="Video Formula 30 30 30";
                            urlvideo="ohdYnxPwqVw"; 
                            descripcion_video="";
                        }

                        $("#video_principal").attr("src","https://www.youtube.com/embed/"+urlvideo);
                        $("#titulo_principal").html(""+titulo_video);
                        $("#descripcion_video").html(""+descripcion_video);
                        
                    }
                </script>
            


          

@stop