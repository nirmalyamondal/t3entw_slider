<?php

declare(strict_types=1);

namespace TYPO3Entwicklung\T3entwSlider\Domain\Repository;

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

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * The repository for Records
 *  @extends Repository<Record>
 */

class RecordRepository extends Repository
{
    /**
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     */
    protected $configurationManager;

    // Order by sorting
	protected $defaultOrderings = [
		'sorting' => QueryInterface::ORDER_ASCENDING
	];

	public function findByPageIdAndContentId($pageId, $contentId) {
        $pidArray = [$pageId];
        $query = $this->createQuery();
        // add the pid constraint
        //$query->getQuerySettings()->setRespectStoragePage(TRUE);
        $query->setQuerySettings($query->getQuerySettings()->setRespectStoragePage(TRUE));
        $query->getQuerySettings()->setStoragePageIds($pidArray);
        $query->matching($query->equals('parentid', $contentId));
        return $query->execute();
	}
}
