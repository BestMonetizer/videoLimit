<?php 
//making connection to database and table selection
require_once("/include/connect.php");
$title="Play";//title change variable in header.php
$inc="flowplayer/flowplayer-3.2.13.min.js";//script inclusion variable in header.php
//include the header
require("/include/header.php");
?>
<!--                    Page content Start here        -->

<section class="section_light">
   
        <div class="row">
        <h2>VIDEO</h2>
          <?php      
          
          
		  $unpaidTIME=5;
		  $unRegTIME=2;
          
          if(isset($_SESSION['id']) && ($_SESSION['password']) && $_SESSION['status']==0)
		  {
		  	echo "You are unpaid<br/>";
			$time=$unpaidTIME;
			$par="\"duration\":{$time},";
		  }
		  else if(isset($_SESSION['id']) && ($_SESSION['password']) && $_SESSION['status']==1)
		  {
		  	echo "You are paid<br/>";
			$par=Null;
			
		  }
		  else 
		  {
			echo "You are not logged in<br/>";
			$time=$unRegTIME;
			$par="\"duration\":{$time},";
		  }
          
          
          $videofilename = 'video.flv';    
$hash = md5('1234');
$timestamp = time();
$videoPath = $hash.'/'.$timestamp.'/'.$videofilename;
echo '
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="500" height="400" type="application/x-shockwave-flash" data="flowplayer/flowplayer-3.2.18.swf">
    <param name="wmode" value="transparent"/>
    <param name="movie" value="flowplayer/flowplayer.securestreaming-3.2.9.swf" />
    <param name="allowfullscreen" value="true" />
    <param name="timestamp" value="'.$timestamp.'" />
    <param name="token" value="'.$hash.'" />
    <param name="autoPlay" value="false"/>  
    <param name="streamName" value="'.$videofilename.'" />      
    <param name="flashvars" value=\'config={"clip":{"url":"secure/'.$videoPath.'","autoPlay":false,'.$par.'"autoBuffering":true}}\'/>
        
        <!-- EMBED tag for Netscape Navigator 2.0+ and Mozilla compatible browsers -->
        
		<embed type="application/x-shockwave-flash" width="500" height="400"
    src="flowplayer/flowplayer-3.2.18.swf" movie="flowplayer/flowplayer.securestreaming-3.2.9.swf" timestamp="'.$timestamp.'" token="'.$hash.'" streamName="'.$videofilename.'"
    flashvars=\'config={
    	"clip":
    	{
    		"url":"secure/'.$videoPath.'","autoPlay":false,
    		'.$par.'
    		"autoBuffering":true
    	}
    }\'/>
    
</object>';
        ?>
        </div>
        
    </section>

<!-- ######################## Section ######################## -->

   <section  class="section_dark">
   
      <div class="row"> 
      
      <h2>Latest Content</h2>
      
        
      
      </div>
      
    </section>
      
<!-- ######################## Section ######################## -->

<section class="section_main">

      <h2 style="text-align:center">Some more Stuff</h2>
      
      <div class="row">
      
          <article class="six columns">
                <div class="panel">
                    <h3>Login</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
          
              
          <article class="six columns">
                <div class="panel">
                    <h3>Upload</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec cursus fermentum metus, id commodo sapien. Donec cursus fermentum metus.</p>
                  <a href="#" class="button secondary small radius">Learn More &raquo;</a>
                </div>
          </article>
  
      </div>
      
      
</section>



<!--                    Page content ends here         -->
<?php
//including footer
require("/include/footer.php");
?>