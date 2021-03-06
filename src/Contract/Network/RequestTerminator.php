<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/10
 * Time: 19:54
 */

namespace Zan\Framework\Contract\Network;


use Zan\Framework\Utilities\DesignPattern\Context;

interface RequestTerminator {
    /**
     * @param Request $request
     * @param Response $response
     * @param Context $context
     * @return void
     */
    public function terminate(Request $request, Response $response, Context $context);
}