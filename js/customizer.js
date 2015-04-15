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
				$( '.site-title a, .site-description, .site-title' ).css( {
					'color': to
				} );

			} else {
				$( '.site-title a, .site-description, .site-title' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	//Center Title and description
	wp.customize( 'bpl_title_center', function( value ) {
		value.bind( function( to ) {
			if ( !'' === to ) {
				if ( !$('.site-branding').hasClass('text-center')) {
					$( '.site-branding' ).addClass('text-center');
				}
			} else {
				if ( $('.site-branding').hasClass('text-center') ) {
					$('.site-branding').removeClass('text-center');
				}
			}
		} );
	} );
	//Header Color
	wp.customize( 'bpl_header_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-header, .dropdown-menu' ).css( {
				'background-color': to
			});
		});
	});
	//Menu and social icon color
	wp.customize( 'bpl_header_menu_color', function( value )  {
		value.bind( function( to ) {
			$( '.navbar-default .navbar-brand, .navbar-default a' ).css( {
				'color': to
			});
		$('.icon-bar').css({
					'background-color': to
			});
		});
	});
	//link color
	wp.customize( 'bpl_link_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content a, .site-footer a' ).css( {
				'color': to
			});
		});
	});
	//visited link color
	wp.customize( 'bpl_link_visited_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content a:visited, .site-footer a:visited' ).css( {
				'color': to
			});
		});
	});
	//body text color
	wp.customize( 'bpl_body_text_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-content').css( {
				'color': to
			});
		});
	});
	//comment accent color
	wp.customize( 'bpl_comment_accent_color', function( value )  {
		value.bind( function( to ) {
			$( '.media-body' ).css( {
				'border-left': '2px solid ' + to,
				'border-bottom': '2px solid ' + to,
			});
		});
	});
	//footer accent color
	wp.customize( 'bpl_footer_widget_accent_color', function( value )  {
		value.bind( function( to ) {
			$( '.site-footer .widget' ).css( {
				'border-left': '2px solid ' + to,
				'border-bottom': '2px solid ' + to,
			});
		});
	});
	//middle front page backgrouond color
	wp.customize( 'bpl_frontpage_middle_widgets_background_color', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-widgets' ).css( {
				'background-color': to,
			});
		});
	});
	//middle front page text color
	wp.customize( 'bpl_frontpage_middle_widgets_text_color', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-widgets, .frontpage-middle-widgets a' ).css( {
				'color': to,
			});
		});
	});
	//middle front page h text
	wp.customize( 'bpl_frontpage_middle_header', function( value )  {
		value.bind( function( to ) {
			$( '.frontpage-middle-header' ).text( to );
		});
	});

} )( jQuery );

