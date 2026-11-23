<?php

declare(strict_types=1);

namespace TYPO3Entwicklung\T3entwSlider\Controller;

/***
 *
 * This file is part of the "TYPO3 Entwicklung Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2026 Nirmalya Mondal <nirmalya.mondal@gmail.com>, https://TYPO3Entwicklung.com
 *
 ***/

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Frontend\Page\PageInformation;
use TYPO3Entwicklung\T3entwSlider\Domain\Repository\RecordRepository;

/**
 * RecordController
 */

class RecordController extends ActionController
{

    /**
     * RecordController constructor.
     *
     * Takes care of dependency injection
     */
     public function __construct(protected readonly RecordRepository $recordRepository)
    {
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction(): ResponseInterface
    {
        // ID of current page        
        /** @var \TYPO3\CMS\Frontend\Page\PageInformation $pageInformation */
        $pageInformation = $this->request->getAttribute('frontend.page.information');
        if ($pageInformation instanceof PageInformation) {
            $pageId = $pageInformation->getId();
        }

        // ID of current tt_content record
        /** @var \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer $currentContentObject */        
        $currentContentObject = $this->request->getAttribute('currentContentObject');        
        $contentId = $currentContentObject->data['uid'];
      
        if($pageId && $contentId) {
            $records = $this->recordRepository->findByPageIdAndContentId($pageId, $contentId);
        } else {
            $records = $this->recordRepository->findAll();
        }

        $this->view->assign('records', $records);
        $this->view->assign('uid', $contentId);
        $imageWidthDesktop  = $this->settings['imageWidthDesktop'] ? $this->settings['imageWidthDesktop'] : 1200;
        $this->view->assign('imageWidthDesktop', $imageWidthDesktop);
        $imageWidthTablet  = $this->settings['imageWidthTablet'] ? $this->settings['imageWidthTablet'] : 800;
        $this->view->assign('imageWidthTablet', $imageWidthTablet);
        $imageWidthMobile  = $this->settings['imageWidthMobile'] ? $this->settings['imageWidthMobile'] : 600;
        $this->view->assign('imageWidthMobile', $imageWidthMobile);
        $imageHeightDesktop  = $this->settings['imageHeightDesktop'] ? $this->settings['imageHeightDesktop'] : 600;
        $this->view->assign('imageHeightDesktop', $imageHeightDesktop);
        $imageHeightTablet  = $this->settings['imageHeightTablet'] ? $this->settings['imageHeightTablet'] : 400;
        $this->view->assign('imageHeightTablet', $imageHeightTablet);
        $imageHeightMobile  = $this->settings['imageHeightMobile'] ? $this->settings['imageHeightMobile'] : 300;
        $this->view->assign('imageHeightMobile', $imageHeightMobile);
        $interval  = $this->settings['interval'] ? $this->settings['interval'] : 5000;
        $this->view->assign('interval', $interval);
        $theme  = $this->settings['theme'] ? $this->settings['theme'] : 'default';
        $this->view->assign('theme', $theme);
        $indicators  = $this->settings['indicators'] ? $this->settings['indicators'] : 0;
        $this->view->assign('indicators', $indicators);
        $crossfade  = $this->settings['crossfade'] ? 'carousel-fade' : '';
        $this->view->assign('carousel-fade', $crossfade);
        $autoplay  = $this->settings['autoplay'] ? 'true' : 'carousel';
        $this->view->assign('autoplay', $autoplay);
    return $this->htmlResponse();
    }

}
