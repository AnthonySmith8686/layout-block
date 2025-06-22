<?php

var_dump($attributes);
echo '<br>';
if (!isset($attributes['content']) || empty($attributes['content'])) {
    return '';
}
$content = $attributes['content'];
var_dump($content);
$columns = isset($attributes['columns']) ? (int) $attributes['columns'] : 3;
$gap     = isset($attributes['gap']) ? (int) $attributes['gap'] : 20;

$style = sprintf(
    'display:grid;grid-template-columns:repeat(%d, 1fr);gap:%dpx;',
    $columns,
    $gap
);

return sprintf(
    '<div class="wp-block-super-layout-layout" style="%s">%s</div>',
    esc_attr($style),
    $content
);
