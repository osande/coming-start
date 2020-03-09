# Template Start

Simple template to start project with Codeigniter 3, Bootstrap 4 and Landing Page

## Download and Installation

To begin using this template, choose one of the following options to get started:
* Clone this repo: `git clone git@github.com:osande/coming-start.git ./coming`

## Usage

### Basic Usage

After downloading, simply edit the `/app/views/coming.php` and CSS files included with the template in your favorite text editor to make changes. These are the only files you need to worry about, you can ignore everything else! To preview the changes you make to the code, you can open the `localhost` file in your web browser.

### Folders
#### Don't touch /core folder!
```
/public_html/core
```

#### /assets folder
All assets for template
```
/public_html/assets
```

#### /vendor
Plugins and Components for template
```
/public_html/vendor
```

## Adding new page:
### create a new Controller at /app/controllers
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

## About

This template uses follow libraries/packages:

* Codeigniter [3.1.11](https://codeigniter.com/)
* Bootstrap [4.4.1](https://getbootstrap.com/)
* JQuery [3.4.1](https://jquery.com/)

Coming Template was created by and is maintained by **[Punch-Line](http://punch-line.pt/)**.

* https://osande.pt
