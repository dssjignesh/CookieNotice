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
namespace Dss\CookieNotice\Block;

use Dss\CookieNotice\Helper\Data;
use Dss\CookieNotice\Model\Config\Source\Position;
use Magento\Backend\Block\Template\Context;

class CookieNotice extends \Magento\Framework\View\Element\Template
{
    /**
     * CookieNotice constructor.
     * @param Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        protected Context $context,
        protected Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Retrieve Module Enable
     *
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->helper->isEnable();
    }

    /**
     * Get Auto Hide Message
     *
     * @return int
     */
    public function getHideMsg(): int
    {
        $miliseconds = $this->helper->getHideMsg();
        $seconds = $miliseconds * 1000;
        return $seconds;
    }

    /**
     * Get Position
     *
     * @return string
     */
    public function getPosition(): string
    {
        $position = $this->helper->getPosition();
        switch ($position) {
            case Position::POSITION_BOTTOM_LEFT:
                return json_encode(
                    ['left' => 0,'bottom' => 0]
                );
            case Position::POSITION_TOP_LEFT:
                return json_encode(
                    ['left' => 0,'top' => 0]
                );
            case Position::POSITION_BOTTOM_RIGHT:
                return json_encode(
                    ['right' => 0,'bottom' => 0]
                );
            default:
                return json_encode(
                    ['right' => 0,'top' => 0]
                );
        }
    }

    /**
     * Get Message Title
     *
     * @return string
     */
    public function getMsgTitle(): string
    {
        return $this->helper->getMsgTitle();
    }

    /**
     * Get Title Text Color
     *
     * @return string
     */
    public function getColorTitle(): string
    {
        return $this->helper->getColorTitle();
    }

    /**
     * Get Message
     *
     * @return string
     */
    public function getMsgContent(): string
    {
        return $this->helper->getMsgContent();
    }

    /**
     * Get Message Text Color
     *
     * @return string
     */
    public function getColorContent(): string
    {
        return $this->helper->getColorContent();
    }

    /**
     * Get Background Color
     *
     * @return string
     */
    public function getColorBg(): string
    {
        return $this->helper->getColorBg();
    }

    /**
     * Get Text Acceptance Button
     *
     * @return string
     */
    public function getTextBtnAccept(): string
    {
        return $this->helper->getTextBtnAccept();
    }

    /**
     * Get Text Color Acceptance Button
     *
     * @return string
     */
    public function getColorBtnAccept(): string
    {
        return $this->helper->getColorBtnAccept();
    }

    /**
     * Get Background Color Acceptance Button
     *
     * @return string
     */
    public function getColorBgBtnAccept(): string
    {
        return $this->helper->getColorBgBtnAccept();
    }

    /**
     * Get Text More Information Button
     *
     * @return string
     */
    public function getTextBtnMoreInfor(): string
    {
        return $this->helper->getTextBtnMoreInfor();
    }

    /**
     * Get Text Color More Information Button
     *
     * @return string
     */
    public function getColorBtnMoreInfor(): string
    {
        return $this->helper->getColorBtnMoreInfor();
    }

    /**
     * Get Background Color More Information Button
     *
     * @return string
     */
    public function getColorBgBtnMoreInfor(): string
    {
        return $this->helper->getColorBgBtnMoreInfor();
    }

    /**
     * Get CMS Page
     *
     * @return string
     */
    public function getCMSPage(): string
    {
        $identifier = $this->helper->getCMSPage();
        $baseUrl = $this->getBaseUrl();
        $pageUrl = $baseUrl.$identifier;
        return $pageUrl;
    }

    /**
     * Get Custom Css
     *
     * @return string
     */
    public function getCustomStyle(): string
    {
        return $this->helper->getCustomStyle();
    }
}
