<?php

/**
* WebMasterAccount
*
* @uses     WebMasterManager
*
* @category Account
* @package  Library
* @author   Concetto Vecchio <info@cvsolutions.it>
* @license  GNU GPL
* @link     http://www.cvsolutions.it
*/
class WebMasterAccount extends WebMasterManager
{

    /**
     * $id_account
     *
     * @var mixed
     *
     * @access public
     */
    public $id_account;

    /**
     * $id_host
     *
     * @var mixed
     *
     * @access public
     */
    public $id_host;

    /**
     * __construct
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function __construct()
    {
    	parent::__construct();
    }

    /**
     * NewAccount
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function NewAccount($params = array())
    {
    	try {

    		if(empty($params))
    		{
    			throw new Exception("Invalid Params", 1);
    		}

    		$obj = $this->connect->prepare('INSERT INTO wm_account (id, hosting, name, account_type, username, password, information, registered) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())');
    		$obj->execute(array(
    			$this->getUniqueIdentifier('wm_account'),
    			$this->id_host,
    			$params['name'],
    			$params['account_type'],
    			$params['username'],
    			$params['password'],
    			$params['information']
    			));

    	} catch (Exception $e) {
    		exit($e->getMessage());
    	}
    }

    /**
     * EditAccount
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function EditAccount($params = array())
    {
    	try {

    		if(empty($params))
    		{
    			throw new Exception("Invalid Params", 1);
    		}

    		$obj = $this->connect->prepare('UPDATE wm_account SET name = ?, account_type = ?, username = ?, password = ?, information = ? WHERE id = ? AND hosting = ?');
    		$obj->execute(array(
    			$params['name'],
    			$params['account_type'],
    			$params['username'],
    			$params['password'],
    			$params['information'],
                $this->id_account,
                $this->id_host
                ));

    	} catch (Exception $e) {
    		exit($e->getMessage());
    	}
    }

    /**
     * EditSendingAccount
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function EditSendingAccount($params = array())
    {
        try {

            if(empty($params))
            {
                throw new Exception("Invalid Params", 1);
            }

            $tmp = $this->connect->prepare('UPDATE wm_account SET sending = 0 WHERE hosting = ?');
            $tmp->execute(array($this->id_host));

            if(is_array($params['sending']))
            {
                foreach ($params['sending'] as $key => $value)
                {
                    $obj = $this->connect->prepare('UPDATE wm_account SET sending = 1 WHERE id = ? AND hosting = ?');
                    $obj->execute(array($key, $this->id_host));
                }
            }

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * ShowAccount
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function ShowAccount()
    {
    	global $config;
    	try {

    		$obj = $this->connect->prepare('SELECT * FROM wm_account WHERE hosting = ? ORDER BY id DESC');
    		$obj->execute(array($this->id_host));

    		if($obj->rowCount() > 0)
    		{
    			foreach ($obj->fetchAll() as $row) {
    				$arrayName[] = array(
    					'id' => $row['id'],
                        'name' => $row['name'],
                        'username' => $row['username'],
                        'password' => $row['password'],
                        'account_type' => $config['account'][$row['account_type']],
                        'information' => $row['information'],
                        'sending' => $row['sending']
                        );
    			}
    			return $arrayName;
    		}

    	} catch (Exception $e) {
    		exit($e->getMessage());
    	}
    }

    /**
     * DetailAccount
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function DetailAccount()
    {
    	try {

    		if(empty($this->id_account) && empty($this->id_host))
    		{
    			throw new Exception("ID not found...", 1);
    		}

    		$obj = $this->connect->prepare('SELECT * FROM wm_account WHERE hosting = ? AND id = ? LIMIT 0,1');
    		$obj->execute(array($this->id_host, $this->id_account));
    		return $obj->fetch();

    	} catch (Exception $e) {
    		exit($e->getMessage());
    	}
    }

    /**
     * DeleteAccount
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function DeleteAccount()
    {
        try {

            if(empty($this->id_account) && empty($this->id_host))
            {
                throw new Exception("ID not found...", 1);
            }

            $obj = $this->connect->prepare('DELETE FROM wm_account WHERE id = ? AND hosting = ?');
            $obj->execute(array($this->id_account, $this->id_host));
            return;
            
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

}