<?php
/*
Plugin Name: Show URLs
Plugin URI: https://github.com/miterial/show-urls
Description: Get all URLs from database
Version: 0.0.1
Author: Svetlana Guma
Author URI: https://github.com/miterial/
*/

yourls_add_filter( 'api_action_show_url', 'get_all_urls' );

function get_all_urls() {

    global $ydb;
    $table = YOURLS_DB_TABLE_URL;

    if (version_compare(YOURLS_VERSION, '1.7.3') >= 0) {
        $sql = "SELECT * FROM `$table`";
        $links = $ydb->fetchObjects($sql);
    } else {
        $links = $ydb->get_results("SELECT * FROM `$table`");
    }

    if(empty($links)) {
        return array(
                'statusCode' => 404,
                'status'     => 'fail',
                'message'    => 'Error: no urls found',
                'simple'     => 'error: not found',
            );
    }
    
    foreach ($links as $key => $url) {
        $data[] = $url;
    }

    return array(
                'statusCode' => 200,
                'status'     => 'success',
                'message'     => 'Found links in database',
                'simple'    => 'success: found',
                'result'     => $data
            );
}
