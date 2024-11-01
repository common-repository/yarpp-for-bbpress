<?php
/*
Plugin Name: YARPP For bbpress
Plugin URI: https://sellingly.com/
Description: Enable bbpress forum, post and replies in YARPP results
Version: 0.2
Author: Art Harrison
Author URI: https://sellingly.com/

Copyright 2013 Art Harrison

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, see <http://www.gnu.org/licenses/>.
*/

// exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

class YarppbbPress
{
	function __construct()
	{
		
	   add_filter( 'bbp_register_forum_post_type', array( $this, 'includePostTypeInYARPP' ) );
           add_filter( 'bbp_register_topic_post_type', array( $this, 'includePostTypeInYARPP' ) );
           add_filter( 'bbp_register_reply_post_type', array( $this, 'includePostTypeInYARPP' ) );
	}

	function includePostTypeInYARPP( $args )
        {
            $args['yarpp_support'] = true;
            return $args;
        }

	
}

new YarppbbPress();
