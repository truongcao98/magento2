<?php
namespace Truongcl\Hello\Model\ResourceModel\Posts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Truongcl\Hello\Model\Posts',
            'Truongcl\Hello\Model\ResourceModel\Posts'
        );
    }
}
