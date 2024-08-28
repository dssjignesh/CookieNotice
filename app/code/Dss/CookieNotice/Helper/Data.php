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
namespace Dss\CookieNotice\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Retrieve Module Enable
     *
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(
            'cookienotice/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Auto Hide Message
     *
     * @return int
     */
    public function getHideMsg(): int
    {
        return (int)$this->scopeConfig->getValue(
            'cookienotice/general/hide_msg',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Position
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->scopeConfig->getValue(
            'cookienotice/general/position',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Ensure the color code starts with a #
     *
     * @param string $color
     * @return string
     */
    private function formatColor(string $color): string
    {
        $color = ltrim($color, '#');
        if (strlen($color) === 6 && ctype_xdigit($color)) {
            return '#' . $color;
        }
        return '#000000';
    }

    /**
     * Get Message Title
     *
     * @return string
     */
    public function getMsgTitle(): string
    {
        return $this->scopeConfig->getValue(
            'cookienotice/notice_message/msg_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Title Text Color
     *
     * @return string
     */
    public function getColorTitle(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/notice_message/color_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Message
     *
     * @return string
     */
    public function getMsgContent(): string
    {
        return $this->scopeConfig->getValue(
            'cookienotice/notice_message/msg_content',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Message Text Color
     *
     * @return string
     */
    public function getColorContent(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/notice_message/color_content',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Background Color
     *
     * @return string
     */
    public function getColorBg(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/notice_message/color_bg',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Text Acceptance Button
     *
     * @return string
     */
    public function getTextBtnAccept(): string
    {
        return $this->scopeConfig->getValue(
            'cookienotice/btn_accept/text_btn_accept',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Text Color Acceptance Button
     *
     * @return string
     */
    public function getColorBtnAccept(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/btn_accept/color_btn_accept',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Background Color Acceptance Button
     *
     * @return string
     */
    public function getColorBgBtnAccept(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/btn_accept/color_bg_btn_accept',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Text More Information Button
     *
     * @return string
     */
    public function getTextBtnMoreInfor(): string
    {
        return $this->scopeConfig->getValue(
            'cookienotice/btn_more_infor/text_btn_more_infor',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Text Color More Information Button
     *
     * @return string
     */
    public function getColorBtnMoreInfor(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/btn_more_infor/color_btn_more_infor',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get Background Color More Information Button
     *
     * @return string
     */
    public function getColorBgBtnMoreInfor(): string
    {
        $color = $this->scopeConfig->getValue(
            'cookienotice/btn_more_infor/color_bg_btn_more_infor',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->formatColor($color);
    }

    /**
     * Get CMS Page
     *
     * @return string
     */
    public function getCMSPage(): string
    {
        $cmsPage = $this->scopeConfig->getValue(
            'cookienotice/btn_more_infor/cms_page',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $cmsPage ?? '';
    }

    /**
     * Get Custom Css
     *
     * @return string
     */
    public function getCustomStyle(): string
    {
        return (string)$this->scopeConfig->getValue(
            'cookienotice/custom_style/custom_css',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
