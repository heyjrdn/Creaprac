window.onload = function() {
	var _pagerLeft = document.querySelector('#pager_left'),
	_pagerRight = document.querySelector('#pager_right'),
	_pagerList = document.querySelectorAll('.pager-list'),
	_products = document.querySelector('#products_list'),
	_slide = 1;
			
	_pagerLeft.onclick = function() {
		if ( _slide > 1 ) {
			_slide--;
			move(_slide);
		}
		return false;
	};
	
	_pagerRight.onclick = function() {
		if ( _slide < _pagerList.length ) {
			_slide++;
			move(_slide);
		}
		return false;
	};
	
	for ( var i = 0; i < _pagerList.length; i++ ) {
		_pagerList[i].onclick = function() {
			_slide = parseInt(this.getAttribute('data-slide'));
			move(_slide);
			
			return false;
		};
	}
	
	function move(slide) {
		_products.style.left =  ( ( slide - 1 ) * -870 ) + "px";
		setActive(slide);
	}
	
	function setActive(slide) {
		for (var i = 0; i < _pagerList.length; i++) {
			removeClass(_pagerList[i], "active");
			
			if ( parseInt( _pagerList[i].getAttribute('data-slide') ) == parseInt(slide) )
				addClass(_pagerList[i], "active");
		}
	}
	
	function removeClass ( element , c ) {
		element.className = element.className.replace( new RegExp('(?:^|\\s)'+c+'(?!\\S)') ,'');
	}
	
	function addClass( element, c) {
		element.className = element.className + " " + c;
	}
}

