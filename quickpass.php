<?php
class QuickPass{
   public static function main(){
	   //Clear cmd window, dump 50 empty lines
		function clearStdin($height = 50)
		{
			for ($i = 0; $i < $height; $i++) echo PHP_EOL;
		}
		//Clear StdIn clears input buffer
		clearStdin();
		function generateRandomString($length = 22) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}		
		echo "For (optional): ";
		$handlefor = fopen ("php://stdin","r");
		$linefor = fgets($handlefor);
		$linefor=preg_replace("/\s+/", "", $linefor);
		fclose($handlefor);
		clearStdin();
		echo "Length (default 24): ";
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		$line=preg_replace("/\s+/", "", $line);
		fclose($handle);
		clearStdin();
		if((int)$line==0){
			$line=24;
		}
		if((int)$line){
			$passvar=generateRandomString((int)$line);
			clearStdin();
			echo "Generated pass: ".$passvar.PHP_EOL;	
			clearStdin(9);
			exec('echo '.$passvar.'| clip');
			echo "(Copied to clipboard)".PHP_EOL;
			if(strlen($linefor)>0){
				if (!file_exists('Vault\\')) {
					mkdir('Vault\\', 0777, true);
				}
				file_put_contents("Vault\\".$linefor.".pass",$passvar);
				echo "(Saved to vault)".PHP_EOL;
			}
			echo PHP_EOL."QuickPass by KiRiCh";
			$handlehalt = fopen ("php://stdin","r");
			$linehalt = fgets($handlehalt);
			fclose($handlehalt);
		}
		else{
			echo "ABORTING!\n";
			exit;
		}
   }
}
QuickPass::main();
?>