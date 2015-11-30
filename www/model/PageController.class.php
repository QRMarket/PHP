<?php
namespace model;
use model\validate\Validate;
use model\ErrorHandler\ErrorLog;
use model\Config;
abstract class PageController{    
    /**
     * api sayfası olup olmadığını get eder
     * @return boolean
     */
    public static function checApi(){
        if(preg_match('/api\./', $_SERVER['SERVER_NAME']))
            return true;
        return false;
    }
    /**
     * hangi class'ın veya php dosyasının controller olarak kullanılacağını belirler
     * 
     * @param string $class
     * @return void
     */
    protected static function init(){

        $pageResult = PageController::getPath();
        if($pageResult['kod']==0){
            $class = $pageResult['runPHPFile'];
            $checkApi = self::checApi();
            if($checkApi){
                $class = preg_replace('/controller/', 'mobileController', $class);
            }

            $VALIDATE = & Validate::getInstance ();
            #eski sistem controller php dosyasıysa include et
            if ($VALIDATE->checkFileExtension ( $class, '.php' )) {
                //echo $class;
                include $class;
            }
            #yeni sistem controller class ise method kontrolü yap
            else {
                $methodName='';
                if($checkApi){
                    $arr = $_REQUEST;
                    # buradaki p mobil api proxy dosyasının kullandığı page değişkenine tekabul etmekte
                    unset($arr['p']);
                }else{
                    $arr = $_GET;
                }
                foreach ($arr as $key=>$value){
                    if($key !='page'){
                        $methodName = $value;
                        break;
                    }
                }
                //echo $class;
                $OBJECT = new $class ();
                if ($methodName == '') {
                    echo $OBJECT->index();
                } else {
                    $method = self::getMethodName($arr,$VALIDATE,$methodName);

                    if (method_exists ( $OBJECT, $method )) {
                        $reflection = new \ReflectionMethod($OBJECT, $method);
                        if ($reflection->isPublic()) {
                            echo $OBJECT->$method ();
                        }else{
                            echo $OBJECT->index();
                            ErrorLog::errorHandler(E_ERROR, $class.' classının '.$method.' adında ki methodu public değil!', $class, __LINE__, '',false);
                        }
                    } else {
                        echo $OBJECT->index();
                    }
                }
            }
        }else{
            require 'controller/404.php';
        }
    }
    /**
     * çağrılacak method adını get eder
     *
     * @param array $parameterArr
     * @param Validate $VALIDATE
     * @param int|string $asama
     * @return string
     */
    private static function getMethodName(Array $parameterArr,Validate $VALIDATE,$asama){
        if($VALIDATE->checkIsInteger($asama)){
            return 'asama_'.$asama;
        }
        else{
            if(!array_key_exists('asama', $parameterArr)){
                foreach ($parameterArr as $key =>$value){
                    if($key !='page'){
                        $asama = $key.$value;
                        break;
                    }
                }
            }
        }
        return $asama;
    }

    private static function getPath(){
        $url = (string)Request::_get('page');
        foreach(ResourceBundle::GUPPYPAGELINKS as $link){
            if($url==$link['url']){
                return array('kod'=>0, 'page'=>$url, 'runPHPFile'=>$link['link']);
            }
        }

        return array('kod'=>1);
    }
    /**
     * cfg tablosundan gelen parametreleri get'e set eder
     *
     * @param string $json
     */
    protected static function setParameter(Array $array){
        if(array_key_exists('parameter', $array)){
            $arr = json_decode(html_entity_decode($array['parameter']),true);
            if(is_array($arr) && array_key_exists('get', $arr) && count($arr['get'])>0){
                foreach ($arr['get'] as $key=>$value){
                    $_GET[$key]=$value;
                }
            }
        }
    }
}
