<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Thinhweb Blog (thinhwebhp@gmail.com)
 * @Copyright (C) 2020 Thinhweb Blog. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Saturday, September 12, 2020 10:47:41 AM
 */

if ( ! defined( 'NV_IS_FILE_SITEINFO' ) ) die( 'Stop!!!' );


$lang_siteinfo = nv_get_lang_module( $mod );

// Tong so đơn vị
$number = $db->query( 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_rows where status= 1' )->fetchColumn();

if ( $number > 0 )
{
    $siteinfo[] = array(
        'key' => $lang_siteinfo['siteinfo_total'],
        'value' => $number
    );
}

