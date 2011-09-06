<?php


/**
 * Description of BaseModelAction
 * @author dejie
 */
class BaseModelAction extends Action {

    // 数据写入操作
    public function addModel($model) {
        $result = $model->add(); // 写入数据库
    }

    // 数据查询操作,该方法将每一个每一个记录转化为一个数组，最后的结果是一个二维数组
    public function queryAllToArray($modelClassName) {
        $model = new Model($modelClassName);   // 实例化模型类
        $list = $model->select(); // 查询数据
        return $list;
    }
    
   // 数据查询操作，该方法将查询结果转换为一个map 
    public function queryAllToSigleMap($modelClassName) {
        $model = new Model($modelClassName);   // 实例化模型类
        $list = $model->select(); // 查询数据
        $array_push = array();
        foreach ($list as &$value) {
            $temp = array($value['name']=> $value['value']);
            $array_push = array_merge($array_push, $temp); ;
        }
        return $array_push;
    }
    
   // 数据查询操作，该方法将查询结果转换为一个ArrayMap
    public function queryAllToArrayMap($modelClassName) {
        $model = new Model($modelClassName);   // 实例化模型类
        $list = $model->select(); // 查询数据
        $array_push = array();
        foreach ($list as &$value) {
            $temp = array($value['name']=> $value['value']);
            $array_push = array_merge($array_push, $temp); ;
        }
        return $array_push;
    }
    
    // 数据查询操作，该方法根据指定的字段名称和值查询指定的对象
    public function queryByName($modelClassName,$name,$value){
        $xkShop = new Model("$modelClassName");   // 实例化模型类
        $record = $xkShop->where("$name='$value'")->find();
        return $record;
    }

    // 删除数据
    public function deleteById($id) {
        if($id){
            $xkShop = new Model('UserModel');
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
