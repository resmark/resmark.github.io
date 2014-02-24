			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
				
			});


			//	The menu on the right
			$(function() {

				var $menu = $('nav#menu-right');

				$menu.mmenu({
					position	: 'right',
					classes		: 'mm-light',
					dragOpen	: false,
					counters	: false,
					searchfield	: true,
					labels		: {
						fixed		: !$.mmenu.support.touch
					},
					header		: {
						add			: false,
						update		: true,
						title		: 'Help'
					}
				});

				//	Click a menu-item
				var $confirm = $('#confirmation');
				$menu.find( 'li a' ).not( '.mm-subopen' ).not( '.mm-subclose' ).bind(
					'click.example',
					function( e )
					{
						e.preventDefault();
						$confirm.show().text( 'You clicked "' + $.trim( $(this).text() ) + '"' );
						$('#menu-right').trigger( 'close' );
					}
				);
			});