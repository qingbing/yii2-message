<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace YiiMessage\api\services\interfaces;


use YiiHelper\services\interfaces\IService;

/**
 * 接口(对外服务) : 验证码的生成和校验接口
 *
 * Interface IVerifyMsg
 * @package YiiMessage\api\services\interfaces
 */
interface IVerifyMsg extends IService
{
    /**
     * 生成验证码
     *
     * @param array $params
     * @return mixed
     */
    public function generateCode(array $params = []);

    /**
     * 校验验证码
     *
     * @param array $params
     * @return bool
     */
    public function verifyCode(array $params): bool;
}