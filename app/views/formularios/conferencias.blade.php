@extends('backoffice.index')
@section('contenido')   

                

                    <div class="row">


                         <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Videos - Conferencias</h2>  

                                    
                                    
                                     <div class="panel-body">        
                                        <p>Conferencias</p>
                                       <div class="form-group">
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(1)" >1. Como reclutar a 20 personas en 30 dias - Eric Worre - Subtitulos Espanol</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(2)" >2. ALEX DEY - Cómo Crear Hábitos de Éxito - Superación Personal</button>

                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(3)" >3. ALEX DEY - Cómo Conseguir Buenos Resultados - Superación Personal</button>

                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(4)" >4. MIGUEL ÁNGEL CORNEJO - Cómo Tener Una Mentalidad Triunfadora - Superación Personal</button>

                                             <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(5)" >5. ALEX DEY - Cómo Hacer Decretos y Afirmaciones Positivas - Superación Personal</button>


                                             <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(6)" >6. ALEX DEY - Cómo Usar El Poder De La Mente - Superación Personal</button>


                                             <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(7)" >7. ZIG ZIGLAR - Cómo Establecer Metas - Superación Personal</button>

                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="abrir_video(8)" >8. ¿Vender o Reclutar? ¿Qué Debes Hacer en Network Marketing? - MLM (Multinivel)</button>
                                        
                                            
                                                                                 
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
                                    <h2 id="titulo_principal">1. Como reclutar a 20 personas en 30 dias - Eric Worre - Subtitulos Espanol</h2>        
									<p id="descripcion_video">Video de Erick Worre, donde explica como reclutar a 20 personas en 30 días, el enfoque, la velocidad y el sacrificio sus principales armas.</p>
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
                			titulo_video="1. Como reclutar a 20 personas en 30 dias - Eric Worre - Subtitulos Espanol";
                			urlvideo="ohdYnxPwqVw";	
                			descripcion_video="Video de Erick Worre, donde explica como reclutar a 20 personas en 30 días, el enfoque, la velocidad y el sacrificio sus principales armas.";
                		}
                        if(video==2){
                            titulo_video="2. ALEX DEY - Cómo Crear Hábitos de Éxito - Superación Personal";
                            urlvideo="oFOoeupI4Bo"; 
                            descripcion_video="La misión fundamental de Alex Dey es capacitar y motivar a todo publico de habla hispana en base al cambio de actitud poder lograr una nueva casta de hispanos; hispanos que al abrir los ojos todos los días por la mañana se pregunten ¿ cómo puedo ser mejor? para que de esta manera el progreso llegue y se quede en nuestro país.";
                        }

                        if(video==3){
                            titulo_video="3. ALEX DEY - Cómo Conseguir Buenos Resultados - Superación Personal";
                            urlvideo="vojGhCFr5xk"; 
                            descripcion_video="La misión fundamental de Alex Dey es capacitar y motivar a todo publico de habla hispana en base al cambio de actitud poder lograr una nueva casta de hispanos; hispanos que al abrir los ojos todos los días por la mañana se pregunten ¿ cómo puedo ser mejor? para que de esta manera el progreso llegue y se quede en nuestro país.";
                        }


                        if(video==4){
                            titulo_video="4. MIGUEL ÁNGEL CORNEJO - Cómo Tener Una Mentalidad Triunfadora - Superación Personal";
                            urlvideo="5QV4RNeEo6w"; 
                            descripcion_video="Miguel Ángel Cornejo expone 10 claves para mantener una Mentalidad Ganadora y Triunfadora";
                        }


                        if(video==5){
                            titulo_video="5. ALEX DEY - Cómo Hacer Decretos y Afirmaciones Positivas - Superación Personal";
                            urlvideo="9-5iwXQODCM"; 
                            descripcion_video="La misión fundamental de Alex Dey es capacitar y motivar a todo publico de habla hispana en base al cambio de actitud poder lograr una nueva casta de hispanos; hispanos que al abrir los ojos todos los días por la mañana se pregunten ¿ cómo puedo ser mejor? para que de esta manera el progreso llegue y se quede en nuestro país.";
                        }


                        if(video==6){
                            titulo_video="6. ALEX DEY - Cómo Usar El Poder De La Mente - Superación Personal";
                            urlvideo="ozq9nr8HLJs"; 
                            descripcion_video="La misión fundamental de Alex Dey es capacitar y motivar a todo publico de habla hispana en base al cambio de actitud poder lograr una nueva casta de hispanos; hispanos que al abrir los ojos todos los días por la mañana se pregunten ¿ cómo puedo ser mejor? para que de esta manera el progreso llegue y se quede en nuestro país.";
                        }


                        if(video==7){
                            titulo_video="7. ZIG ZIGLAR - Cómo Establecer Metas - Superación Personal";
                            urlvideo="h7MCKxxpQsA"; 
                            descripcion_video="Zig Ziglar (6 de noviembre de 1926 - 28 de noviembre de 2012) Es conferencista y motivador profesional. Alguien que ha alcanzado el éxito y aprendió en base a su experiencia que el camino no está exento de dificultades y que el compromiso es la clave para superarlas.";
                        }


                        if(video==8){
                            titulo_video="8. ¿Vender o Reclutar? ¿Qué Debes Hacer en Network Marketing? - MLM (Multinivel)";
                            urlvideo="yixrPVDHa5c"; 
                            descripcion_video="Jose Miguel Arbolú, lider del MLM, nos enseña los beneficios de vender y reclutar.";
                        }

                        

                        
                        
                        

                		$("#video_principal").attr("src","https://www.youtube.com/embed/"+urlvideo);
                		$("#titulo_principal").html(""+titulo_video);
                		$("#descripcion_video").html(""+descripcion_video);
                		
                	}
                </script>
			


          

@stop