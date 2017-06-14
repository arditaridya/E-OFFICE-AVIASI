<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nav {

    var $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    function display_child($parent, $id) {
        $sql = 'SELECT 
                  a."MODUL_ID", 
                  a."MODUL_NAMA", 
                  a."URL", 
		      DERIV1.JML,
                (
                SELECT
                    "A_ROLE"."LOADS"
                FROM
                    "A_ROLE"
                WHERE
                    "A_ROLE"."MODUL_ID" = A ."MODUL_ID"
                    AND "A_ROLE"."GROUP_ID" = '.$id.'
                LIMIT 1
                ) loads
                      FROM 
                          "A_MODUL" a 
                      LEFT OUTER JOIN 
                      (
                          SELECT 
                                  "PARENT_MODUL", 
                                  COUNT(*) JML 
                          FROM 
                                  "A_MODUL" 
                          GROUP BY 
                                  "PARENT_MODUL"
                  ) 
                  DERIV1 ON 
                  a."MODUL_ID" = cast(deriv1."PARENT_MODUL" as integer) 
                  WHERE 
                  a."PARENT_MODUL" = '.$parent.' order by "URUTAN"
                  ';
        $data = $this->ci->db->query($sql);
        
        $html = "";				
	foreach ($data->result() as $hole => $row) {
//                    $html .= $row->loads."<br>";
	  if ($row->jml > 0 && $row->loads == 1) {
		  $html .= 
			'
			<li>
			      <a class="active" href="javascript:;">
			      <i class="icon-home"></i> 
			      <span class="title">'.$row->MODUL_NAMA.'</span>
			      <span class="arrow "></span>
			      </a>
			      <ul class="sub-menu">';
			      
		  $html .= $this->display_child($row->MODUL_ID, $id);
		  
	  } elseif ($row->jml == "" && $row->loads == 1) {
	  
		  $html .= "<li ><a href='".base_url().$row->URL . "'><i class='icon-folder-open'></i> " . $row->MODUL_NAMA . " TEST</a></li>";
		    
	  }
	}
	$html .= "</ul></li>";
	return $html;
    }

}
