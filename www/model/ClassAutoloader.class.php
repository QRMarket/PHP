<?php
namespace model;
/**
 * phar class'ının yaptığı görevi yürüten class
 * @author Kemal Çağrı
 */
class ClassAutoloader
{
    /**
     * phar dosyasının yol adresi
     * 
     * @var string
     */
    //private $pharFile;
    /**
     * class içeriğini tutan obje
     *
     * @var object
     */
    private static $instance;
    private static $includeFileArray = array();
    
    /**
     * class'ın singleton methodu
     *
     * @return \model\Phar
     */
    public static function &getInstance() {
        if (! (self::$instance instanceof self))
            self::$instance = new self();
        return self::$instance;
    }
	/**
	 * construct
	 */
    public function __construct(){
        //$this->pharFile = Config::PHAR_PATH.'/model.phar';
        //parent::__construct($this->pharFile, 0);
        //$this->pharFile = 'phar://'.$this->pharFile.'/';
    }
    /**
     * phar dosyasını get eder
     * 
     * @return string
     */
    public function getPharFile(){
        //return $this->pharFile;
    }
    /**
     * 
     * @param unknown $className
     */
    public static function load($className){
        $file = Config::ROOT_PATH.'/'.str_replace('_','-',str_replace('\\','/',$className)).'.class.php';
        //echo $file.'<br>';
        if (!in_array($file, self::$includeFileArray) && file_exists ( $file )) {
            self::$includeFileArray[] = $file;
            require_once $file;
        }
        else {
            $file = str_replace('\\','/',$className).'.class.php';

            //die($file);
            require_once $file;
            /*$PHAR = self::getInstance();
            
            if (!in_array($file, self::$includeFileArray)){
                if(isset($PHAR[$file])){
                    $file = $PHAR->getPharFile().$file;
                    self::$includeFileArray[] = $file;
                    require_once $file;
                }
            }*/
        }
    }
}