<?php
class Yantrakaar_NewsTicker_Model_Config{
	
	private static $config = array(
		'SETTINGS_ACTIVE'               		 => 'yantrakaar_newsticker/yantrakaar_newsticker_settings/enabled',
		'SETTINGS_GROUPID'                  		  => 'yantrakaar_newsticker/yantrakaar_newsticker_settings/groupid',
	  'SETTINGS_JQUERY'                 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_settings/jquery',
	
	
	  'GENERAL_MODE'                		 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/mode',
	  'GENERAL_SPEED'                		 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/speed',
	  'GENERAL_SLIDEMARGIN'                		  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/slidemargin',
	  'GENERAL_STARTSLIDE'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/startslide',
	  'GENERAL_RANDOMSTART'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/randomstart',
	  'GENERAL_SLIDESELECTOR'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/slideselector',
	  'GENERAL_INFINITELOOP'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/infiniteloop',
	  'GENERAL_HIDECONTROLONEND'                  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/hidecontrolonend',
	  'GENERAL_CAPTIONS'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/captions',
	  'GENERAL_TICKER'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/ticker',
	  'GENERAL_TICKERHOVER'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/tickerhover',
	  'GENERAL_ADAPTIVEHEIGHT'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/adaptiveheight',
	  'GENERAL_ADAPTIVEHEIGHTSPEED'               => 'yantrakaar_newsticker/yantrakaar_newsticker_general/adaptiveheightspeed',
	  'GENERAL_RESPONSIVE'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/responsive',
	  'GENERAL_USECSS'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/usecss',
	  'GENERAL_PRELOADIMAGES'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/preloadimages',
	  'GENERAL_TOUCHENABLED'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/touchenabled',
	  'GENERAL_SWIPETHRESHOLD'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/swipethreshold',
	  'GENERAL_ONETOONETOUCH'               	  => 'yantrakaar_newsticker/yantrakaar_newsticker_general/onetoonetouch',
	  'GENERAL_PREVENTDEFAULTSWIPEX'              => 'yantrakaar_newsticker/yantrakaar_newsticker_general/preventdefaultswipex',
	  'GENERAL_PREVENTDEFAULTSWIPEY'              => 'yantrakaar_newsticker/yantrakaar_newsticker_general/preventdefaultswipey',
	
	
	
	  'PAGER_ENABLED'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_pager/pager',
	  'PAGER_TYPE'                				  => 'yantrakaar_newsticker/yantrakaar_newsticker_pager/pagertype',
	  'PAGER_SHORTSEPARATOR'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_pager/pagershortseparator',
	
	
	
	  'CONTROLS_ENABLED'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/controls',
	  'CONTROLS_NEXTTEXT'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/nexttext',
	  'CONTROLS_PREVTEXT'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/prevtext',
	  'CONTROLS_AUTOCONTROLS'                	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/autocontrols',
	  'CONTROLS_STARTTEXT'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/starttext',
	  'CONTROLS_STOPTEXT'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/stoptext',
	  'CONTROLS_AUTOCONTROLSCOMBINE'              => 'yantrakaar_newsticker/yantrakaar_newsticker_controls/autocontrolscombine',
	
	
	  'AUTO_ENABLED'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/auto',
	  'AUTO_PAUSE'                	 	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/pause',
	  'AUTO_AUTOSTART'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/autostart',
	  'AUTO_AUTODIRECTION'               		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/autodirection',
	  'AUTO_AUTOHOVER'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/autohover',
	  'AUTO_AUTODELAY'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_auto/autodelay',
	
	
	  'CAROUSEL_MINSLIDES'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_carousel/minslides',
	  'CAROUSEL_MAXSLIDES'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_carousel/maxslides',
	  'CAROUSEL_MOVESLIDES'                	  	  => 'yantrakaar_newsticker/yantrakaar_newsticker_carousel/moveslides',
	  'CAROUSEL_SLIDEWIDTH'                	 	  => 'yantrakaar_newsticker/yantrakaar_newsticker_carousel/slidewidth',
	
	
	  'EASING_ENABLED'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_easing/enabled',
	  'EASING_EASING'                	 		  => 'yantrakaar_newsticker/yantrakaar_newsticker_easing/easing',
	
	
	  'VIDS_ENABLED'                	 		   => 'yantrakaar_newsticker/yantrakaar_newsticker_vids/enabled'
	);
	
	public function __call($method , $args)
	{
		switch (substr($method, 0, 3)) {
         case 'get' :
             $key = $this->_underscore(substr($method,3));
             $data = $this->getTickerConfig($key);
             return $data;
		}
		throw new Varien_Exception("Invalid method ".get_class($this)."::".$method."(".print_r($args,1).")");
	}
	
	protected function _underscore($name)
	 {
	     $result = strtoupper(preg_replace('/(.)([A-Z])/', "$1_$2", $name));
	     return $result;
	 }
	
	protected function getTickerConfig($key)
	{
		return Mage::getStoreConfig(self::$config[$key]);
	}
	
	
}