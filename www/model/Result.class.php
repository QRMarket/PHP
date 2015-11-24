<?php
namespace model;
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Kemal Sami KARACA
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/
use model\ResourceBundle;
    //require_once("ResourceBundle.class.php");
    class Result
    {
        public static $SUCCESS;
        public static $SUCCESS_EMPTY;
        public static $FAILURE_AUTH;
        public static $FAILURE_PARAM_MISMATCH;
        public static $FAILURE_EXCEPTION;
        public static $FAILURE_PERMISSION;

        public $resultText;
        public $resultCode;
        public $content;

        /*******************************************
         ************** CONSTRUCTOR ****************
         ******************************************/
        function __construct() {
            // allocate multiple constructor
        }

        /*******************************************
         ********* CONSTRUCTOR  METHODs ************
         ******************************************/
        public static function constructor_from_string($resultString){
            $result = Result::$FAILURE_EXCEPTION;
            try{
                $resultJson = json_decode($resultString);
                $result->resultText = $resultJson->resultText;
                $result->resultCode = $resultJson->resultCode;
                $result->content = isset($resultJson->content) ? $resultJson->content : null;
                return $result;
            }catch (Exception $ex){
                $result->content = "Result -> constructor_from_string :: " . $ex->getMessage();
            }
            return $result;
        }

        private static function constructor_default($resultCode,$resultText){
            $result = new Result();
            $result->resultCode = $resultCode;
            $result->resultText = $resultText;
            return $result;
        }


        /*******************************************
         ************* INITIALIZE ******************
         ******************************************/
        static function initializeStaticObjects(){
            Result::$SUCCESS                    = Result::$SUCCESS ? Result::$SUCCESS->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy001Code , ResourceBundle::ResultGuppy001Status);
            Result::$SUCCESS_EMPTY              = Result::$SUCCESS_EMPTY ? Result::$SUCCESS_EMPTY->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy010Code , ResourceBundle::ResultGuppy010Status);
            Result::$FAILURE_AUTH               = Result::$FAILURE_AUTH ? Result::$FAILURE_AUTH->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy101Code , ResourceBundle::ResultGuppy101Status);
            Result::$FAILURE_PARAM_MISMATCH     = Result::$FAILURE_PARAM_MISMATCH ? Result::$FAILURE_PARAM_MISMATCH->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy511Code , ResourceBundle::ResultGuppy511Status);
            Result::$FAILURE_EXCEPTION          = Result::$FAILURE_EXCEPTION ? Result::$FAILURE_EXCEPTION->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy521Code , ResourceBundle::ResultGuppy521Status);
            Result::$FAILURE_PERMISSION         = Result::$FAILURE_PERMISSION ? Result::$FAILURE_PERMISSION->setContent(null) : Result::constructor_default(ResourceBundle::ResultGuppy531Code , ResourceBundle::ResultGuppy531Status);
        }


        function getContent(){
            return $this->content;
        }
        function setresultText($resultText) {
            $this->resultText = $resultText;
        }
        function setresultCode($resultCode) {
            $this->resultCode = $resultCode;
        }

        function setContent($content){
            $resultObj = new Result($this->resultCode, $this->resultText);
            $resultObj->content = $content;
            return $resultObj;
        }

        function checkResult($res){
            if(!is_null($res)){
                return (strcmp($this->resultCode, $res->resultCode)==0);
            }else{
                return false;
            }
        }


        /**
         *
         * @param type $obj
         * @return type
         *
         * This function removes null values from object
         */
        static function object_unset_nulls($obj)
        {
            $arrObj = is_object($obj) ? get_object_vars($obj) : $obj;
            foreach($arrObj as $key => $val)
            {
                $val = (is_array($val) || is_object($val)) ? Result::object_unset_nulls($val) : $val;
                if (is_array($obj))
                    $obj[$key] = $val;
                else
                    $obj->$key = $val;
                if($val == null)
                    unset($obj->$key);
            }
            return $obj;
        }
    }

?>