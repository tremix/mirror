<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_box_hover')):
   class gsc_box_hover{
      
      public function render_form(){
         $fields = array(
            'type'            => 'gsc_box_hover',
            'title'           => t('Box Hover'),
            'size'            => 3,
            'icon'            => 'fa fa-bars',
            'fields' => array(
               array(
                  'id'        => 'title',
                  'type'      => 'text',
                  'title'     => 'Title for box',
                  'class'     => 'display-admin'
               ),
               array(
                  'id'        => 'content',
                  'type'      => 'textarea',
                  'title'     => t('Content for box'),
               ),
               array(
                  'id'        => 'icon',
                  'type'      => 'text',
                  'title'     => t('Icon class'),
                  'std'       => '',
                  'desc'     => t('Use class icon font <a target="_blank" href="http://fontawesome.io/icons/">Icon Awesome</a> or <a target="_blank" href="'.base_path().drupal_get_path('theme', 'gavias_megaland').'/demo-font/index.html'.'">Custom icon</a>'),
               ),
               array(
                  'id'        => 'link',
                  'type'      => 'text',
                  'title'     => t('Link'),
               ),
               array(
                  'id'        => 'height',
                  'type'      => 'text',
                  'title'     => t('Min-height of Box'),
                  'desc'      => t('e.g 220px')
               ),
               array(
                  'id'        => 'background',
                  'type'      => 'text',
                  'title'     => t('Background of Box'),
                  'desc'      => t('e.g #4777C9, Default use color of theme')
               ),
               array(
                  'id'        => 'target',
                  'type'      => 'select',
                  'title'     => t('Open in new window'),
                  'desc'      => t('Adds a target="_blank" attribute to the link'),
                  'options'   => array( 0 => 'No', 1 => 'Yes' ),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),
               array(
                  'id'        => 'animate',
                  'type'      => 'select',
                  'title'     => t('Animation'),
                  'desc'      => t('Entrance animation'),
                  'options'   => gavias_blockbuilder_animate(),
               ),
            ),                                     
         );
         return $fields;
      }

      public function render_content( $item ) {
         print self::sc_box_hover( $item['fields'] );
      }

      public static function sc_box_hover( $attr, $content = null ){
         global $base_url;
         extract(shortcode_atts(array(
            'icon'               => '',
            'title'              => '',
            'content'            => '',
            'link'               => '',
            'color'              => '',
            'height'             => '',
            'background'         => '',
            'target'             => '',
            'el_class'           => '',
            'animate'            => ''
         ), $attr));

         // target
         if( $target ){
            $target = 'target="_blank"';
         } else {
            $target = false;
         }

         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }
         $style = '';
         if($background) $style = "background:{$background};";
         if($height) $style .= "min-height:{$height};";
         if($style) $style = "style=\"{$style}\"";
         ?>
         <?php ob_start() ?>
         <div class="widget gsc-box-hover clearfix <?php print $el_class; ?>" <?php if($style) print $style ?>>
            <div class="box-content">
               <?php if($icon){ ?><div class="icon"><span class="<?php print $icon ?>"></span></div> <?php } ?>
               <div class="content">
                  <div class="widget-title box-title"><?php print $title ?></div>
                  <div class="line"></div>
                  <div class="desc"><?php print $content ?></div>
               </div>
            </div>
         </div>  
         <?php return ob_get_clean() ?>
         <?php
      }

      public function load_shortcode(){
         add_shortcode( 'box_hover', array('gsc_box_hover', 'sc_box_hover') );
      }
   }
endif;   




