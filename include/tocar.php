<?php
/**
 * Created by Elder Xavier
 * eldersx.5gbfree.com/	
 * Email: eldesxavier@gmail.com
 * Date: 6/9/2015 
 */
require_once(dirname(__FILE__).'/../lib/videostream.class.php');
//$filePath = 'music/Gilberto Gil - 05 Pela Internet.mp3';
$req = $_REQUEST;
//$filePath = (String)dirname(__FILE__).'../music/'.$req['music'];
$filePath = '../music/'.$req['music'];
//var_dump($filePath);
echo $filePath;
$stream = new VideoStream($filePath);
$stream->start();