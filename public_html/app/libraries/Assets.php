<?php

class Assets extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function assets()
    {
        $file = APPPATH . '/modules/' . implode('/', $this->uri->segments);

        $path_parts = pathinfo($file);

        $file_type = isset($path_parts['extension']) ? strtolower($path_parts['extension']) : '';

        if (!is_file($file)) {
            header("HTTP/1.0 404 Not Found");
            return;
        }
        $readFile = false;

        switch ($file_type) {
            case 'css':
                $contentType = 'text/css';
                break;

            case 'js':
                $contentType = 'text/javascript';
                break;

            case 'json':
                $contentType = 'application/json';
                break;

            case 'xml':
                $contentType = 'text/xml';
                break;

            case 'pdf':
                $contentType = 'application/pdf';
                break;

            case 'jpg' || 'jpeg' || 'png' || 'gif':
                $contentType = 'image/' . $file_type;
                $readFile    = true;
                break;

            case 'mpg' || 'mp4':
                $contentType = 'video/' . $file_type;
                $readFile    = true;
                break;
        }

        // Create Headers and display/download the file
        header("Content-type: $contentType");
        $seconds_to_cache = 3600;
        $ts               = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
        header("Expires: $ts");
        header("Pragma: cache");
        header("Cache-Control: max-age=$seconds_to_cache");
        if ($readFile) {
            readfile($file);
        } else {
            include $file;
        }

        exit;
    }

}
