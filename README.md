# Template Start

Simple template to start project with Codeigniter 3, Bootstrap 4 and Landing

## Download and Installation

To begin using this template, choose one of the following options to get started:
* [Download the latest release on Start Bootstrap](https://startbootstrap.com/template-overviews/creative/)
* Install via npm: `npm i startbootstrap-creative`
* Clone the repo: `git clone https://github.com/BlackrockDigital/startbootstrap-creative.git`
* [Fork, Clone, or Download on GitHub](https://github.com/BlackrockDigital/startbootstrap-creative)

## Usage

### Basic Usage

After downloading, simply edit the HTML and CSS files included with the template in your favorite text editor to make changes. These are the only files you need to worry about, you can ignore everything else! To preview the changes you make to the code, you can open the `index.html` file in your web browser.

## Don't touch!
' /core

## /assets folder
assets folder for template

## Adding new page:
#### create a new Controller at /app/controllers
sample: file Coming.php
```php
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
```

#### create a new View at /app/views
sample: file coming.php
```html
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
```

# Packages:
#### Codeigniter [3.1.11](https://codeigniter.com/)
#### Bootstrap [4.4.1](https://getbootstrap.com/)
#### JQuery [3.4.1](https://jquery.com/)

## About

Start Bootstrap is an open source library of free Bootstrap templates and themes. All of the free templates and themes on Start Bootstrap are released under the MIT license, which means you can use them for any purpose, even for commercial projects.

* https://startbootstrap.com
* https://twitter.com/SBootstrap

Start Bootstrap was created by and is maintained by **[David Miller](http://davidmiller.io/)**, Owner of [Blackrock Digital](http://blackrockdigital.io/).

* http://davidmiller.io
* https://twitter.com/davidmillerskt
* https://github.com/davidtmiller

Start Bootstrap is based on the [Bootstrap](http://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).
