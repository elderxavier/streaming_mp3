<?php
/*$path = "music/";
$diretorio = dir($path);
echo "Lista de Arquivos do diretório '<strong>".utf8_decode($path)."</strong>':<br />";
while($arquivo = $diretorio -> read()){
  if($arquivo !='.' && $arquivo !='..'){
    echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; 
  }
} 
$diretorio -> close();

set_time_limit(0);
$songCode = $_REQUEST['c'];
//$filePath = 'music/Boston Pops-John Williams - Super Mario Brothers Theme.mp3';
$filePath = 'music/Gilberto Gil - 05 Pela Internet.mp3';
$bitrate = 128;
$strContext=stream_context_create(
     array(
         'http'=>array(
         'method'=>'GET',
         'header'=>"Accept-language: pt-BR, en \r\n"
         )
     )
 );


 header('Content-type: audio/mpeg');
 header ("Content-Transfer-Encoding: binary");
 header("Cache-Control: max-age=2592000, public");
 header ("Pragma: no-cache");
 header('Content-Length: '.filesize($filePath));
 header ("icy-br: " . $bitrate);

 $fpOrigin=fopen($filePath, 'rb', false, $strContext);
 while(!feof($fpOrigin)){
   $buffer=fread($fpOrigin, 4096);
   echo $buffer;
   flush();
 }
 fclose($fpOrigin);
 */
/*

 $stat = stat($filePath);
//$stat ="";
echo '<pre>', print_r($stat);
*/
/*
 function playlis(){
  $array[] = array();
  $path = "music/";
  $diretorio = dir($path);
  echo "Lista de Arquivos do diretório '<strong>".utf8_decode($path)."</strong>':<br />";
  while($arquivo = $diretorio -> read()){
      if($arquivo !='.' && $arquivo !='..'){
         //$array =  $path.$arquivo;
          echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; 
      }
  } 
  $diretorio -> close();
 // return $array;
}

$playlist = playlis();
?>
<ul>
<?php foreach ($playlist as $key => $value): ?>
  <li> <?php echo $value ?></li>
<?php endforeach;?>
</ul>
$playlist = "play";
print "
    {     
      mp3:'include/tocar.php?music=".$playlist."',
        title:'.$playlist.',
        artist:'Sample',
        rating:4,
        //buyNotActive:'not-active',
        buy:'http://eldersx.5gbfree.com/',
        price:'0.99',
        duration:'0:30',
        cover:'mix/1.png'
        ";
*/