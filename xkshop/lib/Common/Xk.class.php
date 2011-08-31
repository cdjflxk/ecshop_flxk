<?php
class Xk extends Action
{
     static public function initApp() 
    {
        $xk = new D('XkIndexModel');   // 实例化模型类
        $xk->tname = '月夜星空软件工作室';
        $xk->tdescription = '虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务';
        $xk->add(); // 写入数据库
    }
}
?>