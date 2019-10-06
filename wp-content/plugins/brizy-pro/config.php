<?php

class BrizyPro_Config {
	const ACTIVATE_LICENSE = 'https://www.brizy.io/account/misc/brizy-license/';
	const UDPATE_LICENSE = 'https://www.brizy.io/account/misc/brizy-license/update';
	const DEACTIVATE_LICENSE = 'https://www.brizy.io/account/misc/brizy-license/deactivate';

	const BRIZY_APPLICATION_INTEGRATION_URL = 'https://forms.brizy.io';

	static public function getLicenseActivationData() {
		$data = array(
			'market'   => 'brizy',
			'author'   => 'brizy',
			'theme_id' => '000000',
		);

		return apply_filters( 'brizy-pro-license-data', $data );
	}


	static public function getConfigUrls() {
		$assets_url          = BRIZY_PRO_PLUGIN_URL . '/public';
		$external_assets_url = 'https://static.brizy.io/brizy-pro/' . BRIZY_PRO_EDITOR_VERSION;

		return array(
			'assets'             => $assets_url . '/editor-build',
			'blockThumbnails'    => $external_assets_url . '/img-block-thumbs',
			'templateThumbnails' => $external_assets_url . '/img-template-thumbs',
		);
	}
}