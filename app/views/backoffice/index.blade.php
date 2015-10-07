<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>AgroMarket - Backoffice</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="../assets/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->     

         <style type="text/css">
            .botones{
                text-align: left;
                margin-top: 5px;
            }
            p{
                text-align: justify;
            }
         </style>                               
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Agro Market Solutions Inc.</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="../assets/img/usuarios/{{$foto}}" alt="{{$nombres}}"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="../assets/img/usuarios/{{$foto}}" alt="{{$nombres}}"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{{$nombres}}</div>
                                <div class="profile-data-title">{{$perfil}}</div>
                            </div>
                            <div class="profile-controls">
                                <a href="perfil" class="profile-control-left" title="Edición de Perfil"><span class="fa fa-info"></span></a>
                               
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menú</li>
                    <li class="active">
                        <a href="home"><span class="fa fa-home"></span> <span class="xn-text">Inicio</span></a>                        
                    </li>       

                    
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Productos</span></a>
                        <ul>
                            <li><a href="gestion_productos"><span class="fa fa-user"></span>Gestiónar Productos</a></li>                
                            <li><a href="productos_especiales"><span class="fa fa-user"></span>Productos 01 8000</a></li>                              
                        </ul>
                    </li>   


                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Reportes</span></a>
                        <ul>
                            <li><a href="gestion_productos"><span class="fa fa-user"></span>Estadisticas Inventario</a></li>                
                            <li><a href="productos_especiales"><span class="fa fa-user"></span>Empresas</a></li>                              
                        </ul>
                    </li>   
                
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Administración</span></a>
                        <ul>
                            <li><a href="gestion_empresas"><span class="fa fa-user"></span>Gestión Empresas</a></li>
                            <li><a href="gestion_usuarios"><span class="fa fa-user"></span>Gestión Usuarios</a></li>
                            <li><a href="gestion_perfiles"><span class="fa fa-user"></span>Gestión Perfiles</a></li>          
                            <li><a href="backups"><span class="fa fa-user"></span>Generar BackUp</a></li>                           
                        </ul>
                    </li>   
                    

                     <li>
                        <a href="login"><span class="fa fa-sign-out"></span> <span class="xn-text">Salir</span></a>                        
                    </li>       
                   
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">

               
                
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                  
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Inicio</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-4">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-success widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Empresas</div>                                                                        
                                        <div class="widget-subtitle">Registradas</div>
                                        <div class="widget-int">123</div>
                                    </div>

                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                      
                        <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-info widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">25</div>
                                    <div class="widget-title">Productos por Aprobar</div>
                                    <div class="widget-subtitle">Productos línea 01 8000 123456</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-4">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    
                                        
                                        <a href="#"><span class="fa fa-calendar"></span> Próximo Evento</a>
                                        
                                    
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                @yield('contenido')




            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span>Quieres Cerrar <strong>Sesión</strong> ?</div>
                    <div class="mb-content">
                        <p>Está seguro de Salir de Marketer Money Pro?</p>                    
                        <p>Presiona No si aún quieres seguir trabajando. Presiona SI para cerrar la sesión</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">SI</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='../assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="../assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="../assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="../assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='../assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='../assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='../assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="../assets/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="../assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="../assets/js/plugins/daterangepicker/daterangepicker.js"></script>

        
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
       
        
        <script type="text/javascript" src="../assets/js/plugins.js"></script>        
        <script type="text/javascript" src="../assets/js/actions.js"></script>
        
        <script type="text/javascript" src="../assets/js/demo_dashboard.js"></script>
        
         @yield('scripts')
        <!--Start of Zopim Live Chat Script-->



<!--End of Zopim Live Chat Script-->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->   




    </body>
   
</html>






