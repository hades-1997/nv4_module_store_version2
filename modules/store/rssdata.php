<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Thinhweb Blog (thinhwebhp@gmail.com)
 * @Copyright (C) 2020 Thinhweb Blog. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Saturday, September 12, 2020 10:47:41 AM
 */

if (! defined('NV_IS_MOD_RSS')) {
    die('Stop!!!');
}

$rssarray = array();
$sql = "SELECT id, title, alias FROM " . NV_PREFIXLANG . "_" . $mod_data . "_catalogy WHERE status=1 ORDER BY weight";

$list = $nv_Cache->db($sql, '', $mod_name);
foreach ($list as $value) {
    $value['link'] = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA . "&amp;" . NV_NAME_VARIABLE . "=" . $mod_name . "&amp;" . NV_OP_VARIABLE . "=" . $mod_info['alias']['rss'] . "/" . $value['alias'];
    $rssarray[] = $value;
}