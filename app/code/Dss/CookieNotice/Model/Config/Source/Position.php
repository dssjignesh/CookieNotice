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

class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @const Position
     */
    public const POSITION_BOTTOM_LEFT = '0';
    public const POSITION_TOP_LEFT = '1';
    public const POSITION_BOTTOM_RIGHT = '2';
    public const POSITION_TOP_RIGHT = '3';

    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => self::POSITION_BOTTOM_LEFT, 'label' => __('Bottom Left')],
            ['value' => self::POSITION_TOP_LEFT, 'label' => __('Top Left')],
            ['value' => self::POSITION_BOTTOM_RIGHT, 'label' => __('Bottom Right')],
            ['value' => self::POSITION_TOP_RIGHT, 'label' => __('Top Right')],
        ];
    }
}
