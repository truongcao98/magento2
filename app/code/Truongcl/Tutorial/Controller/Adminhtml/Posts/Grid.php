<?php
namespace Truongcl\Tutorial\Controller\Adminhtml\Posts;

use Truongcl\Tutorial\Controller\Adminhtml\Posts;

class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
