<?php

class Config
{
    public static $dbHost = 'localhost';
    public static $dbName = 'addressbook';
    public static $dbUser = 'addressbook';
    public static $dbPass = 'addressbook';

    public static $tableName = 'contact';
    public static $tableFields = array('firstname',
                                'lastname',
                                'email',
                                'telephone');

    public $firstTimeInstall = true;
}

