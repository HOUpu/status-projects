<?php

header("Content-type: image/svg+xml");

$title = isset($_GET['title']) ? $_GET['title'] : 'undefined';
$description = isset($_GET['desc']) ? $_GET['desc'] : 'undefined';
$bgColor = isset($_GET['bgColor']) ? '#'.$_GET['bgColor'] : '#ffffcc';
$strokeColor = isset($_GET['strkColor']) ? '#'.$_GET['strkColor'] : '#ffbf00';
$textColor = isset($_GET['txtColor']) ? '#'.$_GET['txtColor'] : '#000000';

?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200">
  <rect x="2" y="2" width="190" height="190" id="postit"
    style="fill:<?= $bgColor ?>;stroke:<?= $strokeColor ?>;stroke-width:5;fill-opacity:1.0;stroke-opacity:0.3"/>
  <text y="35" transform="translate(100)" style="font-size:30px; font-family: DejaVu Sans,Verdana,Geneva,sans-serif; font-weight: bold; font-style: bold; fill:<?= $textColor ?>">
    <tspan x="0" text-anchor="middle"><?= $title ?></tspan>
  </text>

  <switch>
  <foreignObject x="12" y="55" width="180" height="120"
    style=" font-weight: normal; font-style: normal;">
  <p xmlns="http://www.w3.org/1999/xhtml" style="font-size:18px; font-family:Cursive; color:<?= $textColor ?>"><?= $description ?></p>
  </foreignObject>

  <text x="12" y="75" style="font-size:18px; font-family: Cursive; font-weight: normal; font-style: normal">
    SVG viewer not supported.
  </text>
  </switch>
</svg>