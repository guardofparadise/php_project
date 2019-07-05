<?php

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller;
use app\widgets\currency\Currency;

class AppController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		new AppModel();
		$curr = Currency::getCurrencies();
		debug($curr);
	}

}
