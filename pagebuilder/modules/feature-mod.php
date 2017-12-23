<?php 
$output = '
	<div class="ln-fx">{{repeater}}</div>';
$css = '
.ln-fx{
	width:100%;
	display:inline-flex;
	margin:{{margin_css}};
   	padding:{{padding_css}};
}
.feat-blk{
    display: flex;
    flex-direction: column;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-flex: 1;
    -ms-flex: 1 0 100%;
    flex: 1 0 25%;
    text-align: center;
}
.feat-blk p{
	padding-top:30px;
}
.feat-blk h3{
   font-size:30px;
   line-height:1.5;
   color:{{font_color_picker}};
   margin:{{margin_css}};
   padding:{{padding_css}};
   font-weight:500;
   padding-bottom:30px;
}

';
return array(
		'label' =>'Feature',
		'name' =>'feature-mod',
		'default_tab'=> 'customizer',
		'tabs' => array(
              'customizer'=>'Content',
              'design'=>'Design',
              'advanced' => 'Advanced'
            ),
		'fields' => array(

						array(
								'type'		=>'color-picker',
								'name'		=>"font_color_picker",
								'label'		=>'Color',
								'tab'		=>'design',
								'default'	=>'#333',
								'content_type'=>'css'
							),
	 					array(		
	 							'type'	=>'select',		
	 							'name'  =>'align_type',		
	 							'label' =>"Alignment",
								'tab'     =>'design',
	 							'default' =>'center',
	 							'options_details'=>array(
	 												'center'    =>'Center',
	 												'left'  	=>'Left',
	 												'right'    =>'Right', 													),
	 							'content_type'=>'css',
	 						),
					
						array(
								'type'		=>'spacing',
								'name'		=>"margin_css",
								'label'		=>'Margin',
								'tab'		=>'advanced',
								'default'	=>array(
													'left'=>0,
													'right'=>0,
													'top'=>15,
													'bottom'=>15
													),
								'content_type'=>'css',
							),
							array(
								'type'		=>'spacing',
								'name'		=>"padding_css",
								'label'		=>'Padding',
								'tab'		=>'advanced',
								'default'	=>array(
													'left'=>0,
													'right'=>0,
													'top'=>0,
													'bottom'=>0
												),
								'content_type'=>'css',
							),

			),
		'front_template'=> $output,
		'front_css'=> $css,
		'repeater'=>array(
          'tab'=>'customizer',
          'fields'=>array(
                		array(		
	 						'type'		=>'text',		
	 						'name'		=>"content_title",		
	 						'label'		=>'Heading',
	           				'tab'       =>'customizer',
	 						'default'	=>'Your Feature Title',	
	           				'content_type'=>'html',
	 						),
	 					array(		
	 						'type'		=>'upload',		
	 						'name'		=>"img_upload",		
	 						'label'		=>'Image Upload',
	           				 'tab'     =>'customizer',
	 						'default'	=>'',	
	           				'content_type'=>'html',
	 					),
				        array(
								'type'		=>'checkbox',
								'name'		=>"image_layout",
								'label'		=>'Enable for Responsive Image',
								'tab'		=>'customizer',
								'default'	=>array(),
								'options'	=>array(
												array(
													'label'=>'Enable',
													'value'=>'layout="responsive"',
												),
											),
								'content_type'=>'html',
							),
				        array(		
		 						'type'		=>'text-editor',		
		 						'name'		=>"content",		
		 						'label'		=>'Content',
		           				 'tab'     =>'customizer',
		 						'default'	=>'Your Description',	
		           				'content_type'=>'html',
	 					),
                
              ),
          'front_template'=>
        '<div class="feat-blk">
      		<h3 class="t-txt">{{content_title}}</h3>
			<amp-img src="{{img_upload}}" width="{{image_width}}" height="{{image_height}}" {{image_layout}}></amp-img>
			{{content}}
      	</div> '
          ),

	);

?>