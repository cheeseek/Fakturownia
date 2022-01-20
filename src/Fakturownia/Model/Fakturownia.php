<?php
declare(strict_types=1);

namespace Cheeseek\Fakturownia\Model;

use Magento\Framework\HTTP\Client\Curl;

class Fakturownia
{
    const URL_PREFIX = 'https://';
    const FAKTUROWNIA_DOMAIN = 'fakturownia.pl';

    /**
     * @var Curl
     */
    protected $curl;

    /**
     * @param Curl $curl
     */
    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        $userName = 'iryna-dziaruzhyna';
        return self::URL_PREFIX
            . $userName
            . '.'
            . self::FAKTUROWNIA_DOMAIN
            . '/'
            . $this->getRequestType()
            . '?'
            . $this->getUrlParamsString();
    }

    /**
     * @return string
     */
    private function getUrlParamsString()
    {
        return 'period=this_month&api_token=p3OYJFoYKqt6hsra8nWo';
    }

    /**
     * @return string
     */
    private function getRequestType()
    {
        return 'invoices.json';
    }

    /**
     * @return string
     */
    public function getResult()
    {
        $apiUrl = $this->getApiUrl();
        $this->curl->get($apiUrl);

        return $this->curl->getBody();
    }
}
