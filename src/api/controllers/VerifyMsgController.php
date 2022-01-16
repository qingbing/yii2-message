<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace YiiMessage\api\controllers;


use YiiHelper\abstracts\RestController;
use YiiMessage\api\services\interfaces\IVerifyMsg;
use YiiMessage\api\services\VerifyMsgService;

/**
 * 控制器(对外服务) : 验证码的生成和校验接口
 *
 * Class VerifyMsgController
 * @package YiiMessage\api\controllers
 *
 * @property-read IVerifyMsg $service
 */
class VerifyMsgController extends RestController
{
    public $serviceInterface = IVerifyMsg::class;
    public $serviceClass     = VerifyMsgService::class;

    public function actionGenerateCode()
    {
        // 参数验证和获取
        $params = $this->validateParams([
        ]);
        // 业务处理
        $res = $this->service->generateCode($params);
        // 渲染结果
        return $this->success($res, '生成验证码');
    }

    public function actionVerifyCode()
    {
        // 参数验证和获取
        $params = $this->validateParams([
        ]);
        // 业务处理
        $res = $this->service->verifyCode($params);
        // 渲染结果
        return $this->success($res, '生成验证码');
    }
}