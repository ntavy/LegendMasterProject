<?php 
	class Route{
	    protected $controller = 'home';
    	protected $method = 'index';
    	protected $params = [];

	    public function __construct(){


	    	$req = $this->parseUrl();

	    	if (isset($req[0])) {
	    		$this->controller = $req[0];
	    		unset($req[0]);
	    	}

	    	$file = 'controllers/' . $this->controller . '.php';
	    	//echo $file;
			require_once $file;

			$controllerName = str_replace("-", "", $this->controller);

        	$controller = new $controllerName;


			if(isset($req[1])){
	            if(method_exists($controller, $req[1])){
	                $this->method = $req[1];
	                unset($req[1]);
	            }
	        }

	        $this->params = $req ? array_values($req): [];

	        call_user_func_array([$controller,$this->method], $this->params);
	    }
	    public function parseUrl(){
	        if(isset($_GET['req'])){
	            return $req = explode('/',filter_var(rtrim($_GET['req'],'/'),FILTER_SANITIZE_URL));
	        }
	    }

	}
?>