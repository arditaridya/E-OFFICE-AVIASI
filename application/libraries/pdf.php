<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pdf {
    
    function pdf(){
        $CI = & get_instance();
        log_message('Debug', 'mPDF Library Class is loaded');
    }
    
    function load($params = null){
        include_once APPPATH.'/third_party/mpdf/mpdf.php';
        
        if($params == null){
            $params = '"en-GB-x","","","",0,0,3,3,5,3';
        }
        
        return new mPDF($params);
    }
}
?>