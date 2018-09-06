<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Obtener reporte</h1>

<form id="generateReportForm" action="FBConnector/firereport" method="post">
    <label for="account_id">
        Account ID:
        <input type="text" value="act_513750735737110" name="account_id" id="account_id" placeholder="act_290942025017254">
    </label><br/><br/>
    <label for="app_id">
        App ID:
        <input type="text" value="1760875590894985" name="app_id" id="app_id" placeholder="276998309147149">
    </label><br/><br/>
    <label for="app_secret">
        App secret:
        <input type="text" value="9b8ca461317c674a3ac840b0f2f5ab16" name="app_secret" id="app_secret" placeholder="b046d3924bbcbf520a6cdc17dfea40ca">
    </label><br/><br/>
    <label for="access_token">
        Access token:
        <input type="text" value="EAAZABgcwWxYkBAG0ZCzpsuiZBVyuPuY0P1BDFZA4hzH58XviDFFSd1c4ajZCGZAcMwpkN9GGTmUbc2WvZAC0pgmDMR0pWoUmcb2PP7HbjpnZBPpjxBveHgGZCdyAotYpkEmgaKvGZBvBx5jWAUeMgcAFMICJAGCnQZB5LjEzp9s2gTFrG1qhZCvPTLlQVQJGpC7TnbRxTcGyJqqPjWe1ZCrF9eaiubf52dfam0KYZD" name="access_token" id="access_token" placeholder="EAAD77bHR8g0BABVPmU9jnPF1cT8BGWv8S">
    </label><br/><br/>
    <label for="date_start">
        Desde:
        <input type="text" value="2018-06-01" name="date_start" id="date_start" placeholder="YY-mm-dd">
    </label><br/><br/>
    <label for="date_end">
        Hasta:
        <input type="text" value="2018-08-25" name="date_end" id="date_end" placeholder="YY-mm-dd">
    </label><br/><br/>
    <br/>
    <input type="submit" value="Generar">
</form>