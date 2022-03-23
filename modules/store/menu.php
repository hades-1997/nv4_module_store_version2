<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Thinhweb Blog (thinhwebhp@gmail.com)
 * @Copyright (C) 2020 Thinhweb Blog. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Saturday, September 12, 2020 10:47:41 AM
 */

if ( ! defined( 'NV_ADMIN' ) ) die( 'Stop!!!' );
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $mod_data . '_catalogy WHERE status=1 ORDER BY weight ASC';
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_item[$row['id']] = array(
        'key' => $row['id'],
        'title' => $row['title'],
        'alias' => $row['alias']
    );
}