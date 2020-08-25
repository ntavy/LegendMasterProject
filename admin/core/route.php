<?php 
	class Route{
	    protected $controller = 'home';
    	protected $method = 'index';
    	protected $params = [];
	    public function __construct(){
	    	$req = $this->parseUrl();
            $index = 0;
            if (isset($req[$index])) {
	    		$this->controller = $req[$index];
	    		unset($req[$index]);
	    	}
	    	$file = 'controllers/' . $this->controller . '.php';
	    	//echo $file;
			require_once $file;
			$controllerName = str_replace("-", "", $this->controller) . 'AdminController';
        	$controller = new $controllerName;
			if(isset($req[$index+1])){
	            if(method_exists($controller, $req[$index+1])){
	                $this->method = $req[$index+1];
	                unset($req[$index+1]);
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