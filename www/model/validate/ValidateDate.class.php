<?php
namespace model\validate;/**
 * Validate class için array oluşturan class
 *
 * @author Kemal Çağrı
 */
class ValidateDate{
    private $enAzZaman=null;
    private $enCokZaman=null;
    private $seperator;
    /**
     * construct method
     *
     * @param string $formValidateName
     * @param array $validateMethodArr
     * @param array $messageArr
    */
    public function __construct (\DateInterval $enAzZaman,\DateInterval $enCokZaman=null,$seperator='/')
    {
        $DATEADD = new \DateTime();
        if($enCokZaman!=null){
            $DATESUB = clone $DATEADD;
            $DATESUB->add($enCokZaman);
        }
        
        $DATEADD->sub($enAzZaman);
        $this->enAzZaman = $DATEADD;
        $this->enCokZaman = $DATESUB;
        $this->seperator = $seperator;
    }
    public function getEnAzZaman(){
        return $this->enAzZaman;
    }
    public function getEnCokZaman(){
        return $this->enCokZaman;
    }
    public function getSeperator(){
        return $this->seperator;
    }
}
