<?php

namespace Theme;

if (! defined('ABSPATH')) {
	exit;
}

class Rest
{
	public function __construct()
	{
		add_filter( 'rest_endpoints', array($this, 'hide_users_from_rest') );
	}

	public function hide_users_from_rest($endpoints) {
		if ( !is_admin() ) {
			if ( isset( $endpoints['/wp/v2/users'] ) ) {
				unset( $endpoints['/wp/v2/users'] );
			}
			if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
				unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
			}
		}

		return $endpoints;
	}
}

new Rest();
