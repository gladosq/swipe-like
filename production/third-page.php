<?php

require('utils.php');

$header_content = include_template('header-content.php', []);
$third_page_content = include_template('third-page-content.php', []);
$layout_content = include_template('layout.php', ['content' => $third_page_content, 'header' => $header_content]);
print($layout_content);