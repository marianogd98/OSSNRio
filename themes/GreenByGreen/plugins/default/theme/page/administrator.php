<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$site_name = ossn_site_settings('site_name');
if (isset($params['title'])) {
    $title = $params['title'] . ' : ' . $site_name;
} else {
    $title = ossn_site_settings('site_name');
}
if (isset($params['contents'])) {
    $contents = $params['contents'];
} else {
    $contents = '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo ossn_add_cache_to_url(ossn_theme_url().'images/Logosintipografia-png.png');?>" type="image/x-icon" />	
    <title><?php echo $title; ?></title>
    
 	<?php echo ossn_fetch_extend_views('ossn/endpoint'); ?>   
    <?php echo ossn_fetch_extend_views('ossn/admin/head'); ?>

    <script>
        <?php echo ossn_fetch_extend_views('ossn/admin/js/head'); ?>
    </script>

</head>
<body>
	<div class="header">
    	<div class="container">
        
        	<div class="row">
            
        		<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="<?php echo ossn_theme_url(); ?>images/logotipografiahorizontal(pequeños)-png.png"/>
            	</div>
                <?php if(ossn_isAdminLoggedin()){ ?>
            	<div class="col-md-6  col-sm-6 col-xs-6 header-dropdown">
					<ul class="navbar-right">	
                        <div class="dropdown">
                        	<a id="dLabel" role="button" data-toggle="dropdown" data-target="#"><i class="fa fa-bars fa-3"></i></a> 
    						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             					 <li><a href="<?php echo ossn_site_url();?>"><?php echo ossn_print('admin:view:site');?></a></li>
             					 <li><a href="<?php echo ossn_site_url("action/admin/logout", true);?>"><?php echo ossn_print('admin:logout');?></a></li>
           					 </ul>
      		    		</div>
                     </ul>   
           		</div>
                <?php } ?>
        	</div>        
        
        </div>
    </div>
    <?php if(ossn_isAdminLoggedin()){ ?>
    <div class="row no-right-margins">
		<div class="topbar-menu">
    	  <?php echo ossn_view_menu('topbar_admin'); ?>
    	</div>
    </div>    
    <?php } ?>
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
				<script>
					if ((typeof tinymce.settings === 'undefined') || (typeof tinymce.settings !== 'undefined' && typeof tinymce.settings.setup === 'undefined')) {
						tinymce.init({
							toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
							selector: '.ossn-editor',
							plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
							convert_urls: false,
							relative_urls: false,
							language: "<?php echo ossn_site_settings('language'); ?>",
						});
					}
					tinymce.settings['invalid_elements'] = '';
					tinymce.settings['extended_valid_elements'] = 'script[language|type|src],svg[*],defs[*],pattern[*],desc[*],metadata[*],g[*],mask[*],path[*],line[*],marker[*],rect[*],circle[*],ellipse[*],polygon[*],polyline[*],linearGradient[*],radialGradient[*],stop[*],image[*],view[*],text[*],textPath[*],title[*],tspan[*],glyph[*],symbol[*],switch[*],use[*]';
					tinymce.settings['non_empty_elements'] = 'td,th,iframe,video,audio,object,script,pre,code,area,base,basefont,br,col,frame,hr,img,input,isindex,link,meta,param,embed,source,wbr,track,svg,defs,pattern,desc,metadata,g,mask,path,line,marker,rect,circle,ellipse,polygon,polyline,linearGradient,radialGradient,stop,image,view,text,textPath,title,tspan,glyph,symbol,switch,use';
					tinymce.settings['content_css'] = Ossn.site_url + 'css/view/bootstrap.min.css';
				</script>
            	 <?php echo $contents; ?>
            </div>
        </div>
        
        <!-- footer -->
        <footer>
      	  	<div class="row">
        		<div class="col-md-6">
 				<?php echo ossn_print('copyright'); ?> <?php echo date("Y"); ?> <a href="<?php echo ossn_site_url(); ?>"><?php echo $site_name; ?></a>            			
           	 	</div>
                <div class="col-md-6 text-right">
                	 <?php echo 'DESARROLLADO POR <a href="https://github.com/marianogd98">MARIANOGD98</a>'; ?>
                </div>
        	</div>
        </footer>
        <!-- /footer -->
    </div> <!-- /container -->
</body>
</html>
