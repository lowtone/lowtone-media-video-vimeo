<?php
/*
 * Plugin Name: Vimeo
 * Plugin URI: http://wordpress.lowtone.nl/media-video-vimeo
 * Description: Integrate YouTube in media selector.
 * Version: 1.0
 * Author: Lowtone <info@lowtone.nl>
 * Author URI: http://lowtone.nl
 * License: http://wordpress.lowtone.nl/license
 */
/**
 * @author Paul van der Meijs <code@lowtone.nl>
 * @copyright Copyright (c) 2011-2012, Paul van der Meijs
 * @license http://wordpress.lowtone.nl/license/
 * @version 1.0
 * @package wordpress\plugins\lowtone\media\video\vimeo
 */

namespace lowtone\media\video\vimeo {

	use lowtone\content\packages\Package;

	// Includes
	
	if (!include_once WP_PLUGIN_DIR . "/lowtone-content/lowtone-content.php") 
		return trigger_error("Lowtone Content plugin is required", E_USER_ERROR) && false;

	$__i = Package::init(array(
			Package::INIT_PACKAGES => array("lowtone", "lowtone\\media\\video"),
			Package::INIT_MERGED_PATH => __NAMESPACE__,
			Package::INIT_SUCCESS => function() {

				add_filter("media_upload_tabs", function($tabs) {
					$tabs["vimeo"] = __("Vimeo", "lowtone_media_video_vimeo");

					return $tabs;
				});

				return true;
			}
		));

	if (!$__i)
		return false;

}