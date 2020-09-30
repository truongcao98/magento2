<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Truongcl\Tutorial\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Install messages
         */
        $data = [
            ['title' => 'IU','description' => 'Lee Ji-eun, thường được biết đến với nghệ danh IU, là một nữ ca sĩ, nhạc sĩ và diễn viên người Hàn QuốC','image' => '1.jpeg','status' => 1 ],
            ['title' => 'Miyeon','description' => 'Cho Mi-yeon, thường được biết đến với nghệ danh Miyeon, là một nữ ca sĩ thần tượng người Hàn Quố','image' => 'miyeon.jpg','status' => 1 ],
            ['title' => 'Irene','description' => 'Bae Ju-hyun, hay còn gọi là Bae Joo-hyeon, thường được biết đến với nghệ danh Irene, là một nữ ca sĩ và diễn viên người Hàn Quốc.','image' => 'irene.jpg','status' => 1 ],
            ['title' => 'Jisoo','description' => 'Kim Ji-soo, là một nữ ca sĩ thần tượng, diễn viên, người mẫu, MC người Hàn Quốc','image' => 'jisoo.jpg','status' => 1 ],
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('truongcl_blog'), $bind);
        }
    }
}
