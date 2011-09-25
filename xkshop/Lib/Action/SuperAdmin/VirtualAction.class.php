<?php

import("@.Model.VirtualModel");

class VirtualAction extends Action {

    public function pd_lst() {
        $this->assign('type', 'virtual');
        $virtualModel = new VirtualModel();
        $map = $virtualModel->select();
        $this->assign('virtuals', $map);
        $this->display('Virtual/pd_lst');
    }

    public function pd_save($id) {
        $virtualModel = new VirtualModel();
        if ($id == "") {
            // add
            $virtualModel->create();
            $virtualModel->add();
        } else {
            // update
            $virtualModel->create();
            $virtualModel->save();
        }
        $this->pd_lst();
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