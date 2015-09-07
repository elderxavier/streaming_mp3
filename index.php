<?php 
/**
 * Created by Elder Xavier
 * eldersx.5gbfree.com/	
 * Email: eldesxavier@gmail.com
 * Date: 6/9/2015 
 */

function playlis(){
  $array = array();
  $path = "music/";
  $diretorio = dir($path);  
  while($arquivo = $diretorio -> read()){
      if($arquivo !='.' && $arquivo !='..'){
         $array[] =  utf8_decode($arquivo);          
      }
  } 
  $diretorio -> close();
  return $array;
}
$playlist = playlis();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Language" content="pt-br">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" type="text/css" href="plugin/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/page.css">
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="plugin/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="plugin/ttw-music-player-min.js"></script>

    <link rel="shortcut icon" href="plugin/images/player-play.png">   
    <title>Streaming | Elder Xavier</title> 
    
</head>
<body>
<script type="text/javascript">
	$(document).ready(function(){
		var description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id tortor nisi. Aenean sodales diam ac lacus elementum scelerisque. Suspendisse a dui vitae lacus faucibus venenatis vel id nisl. Proin orci ante, ultricies nec interdum at, iaculis venenatis nulla. ';
        $('body').ttwMusicPlayer(myPlaylist, {
		    autoPlay:false, 
		    description:description,
		    currencySymbol:'R$ ',
		   	buyText:'',   				
		    jPlayer:{
		    	swfPath:'plugin/jquery-jplayer'
	   		}
        });  
	});

var myPlaylist = [
    <?php for ($i =0; $i < count($playlist) ; $i++): 
        $title = explode("/", $playlist[$i]);
    ?>
    {       
        mp3:'include/tocar.php?music=<?php echo $playlist[$i] ?>',
        title:'<?php echo $playlist[$i] ?>',
        artist:'Sample',
        rating:4,
        //buyNotActive:'not-active',
        buy:'http://eldersx.5gbfree.com/',
        price:'0.99',
        //duration:'0:30',
        //cover:'images/1.png'
        <?php
        
         if($i < (count($playlist) -1) ){
        echo "},";
    }else{
        echo "}";
    }
    ?>
    <?php endfor;?> 

];     
</script>
</body>

</html>

