<?php
namespace Truongcl\Tutorial\Model;

use Magento\Framework\Model\AbstractModel;

class Posts extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Truongcl\Tutorial\Model\ResourceModel\Posts');
    }
}
