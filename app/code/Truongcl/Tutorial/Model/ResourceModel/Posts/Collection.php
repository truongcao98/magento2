<?php
namespace Truongcl\Tutorial\Model\ResourceModel\Posts;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Truongcl\Tutorial\Model\Posts',
            'Truongcl\Tutorial\Model\ResourceModel\Posts'
        );
    }
}
