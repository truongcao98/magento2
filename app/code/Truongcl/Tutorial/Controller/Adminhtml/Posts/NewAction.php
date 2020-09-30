<?php
namespace Truongcl\Tutorial\Controller\Adminhtml\Posts;

use Truongcl\Tutorial\Controller\Adminhtml\Posts;

class NewAction extends Posts
{
    /**
     * Create new news action
     *
     * @return void
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
