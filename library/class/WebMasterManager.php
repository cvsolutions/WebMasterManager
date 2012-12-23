<?php

/**
* WebMasterManager
*
* @uses     
*
* @category Manager
* @package  Library
* @author   Concetto Vecchio <info@cvsolutions.it>
* @license  GNU GPL
* @link     http://www.cvsolutions.it
*/
class WebMasterManager
{

    /**
     * $connect
     *
     * @var mixed
     *
     * @access public
     */
    public $connect;

    /**
     * __construct
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function __construct()
    {
    	global $config;

    	try {

    		$this->connect = new PDO(
    			$config['connection']['pdo'], 
    			$config['connection']['user'], 
    			$config['connection']['pass']
    			);
    		$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		return;

    	} catch (Exception $e) {
    		exit('Error connecting to SQL Server');
    	}
    }

    /**
     * install
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function install($params = array())
    {
        try {

            if(empty($params))
            {
                throw new Exception("Invalid Params", 1);
            }

            $obj = $this->connect->prepare('INSERT INTO wm_settings (name, usermail, pwd, last_login) VALUES (?, ?, ?, NOW())');
            $obj->execute(array(
                $params['name'],
                $params['usermail'],
                $params['pwd']
                ));

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * getUniqueIdentifier
     * 
     * @param mixed $table DB-table.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function getUniqueIdentifier($table)
    {
    	$new = mt_rand(10000, 99999);
    	$obj = $this->connect->prepare("SELECT id FROM {$table} WHERE id = ? LIMIT 0,1");
    	$obj->execute(array($new));

    	if($obj->rowCount() > 0)
    	{
    		$this->getUniqueIdentifier($table);
    		return;

    	} else {
    		return $new;
    	}
    }

    /**
     * checkExpiryHost
     * 
     * @param mixed $expiry Scadenza.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function checkExpiryHost($expiry)
    {
        $oggi = mktime(0, 0, 0, date('m'), date('j'), date('Y'));
        $week = strtotime("+1 week");

        if($oggi >= strtotime($expiry))
        {
            return 'label-important';

        } elseif ($week >= strtotime($expiry)) {

            return 'label-warning';

        } else {

            return;
        }
    }

    /**
     * ShowDrawChartHosting
     * 
     * @param mixed $table MySql Table.
     * @param mixed $where Append query.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function ShowDrawChartHosting($table, $where)
    {
        try {

            $obj = $this->connect->prepare(sprintf("SELECT id FROM %s %s", $table, $where));
            $obj->execute();
            return $obj->rowCount();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * __destruct
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function __destruct()
    {
    	$this->connect = null;
    	return $this;
    }


}