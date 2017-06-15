<?php
/**
 * Created by PhpStorm.
 * User: div
 * Date: 13.02.17
 * Time: 14:51
 */


function connect_to_base()
{
    $mysql = new mysqli('127.0.0.1', 'root', '', 'tasks');
    $mysql->query("SET NAMES utf8 COLLATE utf8_unicode_ci");

    return $mysql;
}
