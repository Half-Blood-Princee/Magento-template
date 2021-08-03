<?php

namespace Learning\Hello\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $block = $page->getLayout()->getBlock('hello.page.view');
        $block->setData('custom_parameter', 'Data from the Controller');
        return $page;
    }
}
