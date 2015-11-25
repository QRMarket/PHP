<?php
/********************** PAGE DETAILS ********************/
/* @Programmer  : Guppy Org.
 * @Maintainer  : Guppy Org.
 * @Created     : 24.11.2015
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

namespace model;
use util\constants\ContentType;
use model\Result;


class Category{

    const SERVICE = 'SectionServlet';




    public static function getCategoryList()
    {
        $params['do'] = 'getSections';
        $curlResult = Curl::get_data( Config::JSON_URL . Category::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);

        return json_encode($curlResult);
    }



    public static function getCategoryTree()
    {
        $params['do'] = 'getSections';
        $params['listType'] = 'tree';
        $params['limit'] = '3';
        $curlResult = Curl::get_data( Config::JSON_URL . Category::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);

        return json_encode($curlResult);
    }



    public static function getSubCategoryById($parentId)
    {
        $params['do'] = 'getSections';
        $params['parentId'] = $parentId;
        $curlResult = Curl::get_data( Config::JSON_URL . Category::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);

        return json_encode($curlResult);
    }


}
