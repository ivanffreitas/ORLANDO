<?php include_once("header.php");?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css" >
        
        <section>
        	
            <div id="call-to-action">
            
	            <div class="container">
    	    		
                    <div class="row text-center">
                    	<h2>Videos</h2>
                        <hr>
                    </div> 
                    
                    <div class="row">
                    	<div class="player">
                    		<video src="mp4/intelbras.mp4" controls poster="img/carrinho.jpg"></video>
                        </div>
                        <!-- video com autoplay <video src="mp4/intelbras.mp4" autoplay></video>-->
                    </div>
                    <div class="row">
                    	<audio src="mp3/audio.mp3" controls></audio>
                        <!-- audio com auto play e escondido <audio src="mp3/audio.mp3" autoplay style="display:none"></audio>-->
                    </div>
                       
        	    </div>
            
            </div>
            
            <div id="news" class="container" style="top:0">
            	
                <div class="row text-center">
                	<h2>latest news</h2>
                	<hr>
                </div>
            	<div class="row thumbnails">
            		<div class="item" data-video="intelbras"><!--intelbras nome do video-->
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Noticia</h3>
                        </div>
                	</div>
                    <div class="item" data-video="carrinho">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Carrinho</h3>
                        </div>
                	</div>                                   	
                    <div class="item" data-video="intelbras">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Noticia</h3>
                        </div>
                	</div>
                    <div class="item" data-video="carrinho">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Carrinho</h3>
                        </div>
                	</div>                                   	
                    <div class="item" data-video="intelbras">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Noticia</h3>
                        </div>
                	</div>
                    <div class="item" data-video="carrinho">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Carrinho</h3>
                        </div>
                	</div>                                   	
                    <div class="item" data-video="intelbras">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Noticia</h3>
                        </div>
                	</div>
                    <div class="item" data-video="carrinho">
                    	<div class="item-inner">
	                		<img src="img/noticia-thumb.jpg" alt="Noticia">
    	                    <h3>Carrinho</h3>
                        </div>
                	</div>                                   	
            	</div>
                
            </div>
            
            
            
            
        </section>
        
        <?php include_once("footer.php");?>  
        
<script src="lib/plyr/dist/plyr.js"></script>
<script>
			(function(d, p){
				var a = new XMLHttpRequest(),
					b = d.body;
				a.open("GET", p, true);
				a.send();
				a.onload = function(){
					var c = d.createElement("div");
					c.style.display = "none";
					c.innerHTML = a.responseText;
					b.insertBefore(c, b.childNodes[0]);	
				}
			});(document, "lib/plyr/dist/sprite.svg");
		</script>
		<script>
        	$(function(){
				$(".thumbnails .item").on("click", function(){
					$("video").attr({
						"src":"mp4/"+$(this).data('video')+".mp4",
						"poster":"img/"+$(this).data('video')+".jpg"
					});
				});
				
				plyr.setup();//disparando player PLYR
			});
        </script>