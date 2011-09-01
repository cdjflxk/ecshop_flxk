<?php
class IndexAction extends Action
{
    public function index() 
    {
        $indexModelAction = new IndexModelAction();
        $map = $indexModelAction->queryAllToMap();
        $this->assign('title',$map['title']);
        $this->assign('keywords',$map['keywords']);
        $this->assign('description',$map['description']);
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