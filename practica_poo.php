<?php
	class TablasMultiplicar{
		public $num;
		public $numMultiplicar;

		function __construct() {
			$this->num = 12;
			$this->numMultiplicar = 12;
		}
		public function valores($parametro, $parametro2)
		{
			if($parametro!=0)
				$this->num = $parametro;
			if($parametro2!=0)
				$this->numMultiplicar = $parametro2;
			//echo "var ", $this->num;
		}
		public function imprimetabla()
		{
			$i=1;
			while ($i <= $this->num)
			{
				echo "Tabla del $i <br />";
				$j = 1;
				echo ("<br />");
				while ($j <= $this->numMultiplicar)
				{
					echo $i ," * ", $j , " = ", $r = $i*$j ,"<br />";
					$j++;
				}
			echo ("<br />");
			$i++;
			}
		}
	}
	$tablas = new TablasMultiplicar;
	$parametro1 = (isset($_GET['numero'])) ? $_GET['numero'] : 0;
	$parametro2 = (isset($_GET['valor'])) ? $_GET['valor'] : 0;
	$tablas -> valores($parametro1, $parametro2);
	$tablas -> imprimetabla();

?>
