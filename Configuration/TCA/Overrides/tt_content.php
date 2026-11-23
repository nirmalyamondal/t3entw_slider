<?php

defined('TYPO3') || die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {

     ExtensionUtility::registerPlugin(
        't3entw_slider',
        'Pi1',
        'Simple responsive Slider',
        't3entw_slider_pi1_icon', // Optional: Icon identifier
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT, // Use CType for modern approach
        'Simple responsive Slider',
        'FILE:EXT:t3entw_slider/Configuration/FlexForms/t3entw_slider.xml',
    );
   
    $GLOBALS['TCA']['tt_content']['columns']['tx_t3entwslider_inline'] = [
        'exclude' => true,
        'label' => 'LLL:EXT:t3entw_slider/Resources/Private/Language/locallang_db.xlf:tx_t3entwslider_domain_model_record',      
        'config' => [
            'type' => 'inline',
            'languageMode' => 'inherit',
            'foreign_table' => 'tx_t3entwslider_domain_model_record',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'maxitems' => 99,
            'appearance' => [
                'collapseAll' => true,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => true,
                'showPossibleLocalizationRecords' => true,
                'useSortable' => true,
                'showAllLocalizationLink' => true,
                'newRecordLinkPosition' => 'bottom',
                'enabledControls' => [
                    'info' => true,
                    'new' => true,
                    'dragdrop' => true,
                    'sort' => true,
                    'hide' => true,
                    'delete' => true,
                ],
            ],
            'behaviour' => [
                'localizationMode' => 'select',
                'localizeChildrenAtParentLocalization' => 1,
            ], 
        ],
    ];

    ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'tx_t3entwslider_inline',
        '', // specify CType here if you only want it on specific types, e.g., 'textpic'
        'after:pi_flexform'
    );

})();
