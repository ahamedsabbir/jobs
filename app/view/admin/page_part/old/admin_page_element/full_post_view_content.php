<div class="col-xs-9 col-md-9">
	<div class="panel panel-default"  style="min-height: 1000px;">
		<div class="panel-heading">Admin Profile</div>
		<div class="panel-body">
<?php
if(isset($select_post)){
    foreach($select_post as $key => $value){
    ?>
    <div class="thumbnail" style="padding:10px;">
        <div>
            <img src="" style="width:100px; height: 100px;"/>
        </div>
        <div>
            <h3><?php echo $value['post_title'] ?></h3>
            <p><?php echo $value['post_content'] ?></p>
        </div>
    <?php
    }
}
?>
		</div>
	</div>
</div>