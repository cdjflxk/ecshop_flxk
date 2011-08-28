<?php
class IndexAction extends Action
{
    public function index() 
    {
        $this->assign('title','月夜星空软件工作室');
        $this->assign('keywords','域名注册|网络实名|主机租赁|企业邮局|网站策划|企业邮局|主机托管|主机租用|服务器租用');
        $this->assign('description','虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务');
        $this->assign('phone','7*24小时客户服务热线电话：18701132241');
        $this->display();
    }
    public function dns() 
    {
        $this->display();
    }
    public function virtual() 
	{
        $this->display();
    }
	public function email() 
	{
        $this->display();
    }
	public function vps() 
	{
        $this->display();
    }
	public function shop() 
	{
        $this->display();
    }
	public function site() 
	{
        $this->display();
    }
	public function helpcenter() 
	{
        $this->display();
    }
	public function business() 
	{
        $this->display();
    }
}
?>