<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Agro Market</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="../assets/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        
       

        <div class="login-container lightmode">

            <div style="width:100%; height:148px; position:absolute; bottom:0px; left:0px; background-image:url(../assets/img/backoffice/grass.png);">
                
            </div>
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Ingresa </strong> a tu cuenta </div>
                    <form action="/" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="txtusuario" placeholder="Usuario"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" id="txtpassword" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button  id="btn_login" class="btn btn-info btn-block">Ingresar</button>
                        </div>
                    </div>
                   
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 Agro Market Solutions Inc
                    </div>
                    <div class="pull-right">
                        <a href="#">Acerca</a> |
                        <a href="#">Privacidad</a> |
                        <a href="#">Soporte</a>
                    </div>
                </div>
            </div>


            
            
        </div>

       
        
    </body>

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>



  

                <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2q1X2P7eQ7qG3QQSsgBbOCkHrMU4r0Zk';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->



   <script type="text/javascript">

    $("#btn_login").click(function( event ) {
         event.preventDefault();
         ir_backoffice();
    });  


    function ir_backoffice(){

        var usuario=$("#txtusuario").val();
        var password=$("#txtpassword").val();
        

        var request = $.ajax({
          url: "login2",
          type: "POST",
          data:{
               usuario:usuario,
               password:password
          }
        });

        
        

        request.done(function(obj) { 
              
       
          if( obj.status == "ok"){

            var p=obj.perfil;
            console.log(""+p);
           
            window.open("home","_parent");      
           
            
             //window.open("home","_parent");        
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



</html>






