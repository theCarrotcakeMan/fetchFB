<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Obtener reporte</h1>

<form id="generateReportForm" action="FBConnector/firereport" method="post">
    <label for="account_id">
        Account ID:
        <input type="text" value="act_290942025017254" name="account_id" id="account_id" placeholder="act_290942025017254">
    </label><br/><br/>
    <label for="app_id">
        App ID:
        <input type="text" value="276998309147149" name="app_id" id="app_id" placeholder="276998309147149">
    </label><br/><br/>
    <label for="app_secret">
        App secret:
        <input type="text" value="b046d3924bbcbf520a6cdc17dfea40ca" name="app_secret" id="app_secret" placeholder="b046d3924bbcbf520a6cdc17dfea40ca">
    </label><br/><br/>
    <label for="access_token">
        Access token:
        <input type="text" value="EAAD77bHR8g0BABVPmU9jnPF1cT8BGWv8SXowKcdVtqae8wbk4lZAENDUsf0XL5FryPSTBYNJvCOTNe2hKaBPbZBfb0hTPCktvRfhLrsLkPkuXWwvIM46NpAEZCflAlCagUcnSOitoxUerp5iDA5yEHrLObJFE4ZAGIolAk3TOtRXHMNPBNj7Tv3P32zd3yl3xa1LsqbKVKZBK9GkSepe3obspDDJA6WoZD" name="access_token" id="access_token" placeholder="EAAD77bHR8g0BABVPmU9jnPF1cT8BGWv8S">
    </label><br/><br/>
    <label for="date_start">
        Desde:
        <input type="text" value="2018-08-01" name="date_start" id="date_start" placeholder="">
    </label><br/><br/>
    <label for="date_end">
        Hasta:
        <input type="text" value="2018-08-31" name="date_end" id="date_end" placeholder="">
    </label><br/><br/>
    <br/>
    <input type="submit" value="Generar">
</form>