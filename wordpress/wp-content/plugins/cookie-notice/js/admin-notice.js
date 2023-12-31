( function( $ ) {

	// ready event
	$( function() {
		// Save dismiss state // .is-dismissible
		$( '.cn-notice' ).on( 'click', '.notice-dismiss, .cn-notice-dismiss', function( e ) {
			if ( $( e.currentTarget ).hasClass( 'cn-approve' ) )
				var notice_action = 'approve';
			else if ( $( e.currentTarget ).hasClass( 'cn-delay' ) )
				var notice_action = 'delay';
			else
				var notice_action = 'dismiss';

			$.ajax( {
				url: cnArgsNotice.ajaxURL,
				type: 'POST',
				dataType: 'json',
				data: {
					action: 'cn_dismiss_notice',
					notice_action: notice_action,
					nonce: cnArgsNotice.nonce
				}
			} );

			$( e.delegateTarget ).slideUp( 'fast' );
		} );
	} );

} )( jQuery );