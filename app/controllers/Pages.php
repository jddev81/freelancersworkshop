<?php

	class Pages extends Controller {

		public function __construct() {
			
		}

		public function index() {
			$pageDesc = 'This is a description';
			$data = [
				'page_title' => 'Freelancer\'s Workshop',
				'page_description' => $pageDesc
			];

			$this->view('pages/index', $data);
		}
		
	}