<?php $datatree = array( 
	
		'contactmail' => array(
				'label' => 'Email de contact',
				'type' => 'input_txt',
				'required'  => 'Veuillez ajouter l\'adresse email de contact'
				),
			);
	
	
	$smod -> plugin_save('contact_form',$datatree,'');
	
?>
<section class="content">
    <div class='box box-primary'>
        <div class='box-header'>
		
        </div>

        <div class='box-body'>
	        
	        <?php 
		        
		        
		         $smod -> plugin_form('contact_form',$datatree,'');  
		        /* $xdatas =  $smod -> plugin_datas('contact_form','en'); $sw -> plugin_datas('contact_form','contact_form','')   */
		        
		        ?>
	    
	                                      
       
        </div>
    </div>
</section>






