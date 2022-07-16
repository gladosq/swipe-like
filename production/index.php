<?php

require('utils.php');

$pages_content = include_template('pages-content.php', []);
$layout_content = include_template('layout.php', ['content' => $pages_content]);
print($layout_content);