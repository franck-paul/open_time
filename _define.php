<?php
/**
 * @brief open-time, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (carnet.franck.paul@gmail.com)
 * @copyright GPL-2.0
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'Open-Time',
    'Deviation Cafe-Creme, Structure Aorakit-1B de Kozlika',
    'Franck Paul',
    '2.0',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',

        'details'    => 'https://open-time.net/?q=open-time',
        'support'    => 'https://github.com/franck-paul/open-time',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/open-time/master/dcstore.xml',
    ]
);
