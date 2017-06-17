<?php

class Share extends Controller{

	public function Index() {

		$modelview = new ShareModel();
		return $this->returnView($modelview->Index(), true);
	}

	public function add() {

		$modelview = new ShareModel();
		return $this->returnView($modelview->add(), true);
	}

}