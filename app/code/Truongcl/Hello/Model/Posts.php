<?php
namespace Truongcl\Hello\Model;

use Magento\Framework\Model\AbstractModel;

class Posts extends AbstractModel{
    protected function _construct()
    {
        $this->_init('Truongcl\Hello\Model\ResourceModel\Posts');
    }
}
