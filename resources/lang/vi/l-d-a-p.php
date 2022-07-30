<?php 
return [
  'labels' => [
    'title' => 'LDAP',
    'description' => '将 咖啡 壶 与 LDAP 连接',
    'ldap' => 'LDAP',
    'platform' => '平台',
    'extensions' => '扩展',
    'Configuration Success' => 'LDAP 配置 更新 成功！',
    'Host Primary Help' => '域 控 主机 的 域名 地址 或者 ip 地址。',
    'Host Secondary Help' => '域 控 主机 的 域名 地址 或者 ip 地址 ， 这 是 一个 备用 地址 ， 如果 主 域 控 连接 ， 将 自动 选择',
    'Port Primary Help' => '主 域 控 服务 的 端口 号。',
    'Port Secondary Help' => '备 域 控 服务 的 端口 号。',
    'Base DN' => '域 控 的 起始 域名 ， 格式 请 按照 dc = corp, dc = acme, dc = org 填写。',
    'Login' => '域 登录 将 优先 于 传统 登录。',
    'Bind Administrator' => '指定 的 域 账户 将 作为 咖啡 壶 的 管理员 角色。',
    'Test Connection' => '测试 连接 （请先 保存 配置）',
    'Test Connection Help' => '请先 保存 配置 后 进行 连接 测试。',
    'Connect Success' => '连接 LDAP 服务器 验证 成功！',
    'Connect Missing Password' => '缺失 必要 的 密码！',
    'Connect Missing Username' => '缺失 必要 的 用户 名！',
    'LDAP Disabled' => 'LDAP 未 启用！',
    'Connect Fail' => '连接 失败 ， 请 确认 配置 信息！',
    'Connect Error' => '执行 错误 ：',
  ],
  'fields' => [
    'ad_enabled' => '启用 状态',
    'ad_host_primary' => '主 域 控 地址',
    'ad_host_secondary' => '备 域 控 地址',
    'ad_port_primary' => '主 域 控 端口',
    'ad_port_secondary' => '备 域 控 端口',
    'ad_base_dn' => '域 控 根 名',
    'ad_username' => '域 控 验证 用户',
    'ad_password' => '域 控 验证 密码',
    'ad_use_ssl' => '启用 SSL',
    'ad_use_tls' => '启用 TLS',
    'ad_login' => '启用 域 登录',
    'ad_bind_administrator' => '域 管理员 的 账户',
  ],
  'options' => [
  ],
];