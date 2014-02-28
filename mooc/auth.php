<?php 
require_once "db.class.php";

class auth {
	
	static function islogged (){
		
		if(isset ($_SESSION['Auth']['pseudo'])){
			return true;	
		}
		return false;
	}

	function login() {

		if(isset($_SESSION['Auth']) && isset ($_SESSION['Auth']['pseudo'])){
			return true;
		} else {

			$password = sha1($_POST['password']) ;
			$pseudo   = $_POST['pseudo'] ;
			$q = array('pseudo' => $pseudo, 'password' => $password);
			$db = new DB();
			$sql = "select * from users where pseudo =:pseudo and password= :password"; 
			//  print_r($sql); 
			$t  = $db->queryObj( $sql, $q);
			if(count($t)>0) {
				$_SESSION['Auth'] = array(
					'pseudo'=> $t[0]->pseudo,
					'password'  => $t[0]->password			
				); 
				return true; 
			}

		}








	}
}
?>
  
