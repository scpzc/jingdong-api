<?php
class LdopAlphaDistributeCenterJosConvertRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.distributeCenter.jos.Convert";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $distributeCenterListXml;
    	                        
	public function setDistributeCenterListXml($distributeCenterListXml){
		$this->distributeCenterListXml = $distributeCenterListXml;
         $this->apiParas["distributeCenterListXml"] = $distributeCenterListXml;
	}

	public function getDistributeCenterListXml(){
	  return $this->distributeCenterListXml;
	}

                        	}





        
 
