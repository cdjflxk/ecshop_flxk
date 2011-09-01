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
    public function queryAllToArray() {

        $xkShop = new Model('IndexModel');   // 实例化模型类
        $list = $xkShop->select(); // 查询数据
        return $list;
    }
    
    // 数据查询操作
    public function queryAllToMap() {
        $xkShop = new Model('IndexModel');   // 实例化模型类
        $list = $xkShop->select(); // 查询数据
        $array_push = array();
        foreach ($list as &$value) {
            $temp = array($value['name']=> $value['value']);
            $array_push = array_merge($array_push, $temp); ;
        }
        return $array_push;
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

}

?>
