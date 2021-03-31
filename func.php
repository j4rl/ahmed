<?php
//--------------------------------------------------Function file, makes stuff happen
    //Set language
    require_once "settings.php";
    require_once "./lang/".$strLang.".php";
    //Set CSS-files
    //$strCSS-color=$colors;
    //$strCSS-style="main.css";
    //$strCSS-fonts="";
    require_once "crypt.php";

//--------------------------------------------------------------classes and functions

/*
    list_members_all
    json_members_all
    list_my_cases(myID)
    list_my_members(myID)
    get_my_actions(myID)
    get_case_info(caseID)
    get_member_id


*/
function getNames_all(){
    $x=new Database("case");
    $result =$x->runQuery("SELECT namn, medlnr FROM tblmem");
    $strRet='[';
    while($rad=mysqli_fetch_assoc($result)){
        //console.log($rad);
        $temp=$x->dec($rad['namn'])." ".$rad['medlnr'];
        //$temp=$rad['namn'];
        $strRet=$strRet.'"'.$temp.'",';
    }
    $strRet=rtrim($strRet, ',');
    $strRet=$strRet."]";
    //console.log($strRet);
    return $strRet;
}
?>