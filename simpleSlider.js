

function simpleSlider(options){
	//arguments
	var carousel = options.carousel || document.getElementById("carouselWrap"),
		thumbsize = options.thumbsize || 150,
		speed = options.speed || 4000;
		
	//variables
	var car_imgs = new Array;
	var control  = document.createElement('div');
	var car_ctrls;
	
	control.setAttribute('id', 'controlWrap');
	control.className+='controlWrap';
	carousel.appendChild(control);	
	
	for(i = 0; i < carousel.children.length; i++){
		carousel.children[i].className.match(/\bcarouselImg\b/) ? car_imgs.push(carousel.children[i]) : '';
	}
	
	for(i = 0; i < car_imgs.length; i++){
		car_imgs[i].setAttribute('data-id', i);
		car_imgs[i].className += " " + i;
		
		var imgSRC = car_imgs[i].getAttribute('src');
		var carouselCTRL = document.createElement('span');
		
		carouselCTRL.className = 'carouselCtrl fluidTransTw '+i;
		carouselCTRL.setAttribute('data-id', i);
		carouselCTRL.innerHTML = '<span class="controlPreview fluidTransOn"><img src="'+ imgSRC +'" width="'+ thumbsize +'"></span>';
		control.appendChild(carouselCTRL);
	}
	
	car_ctrls = control.children;
	car_ctrls[0].className += ' active';
	car_imgs[0].className += ' active';
	
	function getClass(elem_list, the_class){
		
		var elem;
		
		for(var x = 0; x < elem_list.length; x++){
			elem_list[x].className.match(the_class) ? elem = elem_list[x] : '';
		}
		return elem;
	}

	function makeTransitionFN(){
	
		var currentIMG, 
			currentCtrl,
			nextIMG,
			newID;
	
		currentIMG = getClass(car_imgs, 'active');
		currentCtrl = getClass(car_ctrls, 'active');
		nextIMG = currentIMG.nextSibling.nextSibling;

		currentIMG.className = currentIMG.className.replace(' active', '');
		currentIMG.className += ' toLeft';	
		currentCtrl.className = currentCtrl.className.replace(' active', '');
			
		if(Object.prototype.toString.call(nextIMG) === '[object Comment]' || !nextIMG.className.match(/\bcarouselImg\b/)){
			nextIMG = car_imgs[0];
			
			for(i = 0; i < car_imgs.length; i++){
				car_imgs[i].className = car_imgs[i].className.replace(' toLeft', '');
			}
		}
		
		newID = nextIMG.getAttribute('data-id');
		currentCtrl = getClass(car_ctrls, newID)
		
		currentCtrl.className += ' active';
		nextIMG.className = nextIMG.className.replace(' toLeft', '');
		nextIMG.className += ' active';
			
	}
	
	var transitionTimer = setInterval(makeTransitionFN, speed);
	
	carousel.onmouseover = function(){
		clearInterval(transitionTimer);
	};
	
	carousel.onmouseout = function(){
		transitionTimer = setInterval(makeTransitionFN, speed);
	}
	
	for(i = 0; i < car_ctrls.length; i++){
		
		car_ctrls[i].onclick = function(){
			
			var clickedCtrl  = this,
				clickedID 	 = clickedCtrl.getAttribute('data-id'),
				prevCtrl 	 = getClass(car_ctrls, 'active'),
				prevActiveID = prevCtrl.getAttribute('data-id'),
				prevImg,
				clickedImg;
			
			clickedCtrl.className += ' active';
			prevCtrl.className = prevCtrl.className.replace(' active', '');
	
			if(clickedID < prevActiveID){
				for(var init = clickedID; init < prevActiveID; init++){
					car_imgs[init].className = car_imgs[init].className.replace(' toLeft', '');
				}	
			}
			
			else{
				for(var init = prevActiveID; init < clickedID; init++){
					car_imgs[init].className += ' toLeft';
				}	
			}
			
			prevImg = getClass(car_imgs, 'active');
			clickedImg = getClass(car_imgs, clickedID);
			
			prevImg.className = prevImg.className.replace(' active', '');
			clickedImg.className += ' active';
		}
		
	}
}

		
