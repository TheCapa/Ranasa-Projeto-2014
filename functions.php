<?php

	
	function post(){
	
		require_once("config.php");
		
		$select = "SELECT * FROM post;";
		
		$query = mysql_query($select) or die (mysql_error());		
		
		if($linhas = mysql_num_rows($query) > 0){
			
			$contador = 0;
			
			
			
			while($mostra = mysql_fetch_assoc($query)){
				
				$nome = $mostra['user_id'];
				$data = $mostra['post_data'];
				$titulo = $mostra['post_titulo'];
				$texto = $mostra['post_conteudo'];
				
				echo "
				<td>	
					<table class='post1'>					
						<tr>	
							<td align='left'>Nome</td><td align='left'>
								".$nome."
							</td>
						</tr>
						<tr>	
							<td align='left'>
								<span class='red'>Data</span>
							</td>
							<td align='left'>
								<span class='red'>".$data."</span>
							</td>
						</tr>
						<tr>	
							<td align='left'>Titulo</td><td align='left'>
							".$titulo."
							</td>
						</tr>
						<tr>	
							<td align='left'>Texto</td><td align='left'>
							".$texto."
							</td>
						</tr>
					</table>	
				</td>					
									
					";
				
				$contador += 1;
				
				if($contador == 3){
				
					echo "
					</tr>
					<tr>
					";
					
					$contador = 0;
				}
			}
			
			echo "
				</tr>
			</table>
			";
			
		}
		else
		{
			echo "Sem produtos cadastrados";
		}
		
		
		
	
	}
?>