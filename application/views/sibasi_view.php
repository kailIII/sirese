<div id="main">
<!-- main -->
<div id="page">

<div id = "resultado_sibasi">

<script language="javascript">
$(document).ready(function() {
   
    $('#formulario_microred').submit(function() {    
    		
 		$.ajax({
        	type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),            
            success: function(data) {
                $('#resultado_microred').html(data);
				$('#seleccion_sibasi').hide();
			
				
			}
        })        
        return false;
    });
     
   
})  
</script>
<?php				
$attributes = array('class' => 'formulario_microred', 'id' => 'formulario_microred', 'name' =>'formulario_microred');	
echo form_open('inicio/establecimiento', $attributes);
if ((isset($microred))){								
echo '<h3 style="font-weight: bold;">Microred';					
foreach ($microred->result() as $row){
$microred_matriz[$row->microred] = ($row->microred);       										
}										
echo form_dropdown('microred', $microred_matriz, '1');										
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit', 'id'=>'enviar'), 'Seleccionar');

}
								
									echo form_close();
									
									echo '</h3>';
							
						?>
<div id = "resultado_microred">
						
						<script language="javascript">
										$(document).ready(function() {
										    $('#formulario_establecimiento').submit(function() {   
												
										 		$.ajax({
        											type: 'POST',
            										url: $(this).attr('action'),
            										data: $(this).serialize(),            
            										success: function(data) {
                									$('#resultado_establecimiento').html(data);
													$('#seleccion_microred').hide();
													}
        										})        
        										return false;
    });
     
   
})  
</script>

						<!--Formulario para seleccionar Centro-->
						<?php
							$attributes = array('class' => 'formulario_establecimiento',  'id' => 'formulario_establecimiento', 'name' => 'formulario_establecimiento');
							echo form_open('inicio/objetivo', $attributes);
								if ((isset($centro))){
									echo '<h3 style="font-weight: bold;">Establecimiento';
									foreach ($centro->result() as $row){
										$centro_matriz[$row->id] = ($row->establecimiento);       										
							
							}
									echo form_dropdown('centro', $centro_matriz, '1');
									echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Seleccionar');
								}
							echo form_close();
							
							echo '</h3>';
						?>
							</div>	
  <div id = "resultado_establecimiento"></div>							
	</div>			
</div>


			 
				
					<div class="clear"></div>
</div>				
				<!-- /blog post -->					
			</div>
			
			<!-- /main --> 
