<?php

require('utils.php');

$header_content = include_template('header-content.php', []);
$first_page_content = include_template('first-page-content.php', []);
$layout_content = include_template('layout.php', ['content' => $first_page_content, 'header' => $header_content]);
print($layout_content);