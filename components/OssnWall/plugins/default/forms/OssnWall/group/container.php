<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
    if(!ossn_isLoggedin()){
        return;
    }

  ossn_load_external_js('places.min');
  ossn_load_external_js('jquery.tokeninput'); 
?>
<div class="tabs-input col-md-3 col-lg-3 col-xl-3 col-xs-3 col-sm-3">
    <div class="wall-tabs">
        <a href="<?php echo ossn_loggedin_user()->profileURL(); ?>">
            <img class="user-img2" src="<?php echo ossn_loggedin_user()->iconURL()->small; ?>">
        </a>
        <div class="user2 hidden-xs hidden-sm">
            <a href="<?php echo ossn_loggedin_user()->profileURL(); ?>"> <?php echo ossn_loggedin_user()->fullname; ?> </a>
        </div>
        <?php
			// echo ossn_view_menu('wall/container/home', 'wall/menus/container'); 
		?>
    </div>
</div>
<div class="ossn-wall-container-data ossn-wall-container-data-post col-md-9 col-lg-9 col-xl-9 col-xs-9 col-sm-9" data-type="post">
    <textarea placeholder="<?php echo ossn_print('wall:post:container'); ?>" name="post"></textarea>
</div>
<div class="ossn-wall-container-data ossn-wall-container-data-post" data-type="post">
    <div id="ossn-wall-location" style="display:none;">
        <input type="text" placeholder="<?php echo ossn_print('enter:location'); ?>" name="location" id="ossn-wall-location-input" />
    </div>
    <div id="ossn-wall-photo" style="display:none;">
        <input type="file" name="ossn_photo" />
    </div>
    <div class="controls">
        <?php
			echo ossn_view_menu('wall/container/controls/group', 'wall/menus/container_controls'); 
		?>      
        <div style="float:right;">
            <div class="ossn-loading ossn-hidden"></div>
            <button class="btn btn-primary ossn-wall-post" type="submit" value="<?php echo ossn_print('post'); ?>" /><i class="fa fa-share hidden-xs hidden-sm"></i>Publicar</button>
        </div>
    </div>
	 <input type="hidden" value="<?php echo $params['group']['group']->guid; ?>" name="wallowner"/>
</div>
