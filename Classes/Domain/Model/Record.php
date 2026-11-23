<?php

declare(strict_types=1);

namespace TYPO3Entwicklung\T3entwSlider\Domain\Model;

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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Attribute\ORM\Lazy;

/**
 * Record
 */

class Record extends AbstractEntity
{

    /** @var string */
    protected string $title = '';

     /** @var string */
    protected string $uri = '';

    /** @var string */
    protected string $subtitle = '';

    /** @var string */
    protected string $description = '';

    /**
     * @var ?ObjectStorage<FileReference>
     */
    #[Lazy]
    public ?ObjectStorage $image = null;

     public function __construct()
    {
        $this->initializeObject();
    }

    public function initializeObject(): void
    {
        // Always initialize the collection
        $this->image ??= new ObjectStorage();
    }

    /**
     * @return ObjectStorage<FileReference>
     */
    public function getImage(): ?ObjectStorage
    {
        return $this->image;
    }

    /**
     * @param ObjectStorage<FileReference> $image
     */
    public function setImage(ObjectStorage $image): void
    {
        $this->image = $image;
    }


    /**
     * Returns the title
     * 
     * @return string $title title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get uri
     *
     * @return string $uri uri
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Set uri
     *
     * @param string $uri uri
     */
    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    /**
     * Returns the subtitle
     * 
     * @return string $subtitle subtitle
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * Sets the subtitle
     * 
     * @param string $subtitle subtitle
     * @return void
     */
    public function setSubtitle(string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    /**
     * Returns the description
     * 
     * @return string $description description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}
