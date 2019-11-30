<?php
	class Controller
	{
		function __construct()
		{
			$this->view = new View();
		}

		public function loadModel($model_name){
		    // تبدیل حرف اول ارسال شده به این متد به حرف بزرگ
		    $model = "Models/" . ucwords($model_name) . ".php";

		    // بررسی این که آیا این فایل وجود دارد یا خیر
		    if(file_exists($model)){
		        require_once $model;
		        // ساخت یک نمونه از مدل
		        $this->model = new $model_name();
            }
        }
	}
	