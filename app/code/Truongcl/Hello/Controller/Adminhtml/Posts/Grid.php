<?php
namespace Truongcl\Hello\Controller\Adminhtml\Posts;

use Truongcl\Hello\Controller\Adminhtml\Posts;

class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
