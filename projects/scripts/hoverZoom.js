/*
Hover Zoom
Author: Brian Gonzalez (@fi2o)
Feel free to use it however you like!

parameters:
	imgWrap -> Type: object; is the <img/>'s enclosing parent.
	zoomW/zoomH -> Type: int; specify width and height, respectively, of the hover zoom.
	
variables:
	imgSRC -> hovered image's 'src' attribute. If your large scale image is located 
			  in another directory, you should change this variable's value with split()
			  and specify the route on the append.
*/

function hoverZoom(options){
	
	var imgWrap = options.imgWrap || $('.thumb'),
		zoomW = options.zoomW || 200,
		zoomH = options.zoomH || 200,
		imgBoundX,
		imgBoundY,
		imgPosX,
		imgPosY,
		thisZoom,
		zoomImg;
		
		imgWrap.on({
			mouseenter: function(){
				var currImg = $(this).children('img');
				imgBoundX = currImg.width();
				imgBoundY = currImg.height();
				imgPosX = currImg.offset().left;
				imgPosY = currImg.offset().top;
				thisZoom = $(this).children('.zoom');
				
				if(thisZoom.children().length === 0){
					var imgSRC = currImg.attr('src');
					$(this).append('<div class="zoom"><img src='+ imgSRC +' /></div>');
					thisZoom = $(this).children('.zoom');
				}
				
				else{
					thisZoom.show();
				}
				zoomImg = thisZoom.children('img');
			},
			mouseleave: function(){
				thisZoom.hide();
			}
		});

		imgWrap.on('mousemove', function(pointer){
			
			var cursorPosX = pointer.pageX - imgPosX;
			var cursorPosY = pointer.pageY - imgPosY;
			
			if((cursorPosX > 0 && cursorPosX <= imgBoundX) && (cursorPosY > 0 && cursorPosY <= imgBoundY)){
				var posTranslationX = (cursorPosX*2.825)-(zoomW/2);
				var posTranslationY = (cursorPosY*2.825)-(zoomH/2);

				thisZoom.css({
					left: (cursorPosX-(zoomW/2)),
					top: (cursorPosY-(zoomH/2))
				}).show();
				
				zoomImg.css({
					left: -posTranslationX,
					top: -posTranslationY
				});
			}
			
			else{
				thisZoom.hide();
			}
		});
}