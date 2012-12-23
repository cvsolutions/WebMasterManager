<?php

/**
* WebMasterSettings
*
* @uses     WebMasterManager
*
* @category Settings
* @package  Library
* @author   Concetto Vecchio <info@cvsolutions.it>
* @license  GNU GPL
* @link     http://www.cvsolutions.it
*/
class WebMasterSettings extends WebMasterManager
{

    /**
     * $valid_location
     *
     * @var string
     *
     * @access public
     */
    public $valid_location = 'dashboard.php';
    
    /**
     * $error_location
     *
     * @var string
     *
     * @access public
     */
    public $error_location = 'index.php';

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
        $this->Smarty = new Smarty();
    }

    /**
     * loadInstall
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function loadInstall()
    {
        $row = $this->getSettings();
        if(!is_array($row))
        {
            header('Location: install.php');
            exit();
        }
    }

    /**
     * getSettings
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function getSettings()
    {
        try {
            $obj = $this->connect->prepare('SELECT * FROM wm_settings LIMIT 0,1');
            $obj->execute();
            return $obj->fetch();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }
    
    /**
     * getSettingsFromEmail
     * 
     * @param mixed $usermail Indirizzo E-mail.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function getSettingsFromEmail($usermail)
    {
        try {
            $obj = $this->connect->prepare('SELECT * FROM wm_settings WHERE usermail = ? LIMIT 0,1');
            $obj->execute(array($usermail));
            return $obj->fetch();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * AuthManager
     * 
     * @param mixed $user Email Address.
     * @param mixed $pwd  Password.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function AuthManager($user, $pwd)
    {
    	try {

    		if(empty($user) && empty($pwd))
    		{
    			throw new Exception("Controlla i campi obbligatori", 1);
    		}

            if(!preg_match('/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $user))
            {
                throw new Exception("Indirizzo email errato", 1);
            }

            $obj = $this->connect->prepare('SELECT name, last_login FROM wm_settings WHERE usermail = ? AND pwd = ? LIMIT 0,1');
            $obj->execute(array($user, $pwd));

            if($obj->rowCount() == 0)
            {
                throw new Exception('Email o Password non corretti', 1);
            }

            $row = $obj->fetch();
            session_regenerate_id();
            $_SESSION['WM_Auth'] = array(
                'WM_Logged' => TRUE,
                'WM_Start' => $row['last_login'],
                'WM_User' => $row['name']
                );

            $this->lastActivity();
            session_write_close();
            header(sprintf("Location: %s", $this->valid_location));
            exit();

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * isLogged
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function isLogged()
    {
        global $config;
        
        if($config['login']['enable'] === true)
        {
            session_regenerate_id();

            if(!isset($_SESSION['WM_Auth']))
            {
                session_destroy();
                header(sprintf("Location: %s", $this->error_location));
                exit();
            }
        }
    }

    /**
     * SignOut
     * 
     * @access public
     *
     * @return mixed Value.
     */
    function SignOut()
    {
    	global $action;

    	if(isset($action) && $action == 'logout')
    	{
    		session_destroy();
    		header(sprintf("Location: %s", $this->valid_location));
    		exit();
    	}
    }

    /**
     * CheckMail
     * 
     * @param mixed $usermail User Account Email.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function CheckMail($usermail)
    {
        global $config;

        $user = $this->getSettingsFromEmail($usermail);

        $this->Smarty->assign('config', $config);
        $this->Smarty->assign('row', $user);

        try {

            if(empty($usermail))
            {
                throw new Exception("Controlla i campi obbligatori", 1);
            }

            if(!preg_match('/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $usermail))
            {
                throw new Exception("Indirizzo email errato", 1);
            }

            if(!is_array($user))
            {
                throw new Exception("Nessun utente corrispondente all'email indicata", 1);
            }

            try {

                $mail = new PHPMailer();
                $mail->IsHTML(true);
                $mail->CharSet = 'utf-8'; 
                $mail->SetFrom($user['usermail'], $user['name']);
                $mail->Subject = sprintf('Credenziali %s', $config['name']);
                $mail->Body = $this->Smarty->fetch('lostpass.tpl');
                $mail->AddAddress($user['usermail']);

                if(!$mail->Send())
                {
                    throw new Exception($mail->ErrorInfo, 1);
                }
                
            } catch (phpmailerException $e) {
                exit($e->errorMessage());
            }

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * SettingsManager
     * 
     * @param array $params Form data _POST.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function SettingsManager($params = array())
    {
        try {

            if(empty($params))
            {
                throw new Exception("Invalid Params", 1);
            }

            $obj = $this->connect->prepare('UPDATE wm_settings SET name = ?, usermail = ?, pwd = ?, signature = ?');
            $obj->execute(array(
                $params['name'],
                $params['usermail'],
                $params['pwd'],
                $params['signature']
                ));

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    /**
     * lastActivity
     * 
     * @param mixed $last Last Time Login.
     *
     * @access public
     *
     * @return mixed Value.
     */
    function lastActivity($last)
    {
        try {

            $obj = $this->connect->prepare('UPDATE wm_settings SET last_login = NOW()');
            $obj->execute(array($params['last']));

        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

}