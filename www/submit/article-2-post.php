<?php
// The source code packaged with this file is Free Software, Copyright (C) 2005 by
// Ricardo Galli <gallir at uib dot es>.
// It's licensed under the AFFERO GENERAL PUBLIC LICENSE unless stated otherwise.
// You can get copies of the licenses here:
//      http://www.affero.org/oagpl.html
// AFFERO GENERAL PUBLIC LICENSE is also included in the file called "COPYING".

defined('mnminclude') or die();

try {
    $validator->checkKey();
} catch (Exception $e) {
    if ($globals['is_ajax']) {
        responseJson($e->getMessage(), false);
    }

    return;
}

require_once mnminclude . 'tags.php';

if ($link->is_new) {
    require __DIR__.'/article-2-post-discard.php';
} else {
    require __DIR__.'/article-2-post-queue.php';
}
