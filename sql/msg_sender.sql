-- ----------------------------
--  Table structure for `msg_sender`
-- ----------------------------
CREATE TABLE `msg_sender` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `send_way` varchar(50) NOT NULL DEFAULT '' COMMENT '发送方式[1:手机;2:邮箱;3:公众号]',
  `auth_user_id` bigint(20) unsigned NOT NULL DEFAULT 0 COMMENT '授权用户ID，如果为系统公用，这里设置为默认0，每种方式的公用只能一种，由db-sql导入',
  `exts` json COMMENT '扩展信息:发送方式的配置参数等信息',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_uuid` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8 COMMENT='消息发送配置:短信(公用)，邮件(公用、私有)，公众号(公用、私有)';
