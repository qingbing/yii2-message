<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace YiiMessage\api\services;


use YiiHelper\abstracts\Service;
use YiiMessage\api\services\interfaces\IVerifyMsg;

/**
 * 服务(对外服务) : 验证码的生成和校验接口
 *
 * Class VerifyMsgService
 * @package YiiMessage\api\services
 */
class VerifyMsgService extends Service implements IVerifyMsg
{
    /**
     * 生成验证码
     *
     * @param array $params
     * @return mixed
     */
    public function generateCode(array $params = [])
    {
        // TODO: Implement generateCode() method.
    }

    /**
     * 校验验证码
     *
     * @param array $params
     * @return mixed
     */
    public function verifyCode(array $params): bool
    {
        // TODO: Implement verifyCode() method.
    }
}