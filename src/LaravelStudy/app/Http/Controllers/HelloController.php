<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16px;color:#999;}
h1{font-size:100px;text-align:right;color:#eee;margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';
function tag($tag,$txt)
{
    return "<{$tag}>{$txt}</{$tag}>";
}
class HelloController extends Controller
{
    // public function index($id='anonymous',$pass='no pass')
    // {
    //     global $head, $style, $body, $end;
    //     $html = $head. tag('title','Hello/Index'). $style. $body. tag('h1','Index'). tag('p','this is Index Page'). '<a href="/hello/other">go to Other Page</a>'. $end;
    //     return $html;
    // }
    // public function other()
    // {
    //     global $head, $style, $body, $end;
    //     $html = $head. tag('title','Hello/Other'). $style. $body. tag('h1','Other'). tag('p','this is Other Page'). $end;
    //     return $html;
    // }
    // public function index(Request $request, Response $response)
    // {
    //     global $head, $style, $body, $end;
    //     $html = $head. tag("title","HelloIndex"). 
    //             $style. 
    //             $body. 
    //             tag("h1","Hello"). 
    //             tag("h3","Request"). 
    //             tag("pre",$request). 
    //             tag("h3","Response"). 
    //             tag("pre",$response). 
    //             tag("p",$response->status());
    //             $end;
    //     $response->setContent($html);
    //     return $response;
    // }
    public function index($name='kmjak')
    {
        $data = [
            "name" => $name,
        ];
        return view('hello.index',$data);
    }
    public function post(Request $request, $name='kmjak')
    {
        $msg = $request->msg;
        $data = [
            "name" => $name,
            "msg" => $msg
        ];
        return view('hello.index',$data);
    }
    public function odd()
    {
        return view('hello.odd');
    }
}
