<?php
declare(strict_types=1);

namespace Cheeseek\Fakturownia\Controller\Customer;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements ActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @param ResultFactory $resultFactory
     */
    public function __construct(
        ResultFactory $resultFactory
    ) {
        $this->resultFactory = $resultFactory;
    }

    /**
     * View  page action
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
