<?php
/**
 * Copyright © Cytracon Webservices. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Cytracon\FileAllowed\Plugin\File;

use Magento\MediaStorage\Model\File\Uploader;
use Cytracon\FileAllowed\Helper\ImageHelper;

class UploaderPlugin
{
    /**
     * @var ImageHelper
     */
    private $imageHelper;

    /**
     * ImagePlugin constructor.
     * @param ImageHelper $imageHelper
     */
    public function __construct(
        ImageHelper $imageHelper
    ) {
        $this->imageHelper = $imageHelper;
    }

    /**
     * Add web images to the list ollowed extension for media storage
     *
     * @param Uploader $uploader
     * @param array $extensions
     * @return array
     */
    public function beforeSetAllowedExtensions(Uploader $uploader, $extensions = [])
    {
        $extensions = array_merge(
            $extensions,
            array_values($this->imageHelper->getVectorExtensions()),
            array_values($this->imageHelper->getWebImageExtensions())
        );

        return [$extensions];
    }
}
