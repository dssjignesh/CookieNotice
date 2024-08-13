<?php

declare(strict_types=1);

/**
 * Digit Software Solutions..
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category   Dss
 * @package    Dss_CookieNotice
 * @author     Extension Team
 * @copyright Copyright (c) 2024 Digit Software Solutions. ( https://digitsoftsol.com )
 */
namespace Dss\CookieNotice\Model\Config\Source;

use Magento\Cms\Model\ResourceModel\Page\CollectionFactory;

class Page implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Page constructor.
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        protected CollectionFactory $collectionFactory
    ) {
    }
    /**
     * To option array
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $res = [];
        $collection =  $this->collectionFactory->create();
        $collection->addFieldToFilter('is_active', \Magento\Cms\Model\Page::STATUS_ENABLED);
        foreach ($collection as $page) {
            $data['value'] = $page->getData('identifier');
            $data['label'] = $page->getData('title');
            if ($data['value'] != 'home') {
                $res[] = $data;
            }
        }
        return $res;
    }
}
