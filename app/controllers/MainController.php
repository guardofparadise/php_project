<?php

namespace app\controllers;

use ishop\Cache;

use ishop\App;

class MainController extends AppController {

	public function indexAction() {

		$this->setMeta(App::$app->getProperty('shop_name'), 'description', 'keywords news helo');
		
	}

}