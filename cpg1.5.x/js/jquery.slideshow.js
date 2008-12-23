/**
 * This file contains dispalyimge.php specific javascript
 */


$(document).ready(function(){

		/** set variable from php  */
		var Time 	= 	js_vars.Time;
		var pos 	= 	js_vars.position;
		var album 	= 	js_vars.album;
		var PiCount = 	js_vars.Pic_count;
		var Pid		=   js_vars.Pid;
		var run_slideshow = js_vars.run_slideshow;
		var Title 	=	"";

		/** create a Image object */
	 	var i = new Image();
	 
		/** implement ajax call to get pic url and title */
	 	function loadImage (j){
	  	$.getJSON("displayimage.php?ajax_show=1&pos="+j+"&album="+album, function(data){
				i.src 	= data['url'];
				Title 	= data['title'];
				Pid		= data['pid'];
              }); 
		}
		/** start the slideshow */
		if(PiCount>1) runSlideShow();
 		/**  next pic view and keeping hold the previous pitcure ID */
 		var PidTemp = '';
 		var timer 	= '';
 			
		/** set time to run slideshow */
		function runSlideShow(){
		 timer =	setTimeout(	showNextSlide,Time);
		}
	
 		function showNextSlide(){
 			
			 /** clear time out */
			clearTimeout(timer);
 			$("#load").show();
 			
 			/** now load a image */			
			pos = parseInt(pos) + 1;
			if (pos  == (PiCount)){ pos=0; }
			loadImage(pos);
			        	
			var temp = i.src;
			
			i.onload = function() {
				
				if(i.complete){
				$("#showImage").attr({
					src: i.src,
					title: Title,
					alt: "jQuery Logo",
					style: "visibility: hidden;"
				}).fadeIn("fast");
				
				$("#showImage").css('visibility', 'visible');
				$("#title").html(Title);
				/** set Pid to temp */
				PidTemp = Pid; 
			/** hide the loader*/
			$("#load").hide();
			
			//now set time to loaded image.
			runSlideShow();
			}
		}		
	}

	
	/** close the slide show and will load the current show imags details*/
	$("#back-to").click(function () { 
     self.document.location = 'displayimage.php?album='+album+'&pid='+PidTemp+'#top_display_media' ;
    });
});
