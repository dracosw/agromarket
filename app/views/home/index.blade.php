@extends('backoffice.index')
@section('contenido')   

                

                    <div class="row">


                         <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Primeros Pasos</h2>        
                                    
                                     <div class="panel-body">        
                                        <p>Hola, Te damos la bienvenido a Agro Market                              
                                        </p>
                                        <p>Lo que verás a continuación son los pasos que debes tener en cuenta para configurar e instalar tus respectivas herramientas</p>
                                       <div class="form-group">
                                            <button type="button" class="btn btn-success col-md-12 botones" onclick="click_primeros_pasos(1)">Bienvenida</button>
											
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(2)">1. ¿Cómo funciona el Back Office?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(3)">2. ¿Cómo Editar el Perfíl?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(4)">3. ¿Cómo agregar productos?</button>
                                           
                                        
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
                                    <h2 id="titulo_contenido">Bienvenido a Agro Market</h2>        
									
									<div id="contenedor_global">
																			
	                                    <div class="embed-responsive embed-responsive-16by9" id="contenedor_video">

	                                      <iframe id="video_principal" class="embed-responsive-item" src="https://www.youtube.com/embed/y08fFjF5g_k" frameborder="0" allowfullscreen></iframe>
	                                    </div>

                                    </div>
                                    
                                </div>
                                               
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>


                        


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div style="padding:10px;">
                                    <h2>Noticias</h2>                                            
                                     <div class="panel-body">        
                                        <p>En este espacio estarán las principales noticias y eventos de Agro Market.</p>                                 
                                        
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Prioridad</th>
                                                    <th>Fecha/Hora</th>
                                                    <th>Descripcion</th>                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Media</td>
                                                    <td>19/02/2015</td>
                                                    <td>Inauguración App Agro Market</td>                                                    
                                                </tr>


                                                <tr class="danger">
                                                    <td>2</td>
                                                    <td>Alta</td>
                                                    <td>19/02/2015</td>
                                                    <td>Nuevo Lazamiento</td>                                                    
                                                </tr>
                                               

                                               
                                            </tbody>
                                        </table>    
                                       
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
					function click_primeros_pasos(paso){

						/*
						<button type="button" class="btn btn-success col-md-12 botones" onclick="click_primeros_pasos(1)"></button>
											
											<button type="button" class="btn btn-warning col-md-12 botones" onclick="click_primeros_pasos(2)"></button>
                                            <button type="button" class="btn btn-warning col-md-12 botones" onclick="click_primeros_pasos('oro')"></button>

                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(2)">1. ¿Cómo funciona el Back Office?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(3)">2. ¿Cómo Editar el Perfíl?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(4)">3. ¿Cómo configurar el embudo?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(5)">4. ¿Cómo Usar Tus Paginas de Captura?</button>
                                            <button type="button" class="btn btn-danger col-md-12 botones" onclick="click_primeros_pasos(6)">5. ¿Cómo Instalar tu Aplicacion de Líderes?</button>*/

						var urlvideo="";
						var titulo="";
						if(paso==1){
							urlvideo="y08fFjF5g_k";
							titulo="Bienvenida";
						}
						if(paso==2){
							urlvideo="y08fFjF5g_k";
							titulo="Cómo funciona el backoffice";
						}
						if(paso==3){
							urlvideo="y08fFjF5g_k";
							titulo="";
						}
						if(paso==4){
							urlvideo="y08fFjF5g_k";
							titulo="";
						}
						if(paso==5){
							urlvideo="y08fFjF5g_k";
							titulo="";
						}

						if(paso==6){
							urlvideo="y08fFjF5g_k";
							titulo="";
						}

						if(paso=="oro"){
																
							
						}else{
							var cade=' <div class="embed-responsive embed-responsive-16by9" id="contenedor_video"><iframe id="video_principal" class="embed-responsive-item" src="https://www.youtube.com/embed/7Wk_-tVhvlo" frameborder="0" allowfullscreen></iframe></div>';
							$("#contenedor_global").html(""+cade);
							$("#video_principal").attr("src","https://www.youtube.com/embed/"+urlvideo);
						}

						$("#titulo_contenido").html(""+titulo);				

						
						
					}
				</script>


          

@stop