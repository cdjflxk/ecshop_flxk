<?php

import("@.Model.VirtualModel");

class VirtualAction extends Action {

    public function pd_lst() {
        $this->assign('type', 'virtual');
        $virtualModel = M('Virtual');
        $map = $virtualModel->select();
        $this->assign('virtuals', $map);
        $this->display('Virtual/pd_lst');
    }

    public function pd_save() {
        $virtualModel = new VirtualModel();
        $id = "";
        $id = $_POST["id"];
        if ($id == "") {
            // add
            $virtualModel->create();
            $virtualModel->add();
        } else {
            // update
            $virtualModel->create();
            $virtualModel->save();
        }
        redirect("Virtual/pd_lst?type=virtual", 2, "保存成功,将在2秒钟后自动跳转");
    }

    public function pd_edt($id) {
        if ($id != "") {
            $condition['id'] = $id;
            $virtualModel = new VirtualModel();
            $record = $virtualModel->where($condition)->select();
        }
        $this->assign('id', $id);
        $this->assign('virtual', $record[0]);
        $this->display('Virtual/pd_edt');
    }

    public function pd_add() {
        $this->display('Virtual/pd_add');
    }

}

?>