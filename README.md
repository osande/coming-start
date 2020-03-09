# coming-start
Just coming start template

Simple template to start project with coming page

#don't touch!
'/core

/assets
assets for template

##Adding new page:

###create a new Controller at /app/controllers
sample: file Coming.php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coming extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('coming'); // without .php
	}
}

###create a new View at /app/views
sample: file coming.php
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Coming Soon</title>
  <meta name="description" content="Coming Soon">
  <meta name="author" content="Punch-Line">
  <link rel="stylesheet" href="assets/css/coming.css?v=1.0">
</head>
<body>
  Coming Soon!!!
  <script src="assets/js/scripts.js"></script>
</body>
</html>

