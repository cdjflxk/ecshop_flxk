<?php

import("@.Model.TemplateModel");

class TemplateAction extends Action {

    public function pd_lst() {
        $this->assign('type', 'template');
        $templateModel = new TemplateModel();
        $map = $templateModel->select();
        $this->assign('templates', $map);
        $this->display('Template/pd_lst');
    }

    public function pd_save($id) {
        $templateModel = new TemplateModel();
        if ($id == "") {
            // add
            $templateModel->create();
            $templateModel->add();
        } else {
            // update
            $templateModel->create();
            $templateModel->save();
        }
        $this->pd_lst();
    }

    public function pd_edt($id) {
        if ($id != "") {
            $condition['id'] = $id;
            $virtualModel = new TemplateModel();
            $record = $virtualModel->where($condition)->select();
        }
        $this->assign('template', $record[0]);
        $this->display('Template/pd_edt');
    }
    
    public function pd_delete($id) {
        if ($id != "") {
            $condition['id'] = $id;
            $virtualModel = new TemplateModel();
            $record = $virtualModel->where($condition)->delete();
        }
        $this->pd_lst();
    }

    public function pd_add() {
        $this->display('Template/pd_add');
    }

}

?>