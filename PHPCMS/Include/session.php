<?php
/**
 * Created by PhpStorm.
 * User: SPR!NG
 * Date: 3/16/2018
 * Time: 9:10 PM
 */
session_start();
function Message() {
    if(isset($_SESSION["ErrorMessage"])){
        $Output = "<div class=\"alert alert-danger\">";
        $Output.= htmlentities($_SESSION["ErrorMessage"]);
        $Output.="</div>";
        return $Output;
    }
}
