<?php

/**
* WebMasterHosting
*
* @uses     WebMasterManager
*
* @category Hosting
* @package  Library
* @author   Concetto Vecchio <info@cvsolutions.it>
* @license  GNU GPL
* @link     http://www.cvsolutions.it
*/
class WebMasterHosting extends WebMasterManager
{

    /**
     * $id_hosting
     *
     * @var mixed
     *
     * @access public
     */
    public $id_hosting;

    /**
     * $Setting
     *
     * @var mixed
     *
     * @access private
     */
    private $Setting;

    /**
     * $Account
     *
     * @var mixed
     *
     * @access private
     */
    private $Account;

    /**
     * $Smarty
     *
     * @var mixed
     *
     * @access private
     */
    private $Smarty;

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
        $this->Setting = new WebMasterSettings();
        $this->Account = new WebMasterAccount();
        $this->Smarty = new Smarty();
    }

    /**
     * NewHosting
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function NewHosting($params = array())
    {
    	try {

    		if(empty($params))
    		{
    			throw new Exception("Invalid Params", 1);
    		}

    		$obj = $this->connect->prepare('INSERT INTO wm_hosting (id, name, domain, expiry, host_type, type_ftp, host_ftp, user_ftp, pwd_ftp, port_ftp, transfer_ftp, type_db, host_db, user_db, pwd_db, host_email, pwd_email, imap_email, pop_email, smtp_email, provider, information, auth_info, registered, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)');
    		$obj->execute(array(
    			$this->getUniqueIdentifier('wm_hosting'),
    			$params['name'],
    			$params['domain'],
    			date('Y-m-d', strtotime($params['expiry'])),
                $params['host_type'],
                $params['type_ftp'],
    			$params['host_ftp'],
    			$params['user_ftp'],
                $params['pwd_ftp'],
                $params['port_ftp'],
                $params['transfer_ftp'],
                $params['type_db'],
                $params['host_db'],
                $params['user_db'],
                $params['pwd_db'],
                $params['host_email'],
                $params['pwd_email'],
                $params['imap_email'],
                $params['pop_email'],
                $params['smtp_email'],
                $params['provider'],
                $params['information'],
                $params['auth_info'],
                $params['status']
                ));

    	} catch (Exception $e) {
    		exit($e->getMessage());
    	}
    }

    /**
     * EditHosting
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function EditHosting($params = array())
    {
        try {

            if(empty($params))
            {
                throw new Exception("Invalid Params", 1);
            }

            $obj = $this->connect->prepare('UPDATE wm_hosting SET name = ?, domain = ?, expiry = ?, host_type = ?, type_ftp = ?, host_ftp = ?, user_ftp = ?, pwd_ftp = ?, port_ftp = ?, transfer_ftp = ?, type_db = ?, host_db = ?, user_db = ?, pwd_db = ?, host_email = ?, pwd_email = ?, imap_email = ?, pop_email = ?, smtp_email = ?, provider = ?, information = ?, auth_info = ?, status = ? WHERE id = ?');
            $obj->execute(array(
                $params['name'],
                $params['domain'],
                date('Y-m-d', strtotime($params['expiry'])),
                $params['host_type'],
                $params['type_ftp'],
                $params['host_ftp'],
                $params['user_ftp'],
                $params['pwd_ftp'],
                $params['port_ftp'],
                $params['transfer_ftp'],
                $params['type_db'],
                $params['host_db'],
                $params['user_db'],
                $params['pwd_db'],
                $params['host_email'],
                $params['pwd_email'],
                $params['imap_email'],
                $params['pop_email'],
                $params['smtp_email'],
                $params['provider'],
                $params['information'],
                $params['auth_info'],
                $params['status'],
                $this->id_hosting
                ));

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * EditSendingHosting
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function EditSendingHosting($params = array())
    {
        try {

            if(empty($params))
            {
                throw new Exception("Invalid Params", 1);
            }

            $obj = $this->connect->prepare('UPDATE wm_hosting SET sending_ftp = ?, sending_db = ?, sending_email = ? WHERE id = ?');
            $obj->execute(array(
                $params['sending_ftp'][0],
                $params['sending_db'][0],
                $params['sending_email'][0],
                $this->id_hosting
                ));

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }


    /**
     * ShowHosting
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function ShowHosting()
    {
        global $config;
        try {

            $obj = $this->connect->prepare('SELECT * FROM wm_hosting ORDER BY id DESC');
            $obj->execute();

            if($obj->rowCount() > 0)
            {
                foreach ($obj->fetchAll() as $row) {
                    $arrayName[] = array(
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'domain' => $row['domain'],
                        'host_email' => $row['host_email'],
                        'expiry' => $row['expiry'],
                        'class_expiry' => $this->checkExpiryHost($row['expiry']),
                        'provider' => $config['provider'][$row['provider']],
                        'status' => $config['status'][$row['status']]
                        );
                }
                return $arrayName;
            }
            
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * ShowDashboardHosting
     * 
     * @param mixed $query SQL Query.
     * @param int   $limit LIMIT SQL.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function ShowDashboardHosting($query, $limit = 5)
    {
        global $config;
        try {

            $obj = $this->connect->prepare(sprintf("SELECT * FROM wm_hosting %s LIMIT 0,%d", $query, $limit));
            $obj->execute();

            if($obj->rowCount() > 0)
            {
                foreach ($obj->fetchAll() as $row) {
                    $arrayName[] = array(
                        'id' => $row['id'],
                        'domain' => $row['domain'],
                        'expiry' => $row['expiry'],
                        'class_expiry' => $this->checkExpiryHost($row['expiry']),
                        'class_status' => $row['status'] == 1 ? 'label-success' : 'label-important',
                        'status' => $config['status'][$row['status']]
                        );
                }
                return $arrayName;
            }
            
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * DetailHosting
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function DetailHosting()
    {
        try {

            if(empty($this->id_hosting))
            {
                throw new Exception("ID not found...", 1);
            }

            $obj = $this->connect->prepare('SELECT * FROM wm_hosting WHERE id = ? LIMIT 0,1');
            $obj->execute(array($this->id_hosting));
            return $obj->fetch();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * DeleteHosting
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function DeleteHosting()
    {
        try {

            if(empty($this->id_hosting))
            {
                throw new Exception("ID not found...", 1);
            }

            $obj = $this->connect->prepare('DELETE FROM wm_hosting WHERE id = ?; DELETE FROM wm_account WHERE hosting = ?');
            $obj->execute(array($this->id_hosting, $this->id_hosting));
            return;
            
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * SendingHostingEmail
     * 
     * @param mixed $host_email Email.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function SendingHostingEmail($host_email)
    {
        global $config;

        $user = $this->Setting->getSettings();

        $this->Account->id_host = $this->id_hosting;
        $account = $this->Account->ShowAccount();
        $hosting = $this->DetailHosting();

        $this->Smarty->assign('config', $config);
        $this->Smarty->assign('user', $user);
        $this->Smarty->assign('account', $account);
        $this->Smarty->assign('hosting', $hosting);

        try {

            if(!empty($host_email))
            {
                if(!preg_match('/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $host_email))
                {
                    throw new Exception("Indirizzo email errato", 1);
                }
            }

            try {

                if(!empty($host_email))
                {
                    $mail = new PHPMailer();
                    $mail->IsHTML(true);
                    $mail->CharSet = 'utf-8'; 
                    $mail->SetFrom($user['usermail'], $user['name']);
                    $mail->Subject = sprintf('Riepilogo Servizio Hosting %s', $hosting['domain']);
                    $mail->Body = $this->Smarty->fetch('summary_hosting.tpl');
                    $mail->AddAddress($host_email);

                    if(!$mail->Send())
                    {
                        throw new Exception($mail->ErrorInfo, 1);
                    }
                }
                
            } catch (phpmailerException $e) {
                exit($e->errorMessage());
            }

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }




}