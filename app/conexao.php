<?php
    class db{
		/*Para conectar com o banco precisa de 4 informações: host, usuario, senha, database*/
		private $host = 'localhost';
		private $usuario = 'root';
		private $senha = '';
		private $database = 'pescaria';

		//método para realizar a conexão
		public function conecta_mysql(){
			//criação da conexão
			$conn = mysqli_connect($this -> host, $this -> usuario, $this -> senha, $this -> database);
			/*ajustar o charset de comunicação entre aplicação e o banco de dados*/
			mysqli_set_charset($conn, 'utf-8');
			//verifica se conectou
			if (mysqli_connect_errno()){
				echo "Erro ao tentar se conectar com o banco de dados: ".mysqli_connect_error();
			} 
            return $conn;                        
        }  
    }
    
    function mensagem($texto,$tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>";
    }
?>