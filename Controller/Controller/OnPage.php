<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Optic\Controller\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class OnPage extends Action implements HttpGetActionInterface
{
    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        // TODO: Implement execute method.
    }
}
