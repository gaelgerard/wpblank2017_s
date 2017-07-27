/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
   jQuery(function ($){
		$( "#slideLogin" ).click(
			function() {
				$("#loginBox").removeClass("mfp-hide").stop(true,false).slideToggle('150');
			});
      					
		function myScroll() {
						   if ( $(window).scrollTop() > 200 ) {
							   $( '.back-to-top' ).stop(true, false).fadeIn();
						   } else {
							   $( '.back-to-top' ).stop(true, false).fadeOut();
						   };
		}
						$( '.back-to-top' ).click(function () {
							$( 'body,html' ).animate({
								scrollTop: 0
							}, 800);
							return false;
						});

    jQuery('#user_login').attr('placeholder', 'Nom d\'utilisateur');
    jQuery('#user_email').attr('placeholder', 'Adresse E-mail');
    jQuery('#user_pass').attr('placeholder', 'Mot de passe');
    jQuery('.login-form.contact_form #wp-submit').addClass('wpcf7-submit');
 	  $('.cookie-message').cookieBar({ closeButton : '.my-close-button', hideOnClose: false });
		$('.cookie-message').on('cookieBar-close', function() { $(this).slideUp(); });
	  // media query event handler
	  var detectViewPort = function(){
		  var viewPortWidth = $(window).width();
	   if (viewPortWidth > 767) {
				  // window width is at least 767px
				  $('body').addClass('desktop').removeClass('mobile');

    $(window).scroll(myScroll);
			$('.search-header').appendTo('.headerwrapper');
			  }
			  else {
				  // window width is less than 768px
				  $('body').addClass('mobile').removeClass('desktop');
	  $(window).off("scroll",myScroll);

			$('.mobile #primary-menu').slicknav({
							prependTo:'.mobile #site-navigation',
							
							duration: 400,
						'closedSymbol': '', // Character after collapsed parents.
						'openedSymbol': '', // Character after expanded parents.
						//'open': function(trigger){
						//			var that = trigger.parent().children('ul');
						//			$('.slicknav_menu ul li.slicknav_open ul').each(function(){
						//		if($(this).get( 0 ) != that.get( 0 )){
						//				$(this).slideUp().addClass('slicknav_hidden');
						//				$(this).parent().removeClass('slicknav_open').addClass('slicknav_collapsed');
						//		}
						//			})
						//	}, 
		
			});//end SlickNav
			$('.search-header').appendTo('.slicknav_menu');
		  
		  }// END media query change
	  };
	  
			  $(function(){
				detectViewPort();
			  });
			  
			  $(window).resize(function () {
				 detectViewPort();
			  });
   });
   
		
}//end function
)();
