<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return <<<EOF
<html>
<head>f
<title>Hello/Index</title>
</head>
<body>
 <h1>これはHelloコントローラのindexアクションです</h1>
</body>
</html>
EOF;
    }
}