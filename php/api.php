<?php


class api
{


	private $db;
	/**
	 * Constructor - open DB connection
	 *
	 * @param none
	 * @return database
	 */
	function __construct()
	{
		$conf = json_decode(file_get_contents('configuration.json'), TRUE);
		$this->db = new mysqli($conf["host"], $conf["user"], $conf["password"], $conf["database"]);
	}


	/**
	 * Destructor - close DB connection
	 *
	 * @param none
	 * @return none
	 */
	function __destruct()
	{
		$this->db->close();
	}


	function getFilesName($params)
	{	
		$list = array();
		#each($params["path"]);
		$dir = new DirectoryIterator($params["path"]);
		foreach ($dir as $fileinfo) {
			if(strpos($fileinfo->getFilename(),"jpg")!==false||strpos($fileinfo->getFilename(),"png")!==false){
				 $list[]=$fileinfo->getFilename();
			}
		}
		return $list;
	}

}


?>
