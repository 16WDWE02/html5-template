<?php

class HomeController extends PageController {

	// Properties
	private $latestProducts;

	// Constructor
	public function __construct() {

		// Prepare the title
		$this->title = 'Home page';

		// Prepare meta description
		$this->metaDesc = 'See our wonderful range of kids toys and gifts';

		// Get latest products


	}

	public function buildHTML() {
		echo $this->title;
	}





}