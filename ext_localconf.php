<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3Entwicklung\T3entwSlider\Controller\RecordController;

call_user_func(
    function()
    {
        ExtensionUtility::configurePlugin(
            'T3entwSlider',
            'Pi1',
            [
                RecordController::class => 'list',
            ],
            // non-cacheable actions
            [
                
            ]
        );		
    }
);
