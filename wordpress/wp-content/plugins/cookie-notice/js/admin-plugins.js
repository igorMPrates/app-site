( function( $ ) {

	// ready event
	$( function() {
		// cancel deactivation
		$( document ).on( 'click', '.cn-deactivate-plugin-cancel', function( e ) {
			tb_remove();

			return false;
		} );

		// simple deactivation
		$( document ).on( 'click', '.cn-deactivate-plugin-simple', function( e ) {
			// display spinner
			$( '#cn-deactivation-footer .spinner' ).addClass( 'is-active' );
		} );

		// deactivation with sending data
		$( document ).on( 'click', '.cn-deactivate-plugin-data', function( e ) {
			var spinner = $( '#cn-deactivation-footer .spinner' ),
				url = $( this ).attr( 'href' );

			// display spinner
			spinner.addClass( 'is-active' );

			// submit data
			$.post( ajaxurl, {
				action: 'cn-deactivate-plugin',
				option_id: $( 'input[name="cn_deactivation_option"]:checked' ).val(),
				other: $( 'textarea[name="cn_deactivation_other"]' ).val(),
				nonce: cnArgsPlugins.nonce
			} ).done( function( response ) {
				// deactivate plugin
				window.location.href = url;
			} ).fail( function() {
				// deactivate plugin
				window.location.href = url;
			} );

			return false;
		} );

		// click on deactivation link
		$( document ).on( 'click', '.cn-deactivate-plugin-modal', function( e ) {
			var modalBox = $( '#cn-deactivation-container' ).closest( '#TB_window' );

			tb_show( cnArgsPlugins.deactivate, '#TB_inline?inlineId=cn-deactivation-modal&modal=false' );

			if ( modalBox.length > 0 ) {
				$( modalBox ).addClass( 'cn-deactivation-modal' );
				$( modalBox ).find( '#TB_closeWindowButton' ).on( 'blur' );
			}

			return false;
		} );

		// change radio
		$( document ).on( 'change', 'input[name="cn_deactivation_option"]', function( e ) {
			if ( $( this ).val() === '6' )
				$( '.cn-deactivation-textarea textarea' ).prop( 'disabled', false );
			else
				$( '.cn-deactivation-textarea textarea' ).prop( 'disabled', true );
		} );
	} );

} )( jQuery );