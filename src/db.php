<?php
namespace App;

use PDO;
use PDOStatement;

class db
{
    private static PDO $pdo;

    public static function connect():bool{
        try {
            self::$pdo = new PDO("mysql:host=localhost; dbname=siipuc", "root", "");
            return true;
        } catch (\Throwable $th) {
            $_ENV['pdo-error'] = $th;
            return false;
        }
    }

    public static function last_insert_id(){
        self::$pdo->lastInsertId();
    }

    public static function query(string $slq, array $values = null):PDOStatement|false{
        try {
            $stmt = self::$pdo->prepare($slq);
        } catch (\Throwable $th) {
            //throw $th;
            $_ENV['pdo-error'] = $th;
            $_ENV['pdo-error-message'] =  $th->getMessage();
            return false;
        }
        if ($stmt){
            if ($stmt->execute($values)){
                return $stmt;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function insert(array $params, string $table):PDOStatement|false{
        $fields = '';
        $values = '';
        foreach ($params as $key=>$value){
            $fields .= ", `$key`";
            $values .= ", :$key";
        }
        $fields = ltrim($fields, ', ');
        $values = ltrim($values, ', ');

        return self::query("INSERT INTO $table ($fields) VALUES($values)", $params);
    }

    public static function delete(string $table, string $condition, array $values = null){

        return self::query("DELETE FROM $table WHERE $condition", $values);
    }

    public static function uptdate(string $table, array $params, array $condition){
        $params = (array)$params;
        $values = '';
        foreach ($params as $key=>$value){
            $values .= ", `$key`=:$key";
        }

        $values = ltrim($values, ', ');
        if (is_string($condition)){
            $condition = [$condition,null];
        }

        if (isset($condition[1])) {
            foreach ($condition[1] as $key => $value){
                $params["cnd_$key"] = $value;
            }
        };

        $w = self::format_sql_where($condition[0]);

        return self::query("UPDATE FROM $table SET $values WHERE $w", $params);
    }

    private static function format_sql_where(string $condition):string{
        
        $w = str_replace('  ', ' ', $condition);
        $w = str_replace([' = ', '= ', ' ='], '=', $w);
        $w = str_replace(':', ':cnd_', $w);

        $w = preg_replace_callback('/\w+=/', function($match){
            return ( "`" . trim(($match[0]), "\t\n\r\0\x0B=") . "`" . '=');
        }, $w);

        return $w;
    }
}