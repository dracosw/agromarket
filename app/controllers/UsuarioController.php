<?php

class UsuarioController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function guardar($arrainput){
		$campos="";

		$cadena_mostrar="";

		
		//$valorempresa = "";


		if($arrainput['tipo']!="eliminar"){
		
	                         
                         
			
			$codigo_usuario=$arrainput['codigo_usuario'];
			$password=$arrainput['password'];

			$cadena_password="";
			if($password!=""){
				$cadena_password=",password= password('$password') ";
			}
			
			

			$telefono=$arrainput['telefono'];
			$foto=$arrainput['foto'];
			$descripcion=$arrainput['descripcion'];
	

			$campos=" usuarionegocio='$usuario_negocio', usuarionegocio2='$usuario_negocio2', usuarionegocio3='$usuario_negocio3', usuarionegocio4='$usuario_negocio4', telefono='$telefono', foto='$foto', facebook='$facebook', twitter='$twitter', skype='$skype', descripcion='$descripcion' $cadena_password  ";
			
		}else{
			//campos para eliminar 
			$campos=" estado_fk= 2 ";
		}



		if($arrainput['codigo_usuario']==""){
			//insertar
			
			$result=DB::insert("insert into usuarios set $campos");
			
		}else{
			// modificar o eliminar 
			
			$result=DB::update("update usuarios set $campos where codigo=".$arrainput['codigo_usuario']);
			
		}
		
		return Response::json(array("status"=>'ok',"mensaje"=>"Proceso generado correctamente."));
	}





	public function guardar_embudo($arrainput){
		$campos="";
		$cadena_mostrar="";

		if($arrainput['tipo']!="eliminar"){
		

			$codigo_autoresponder=$arrainput['codigo_autoresponder'];
			$codigo_formulario=$arrainput['codigo_formulario'];
			$codigo_chat=$arrainput['codigo_chat'];
			$autoresponder=$arrainput['autoresponder'];
			$url_calendario=$arrainput['url_calendario'];

	

			$campos=" codigo_autoresponder='$codigo_autoresponder',codigo_formulario='$codigo_formulario', codigo_chat='$codigo_chat', autoresponder='$autoresponder', url_calendario='$url_calendario'  ";
			
		}else{
			//campos para eliminar 
			$campos=" estado_fk= 2 ";
		}



		if($arrainput['codigo_usuario']==""){
			//insertar
			
			$result=DB::insert("insert into usuarios set $campos");
			
		}else{
			// modificar o eliminar 
			
			$result=DB::update("update usuarios set $campos where codigo=".$arrainput['codigo_usuario']);
			
		}
		
		return Response::json(array("status"=>'ok',"mensaje"=>"Proceso generado correctamente."));
	}


	public function get_usuarios($usuario){
		$sql_uni="SELECT usu.* 
				  from usuarios usu
				  where usu.patrocinador_fk='$usuario' ";

		$results = DB::select($sql_uni);	

		$arraUsuario=array();	

		for($ind=0;$ind<count($results);$ind++){
			$objDato=$results[$ind];
			array_push($arraUsuario,$objDato);
		}
		
		return $arraUsuario;
	
	}




}
