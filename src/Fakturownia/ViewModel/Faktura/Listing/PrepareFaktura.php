<?php

namespace Cheeseek\Fakturownia\ViewModel\Faktura\Listing;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Url\Helper\Data as UrlHelper;
use Cheeseek\Fakturownia\Model\Fakturownia;

/**
 * Check is available add to compare.
 */
class PrepareFaktura implements ArgumentInterface
{
    /**
     * @var UrlHelper
     */
    private $urlHelper;
    protected $faktura;

    /**
     * @param UrlHelper $urlHelper
     */
    public function __construct(UrlHelper $urlHelper, Fakturownia $faktura)
    {
        $this->urlHelper = $urlHelper;
        $this->faktura = $faktura;
    }

    /**
     * Wrapper for the PostHelper::getPostData()
     *
     * @param string $url
     * @param array $data
     * @return array
     */
    public function getPostData(string $url, array $data = []): array
    {
        if (!isset($data[ActionInterface::PARAM_NAME_URL_ENCODED])) {
            $data[ActionInterface::PARAM_NAME_URL_ENCODED] = $this->urlHelper->getEncodedUrl();
        }
        return ['action' => $url, 'data' => $data];
    }

    public function getFaktura()
    {
       return $this->faktura->getFakturas();

    }

    public function getSomething()
    {
        return "Hello World";
    }
}
