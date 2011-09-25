<?php

import("@.Model.DnsModel");

class DnsAction extends Action {

    public function pd_lst() {
        $this->assign('type', 'dns');
        $dnsModel = new DnsModel();
        $map = $dnsModel->select();
        $this->assign('dnss', $map);
        $this->display('Dns/pd_lst');
    }

    public function pd_save($id) {
        $dnsModel = new DnsModel();
        if ($id == "") {
            // add
            $dnsModel->create();
            $dnsModel->add();
        } else {
            // update
            $dnsModel->create();
            $dnsModel->save();
        }
        $this->pd_lst();
    }

    public function pd_edt($id) {
        if ($id != "") {
            $condition['id'] = $id;
            $dnsModel = new DnsModel();
            $record = $dnsModel->where($condition)->select();
        }
        $this->assign('dns', $record[0]);
        $this->display('Dns/pd_edt');
    }

    public function pd_add() {
        $this->display('Dns/pd_add');
    }

}

?>