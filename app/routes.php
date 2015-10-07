<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	Session::forget('auth');
	Session::put('empresa', "1");//por defecto para la udi
	return Redirect::to('/login');
});




Route::get('/login', function()
{
	$vista_formularios = View::make('login.index');

	
	Session::put('auth', '');
	return $vista_formularios;
});


Route::post('/guardar_usuario',function(){
	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$pagina_controller=new UsuarioController();
		
		return $pagina_controller->guardar($arrainput);
		
	}	
});


Route::post('/guardar_embudo',function(){
	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$pagina_controller=new UsuarioController();
		
		return $pagina_controller->guardar_embudo($arrainput);
		
	}	
});



// RUTA GERNERICA PARA FORMULARIOS
// ######################################################
Route::get('/{formulario}', function($formulario)
{
	//verificacion de session
	$value = Session::get('auth');
	$pagina_controller=new AdminController();
	$result=$pagina_controller->verified($value);







	//si la sesion == ok entra
	if($result[0]["status"]=="ok"){		
		//carga la vista del formulario. Los datos del Usuario
		$datos_usuario=$result[0]["datos"];		
		if($formulario=="home"){
			$vista_formularios = View::make('home.index');
		}else{
			$vista_formularios = View::make('formularios.'.$formulario);
		}
		$vista_formularios->formulario=$formulario;		
		$codigo_usuario="".$datos_usuario[0]->codigo;
		$vista_formularios->codigo_usuario="".$codigo_usuario;	

		//datos usuario

		$vista_formularios->foto="".$datos_usuario[0]->foto;
		$vista_formularios->nombres="".$datos_usuario[0]->nombres;

		$vista_formularios->email="".$datos_usuario[0]->email;
		$vista_formularios->telefono="".$datos_usuario[0]->telefono;
		$vista_formularios->perfil="".$datos_usuario[0]->perfil;

		$fechaactual=date("Y-m-d");  
		$vista_formularios->fechaactual=$fechaactual;
		
		return $vista_formularios;
	}else{		
		return Response::make('<h1>No estas autorizado para entrar a esta pagina</h1>'.$value, 401);

	}	
});



Route::post('/login2', function()
{

	if(Request::ajax()){
		$arrainput=array();
		$arrainput=Input::all();

		$usuario=$arrainput["usuario"];
		$password=$arrainput["password"];

		$sql_uni="SELECT * from usuarios where usuario = '$usuario' and password=password('$password') ";
		$results = DB::select($sql_uni);
		
		$nombre_perfil="";
		for($ind=0;$ind<count($results);$ind++){
			$objDato=$results[$ind];
		}
		
		if(count($results)>0){
			$hoy = date('h-i-s,j-m-y');
			$sessid = Hash::make($hoy."$usuario");
			Session::put('auth', $sessid);

			$sql_uni="UPDATE usuarios SET sesid='$sessid' where usuario='$usuario'";
			$results = DB::update($sql_uni);	
			
			return Response::json(array('mensaje' =>    'Bienvenido', "status"=>'ok'));
		}else{
			Session::forget('auth');
			return Response::json(array('mensaje' =>    'El usuario no existe', "status"=>'error'));
		}	

	}

});




