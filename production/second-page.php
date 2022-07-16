<?php

require('utils.php');

$header_content = include_template('header-content.php', []);
$second_page_content = include_template('second-page-content.php', []);
$layout_content = include_template('layout.php', ['content' => $second_page_content, 'header' => $header_content]);
print($layout_content);