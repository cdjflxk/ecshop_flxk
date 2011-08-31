<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkShopModelAction
 * @author dejie
 */
class IndexModelAction extends Action {

    // 数据写入操作

    public function insert($name) {

        $xkShop = new Model('XkModel');   // 实例化模型类
        $xkShop->Create(); // 创建数据对象
        $xkShop->name = $name;
        $result = $xkShop->add(); // 写入数据库
        $this->redirect('index'); // 成功后重定向到index操作页面
    }

    // 数据查询操作

    public function queryAll() {

        $xkShop = new Model('IndexModel');   // 实例化模型类
        $list = $xkShop->select(); // 查询数据
        return $list;
    }
    
    // 数据查询操作

    public function queryByName($name) {
        $xkShop = new Model('IndexModel');   // 实例化模型类
        $record = $xkShop->where("name='title'")->find();
        return $record;
    }

    // 删除数据
    public function delete($id) {
        if($id){
            $xkShop = new Model('XkModel');
            $xkShop->delete($id);
        }
    }

    // 更新数据
    public function update($xkShop) {
        if ($xkShop) {
            if ($xkShop) {
                $result = $xkShop->add();
            }
        }
    }
    
public function init() 
    {
        $xk = D("XkIndexModel");   // 实例化模型类
        $xk->tname = '月夜星空软件工作室';
        $xk->tkeywords = '月夜星空软件工作室';
        $xk->tdescription = '虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务';
        $xk->add(); // 写入数据库
        
//        $xk->find(8);
//
//
//        // 输出序列化字段
//
//        echo $xk->name;
//
//        echo $xk->email;
//
//        echo $xk->address;

    }

}

?>
