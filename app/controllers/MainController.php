<?php

namespace app\controllers;

use ishop\Cache;

use ishop\App;

class MainController extends AppController {

	public function indexAction() {
		$brands = \R::find('brand', 'LIMIT 3');
		$hits = \R::find('product', 'hit = "1" AND status = "1" LIMIT 8');
		$this->setMeta(App::$app->getProperty('shop_name'), 'description', 'keywords news helo');
		$this->set(compact('brands', 'hits'));
	}

}