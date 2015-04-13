/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
				$( '.site-title, .site-description, .site-header a' ).css( {
					'color': to
				} );
				$('.icon-bar').css({
					'background-color': to
				});
				
			} else {
				$( '.site-title, .site-description, .site-header a' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
				$('.icon-bar').css({
					'background-color': to
				});
			}
		} );
	} );
	
	wp.customize( 'bpl_header_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-header' ).css( {
				'background-color': to
			});
		});
	});
	
	wp.customize( 'bpl_link_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content a, .site-footer a' ).css( {
				'color': to
			});
		});
	});
	
	wp.customize( 'bpl_link_visited_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content a:visited, .site-footer a:visited' ).css( {
				'color': to
			});
		});
	});
	
	wp.customize( 'bpl_body_text_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content').css( {
				'color': to
			});
		});
	});
	
	
	wp.customize( 'bpl_comment_accent_color', function( value )  {
		value.bind( function( to ) {
			$( '.media-body' ).css( {
				'border-left': '2px solid ' + to,
				'border-bottom': '2px solid ' + to,
			});
		});
	});
	
	wp.customize( 'bpl_footer_widget_accent_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-footer .widget' ).css( {
				'border-left': '2px solid ' + to,
				'border-bottom': '2px solid ' + to,
			});
		});
	});
	
	wp.customize( 'bpl_frontpage_middle_widgets_background_color', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-widgets' ).css( {
				'background-color': to,
			});
		});
	});
	
	wp.customize( 'bpl_frontpage_middle_widgets_text_color', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-widgets, .frontpage-middle-widgets a' ).css( {
				'color': to,
			});
		});
	});
	
	wp.customize( 'bpl_frontpage_middle_header', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-header' ).text( to );
		});
	});

} )( jQuery );
