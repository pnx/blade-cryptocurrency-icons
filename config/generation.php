<?php

$process = static function (string $icon, array $config, SplFileInfo $file) {
    $dom = new DOMDocument;
    $dom->load($icon);
    $svg = $dom->childNodes[0];

    foreach([ 'width', 'height' ] as $attr) {

        if ($svg->hasAttribute($attr)) {
            $svg->removeAttribute($attr);
        }
    }

    file_put_contents($icon, $dom->saveXML($svg));
};

return [
    [
        'source' => __DIR__.'/../node_modules/cryptocurrency-icons/svg/color',
        'destination' => __DIR__.'/../resources/svg',
        'safe' => true,
        'after' => $process,
    ],
    [
        'source' => __DIR__.'/../node_modules/cryptocurrency-icons/svg/black',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 's-',
        'safe' => true,
        'after' => $process,
    ],
];
