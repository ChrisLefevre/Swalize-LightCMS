<?php 
	

	
	if ($sblog->page=='new' or $sblog->page=='edit') { 
			$sblog -> save();
	?>
<section class="content-header">
    <h1>Blog <?php echo $sblog -> lang; ?><small><?php echo _("Add a new post"); ?></small></h1>

    <ol class="breadcrumb">
        <li>
            <a href="./"><?php echo _("Edition"); ?> </a>
        </li>

        <li class="active"><?php echo _("Posts"); ?> </li>
    </ol>
</section>

<section class="content">
    <div class='box box-primary'>
       

        <div class='box-body'>
            <?php    $sblog -> showform(); ?>
        </div>
    </div>
</section>
<?php } else if ($sblog->page=='cats' ) { 
	$sblog_cat -> save();
	?>
	

<section class="content">
    <div class='box box-primary'>
       

        <div class='box-body'>
            <?php  $sblog_cat  -> showform(); ?>
        </div>
    </div>
</section>
	
	
		
	
	
<?php	}else { 
		
		$blogposts = $adm ->  loadDatastore('blogposts_'.$sblog -> lang);  // getConfig('blogposts');
		
		krsort($blogposts);
		 
			
?>



<section class="content-header">
   
    
    
    <div class="pull-right"><a href="?blog=new&amp;lang=<?php echo $sblog -> lang; ?>" title="Add" class="btn  btn-sm bg-aqua color-palette"><i class="fa fa-plus"></i> <?php echo _("Add a new post"); ?> </a></div>
     <h1>News <small><?php echo _("Posts list"); ?>  <?php echo $sblog -> lang; ?></small></h1>

    
</section><!-- Main content -->

<section class="content">

 
    
     <div class="box">
          
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                     
                      <th><?php echo _("Date"); ?> </th>
                      <th><?php echo _("Post"); ?> </th>
                      <th></th>
              
                    </tr>
                    
                    <?php foreach($blogposts as $k => $v) { 
	                    
	                    if($v['status']!=2) {
	               
	                    if($v['status']==1) $stat = _('visible'); 
	                    else if($v['status']==3) $stat = _('showcase'); 
	                    else $stat = _('closed'); 
	                    
	                     ?>
	                    
	                    
	                 <tr>
                     
                      <td><?php echo $v['dateupdate']; ?></td>
                      <td><a href="?blog=edit&lang=<?php echo $v['lang']; ?>&post=<?php echo $k; ?>"><?php echo ucwords($v['title']); ?> - <?php echo ucwords($stat); ?></a></td>
                      <td></td>
                    <td>
	                </td>  </tr>
    
                    <?php } } ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
    
    
    
    
    
</section>



<?php }