-- ----------------------------
--  Table structure for `msg_auth_user`
-- ----------------------------
CREATE TABLE `msg_auth_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uuid` varchar(50) NOT NULL DEFAULT '' COMMENT '用户/系统标识',
  `public_key` text DEFAULT NULL COMMENT '公钥',
  `private_key` text DEFAULT NULL COMMENT '私钥',
  `private_password` varchar(50) NOT NULL DEFAULT '' COMMENT 'openssl的私钥密码',
  `flag` varchar(255) NOT NULL DEFAULT '' COMMENT '允许访问的消息类型标识，用x&1&2&4&8..表示[1:自定义;2:模版消息;3:验证消息]',
  `expire_ip` varchar(255) NOT NULL DEFAULT '' COMMENT '有效IP地址',
  `expire_begin_date` date NOT NULL DEFAULT '1000-01-01' COMMENT '生效日期',
  `expire_end_date` date NOT NULL DEFAULT '1000-01-01' COMMENT '失效日期',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='消息授权用户列表';
