<?php
declare(strict_types=1);

namespace Cheeseek\Fakturownia\ViewModel\Faktura\Listing;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Cheeseek\Fakturownia\Model\Fakturownia;

/**
 *
 */
class PrepareFaktura implements ArgumentInterface
{
    /**
     * @var Fakturownia
     */
    private $faktura;

    /**
     * @param Fakturownia $faktura
     */
    public function __construct(Fakturownia $faktura)
    {
        $this->faktura = $faktura;
    }

    public function getFaktura()
    {
       return $this->faktura->getResult();
    }
}
