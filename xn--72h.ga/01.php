<?php

session_start();

if(isset($_GET['kill']))
{
    session_destroy();
    exit();
}

define('LOCAL', ($_SERVER['SERVER_ADDR'] === '127.0.0.1') ? 'localhost/' : '');

if(!isset($_SESSION['n'])) $_SESSION['n'] = $i;

$things = array(
    0 => array('◷', 'xn--92h.ga', 'xn--b3h.ga'),
    1 => array('◶', 'xn--82h.ga', 'xn--92h.ga'),
    2 => array('◵', 'xn--72h.ga', 'xn--82h.ga'),
    3 => array('◴', 'xn--b3h.ga', 'xn--72h.ga'),
);

$colors = array();

$colors[] = array('bfbfff', '7f7f7f', 'bfbfbf', 'ffffff');// Van wit naar blauw.
$colors[] = array('bfbfff', '7f7fff', 'bfbfbf', 'ffffff');// Van wit naar blauw.
$colors[] = array('bfbfff', '7f7fff', '003fff', 'ffffff');// Van wit naar blauw.
$colors[] = array('bfbfff', '7f7fff', '003fff', '0000ff');// Van wit naar blauw.

$colors[] = array('003fff', '7f7fff', '003fff', '0000ff');// Van blauw naar cyaan.
$colors[] = array('003fff', '007fff', '003fff', '0000ff');// Van blauw naar cyaan.
$colors[] = array('003fff', '007fff', '00bfff', '0000ff');// Van blauw naar cyaan.
$colors[] = array('003fff', '007fff', '00bfff', '00ffff');// Van blauw naar cyaan.

$colors[] = array('00bfbf', '007fff', '00bfff', '00ffff');// Van cyaan naar zwart.
$colors[] = array('00bfbf', '007f7f', '00bfff', '00ffff');// Van cyaan naar zwart.
$colors[] = array('00bfbf', '007f7f', '003f3f', '00ffff');// Van cyaan naar zwart.
$colors[] = array('00bfbf', '007f7f', '003f3f', '000000');// Van cyaan naar zwart.

$colors[] = array('003f00', '007f7f', '003f3f', '000000');// Van zwart naar groen.
$colors[] = array('003f00', '007f00', '003f3f', '000000');// Van zwart naar groen.
$colors[] = array('003f00', '007f00', '00bf00', '000000');// Van zwart naar groen.
$colors[] = array('003f00', '007f00', '00bf00', '00ff00');// Van zwart naar groen.

$colors[] = array('3fff00', '007f00', '00bf00', '00ff00');// Van groen naar geel.
$colors[] = array('3fff00', '7fff00', '00bf00', '00ff00');// Van groen naar geel.
$colors[] = array('3fff00', '7fff00', 'bfff00', '00ff00');// Van groen naar geel.
$colors[] = array('3fff00', '7fff00', 'bfff00', 'ffff00');// Van groen naar geel.

$colors[] = array('ffff3f', '7fff00', 'bfff00', 'ffff00');// Van geel naar wit.
$colors[] = array('ffff3f', 'ffff7f', 'bfff00', 'ffff00');// Van geel naar wit.
$colors[] = array('ffff3f', 'ffff7f', 'ffffbf', 'ffff00');// Van geel naar wit.
$colors[] = array('ffff3f', 'ffff7f', 'ffffbf', 'ffffff');// Van geel naar wit.

$colors[] = array('ffbfbf', 'ffff7f', 'ffffbf', 'ffffff');// Van wit naar rood.
$colors[] = array('ffbfbf', 'ff7f7f', 'ffffbf', 'ffffff');// Van wit naar rood.
$colors[] = array('ffbfbf', 'ff7f7f', 'ff3f3f', 'ffffff');// Van wit naar rood.
$colors[] = array('ffbfbf', 'ff7f7f', 'ff3f3f', 'ff0000');// Van wit naar rood.

$colors[] = array('ff003f', 'ff7f7f', 'ff3f3f', 'ff0000');// Van rood naar magenta.
$colors[] = array('ff003f', 'ff007f', 'ff3f3f', 'ff0000');// Van rood naar magenta.
$colors[] = array('ff003f', 'ff007f', 'ff00bf', 'ff0000');// Van rood naar magenta.
$colors[] = array('ff003f', 'ff007f', 'ff00bf', 'ff00ff');// Van rood naar magenta.

$colors[] = array('bf00bf', 'ff007f', 'ff00bf', 'ff00ff');// Van magenta naar zwart.
$colors[] = array('bf00bf', '7f007f', 'ff00bf', 'ff00ff');// Van magenta naar zwart.
$colors[] = array('bf00bf', '7f007f', '3f003f', 'ff00ff');// Van magenta naar zwart.
$colors[] = array('bf00bf', '7f007f', '3f003f', '000000');// Van magenta naar zwart.

$colors[] = array('3f3f3f', '7f007f', '3f003f', '000000');// Van zwart naar wit.
$colors[] = array('3f3f3f', '7f7f7f', '3f003f', '000000');// Van zwart naar wit.
$colors[] = array('3f3f3f', '7f7f7f', 'bfbfbf', '000000');// Van zwart naar wit.
$colors[] = array('3f3f3f', '7f7f7f', 'bfbfbf', 'ffffff');// Van zwart naar wit.

$color = $colors[$_SESSION['n']];
$thing = $things[$i];



if(isset($colors[$_SESSION['n'] + 4]))
{
    $_SESSION['n'] += 4;
}
else
{
    $_SESSION['n'] = $i;
}

$r = '<!doctype html>';
$r .= '<html dir="ltr" lang="en">';
$r .= '<head>';
$r .= '<meta charset="utf-8">';
if($i !== 3) $r .= '<link rel="dns-prefetch" href="https://xn--72h.ga/">';
if($i !== 2) $r .= '<link rel="dns-prefetch" href="https://xn--82h.ga/">';
if($i !== 1) $r .= '<link rel="dns-prefetch" href="https://xn--92h.ga/">';
if($i !== 0) $r .= '<link rel="dns-prefetch" href="https://xn--b3h.ga/">';
if(!isset($_GET['pause'])) $r .= '<meta http-equiv="Refresh" content="1; url=https://' . LOCAL . $thing[1] . '/">';
$r .= '<meta property="fb:admins" content="509248955">';
$r .= '<meta name="apple-mobile-web-app-capable" content="yes">';
$r .= '<meta name="description" property="og:description" content="By Alexander Christiaan Jacob, 2012.">';
$r .= '<meta name="image" property="og:image" content="https://' . LOCAL . 'xn--72h.ga/image.jpg">';
$r .= '<meta name="title" property="og:title" content="' . $thing[0] . '.ga">';
$r .= '<meta property="og:type" content="website">';
$r .= '<meta property="og:url" content="https://' . LOCAL . $thing[2] . '/">';
$r .= '<title>' . $thing[0] . '.ga</title>';
$r .= '<link rel="apple-touch-icon-precomposed" href="https://' . LOCAL . 'xn--72h.ga/apple-touch-icon-precomposed.png">';
$r .= '<link rel="author" href="https://alexanderchristiaanjacob.com/" title="Alexander Christiaan Jacob">';
$r .= '<link rel="canonical" href="https://' . LOCAL . $thing[2] . '/">';
$r .= '<link rel="shortlink" href="https://' . LOCAL . $thing[0] . '.ga/">';
$r .= '<style>';
$r .= '*{border:0;margin:0;outline:0;padding:0}';
$r .= 'body,canvas,html{display:block;height:100%;overflow:hidden;width:100%}';
$r .= '</style>';
$r .= '<script>

window.onload = window.onresize = init;

function init(e)
{
    canvas = document.getElementById("content");
    if(canvas.getContext)
    {
        context = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        var x = 0;
        var y = 0;
        var d = 256;
        context.fillStyle = "#' . $color[0] . '";
        context.translate(Math.floor(canvas.width/2), Math.floor(canvas.height/2-d));
        context.beginPath();
        context.moveTo(x-d, y+d);
        context.lineTo(x, y+d);
        context.arc(x, y+d, d, Math.PI * 1.5, Math.PI * 2, false);
        context.closePath();
        context.fill();
        context.fillStyle = "#' . $color[1] . '";
        context.translate(0,d);
        context.beginPath();
        context.moveTo(x, y-d);
        context.lineTo(x, y);
        context.arc(x, y, d, Math.PI * 2, Math.PI * 2.5, false);
        context.closePath();
        context.fill();
        context.fillStyle = "#' . $color[2] . '";
        context.translate(-d,0);
        context.beginPath();
        context.moveTo(x, y);
        context.lineTo(x + d, y);
        context.arc(x+d, y, d, Math.PI/2, Math.PI, false);
        context.closePath();
        context.fill();
        context.fillStyle = "#' . $color[3] . '";
        context.translate(0,-d);
        context.beginPath();
        context.moveTo(x + d, y);
        context.lineTo(x + d, y + d);
        context.arc(x + d, y + d, d, Math.PI, Math.PI * 1.5, false);
        context.closePath();
        context.fill();
    }
}

</script>';
$r .= '</head>';
$r .= '<body>';
$r .= '<canvas id="content" role="main"><p>This work of art requires <abbr>canvas</abbr> support.</p></canvas>';
$r .= '</body></html>';

header('Content-Type: text/html; charset=utf-8');
echo $r;
