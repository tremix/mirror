<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_content_carousel')):
   class gsc_content_carousel{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_content_carousel',
            'title' => t('Content Carousel'),
            'size' => 3,
            'fields' => array(
               array(
                  'id'     => 'title',
                  'type'      => 'text',
                  'title'  => t('Title'),
               ),
               array(
                  'id'     => 'subtitle',
                  'type'      => 'text',
                  'title'  => t('Sub Title'),
               ),
               array(
                  'id'     => 'width',
                  'type'      => 'text',
                  'title'     => t('Max Width of Box'),
                  'desc'      => t('e.g 600px')
               ),
               array(
                  'id'     => 'animate',
                  'type'      => 'select',
                  'title'  => ('Animation'),
                  'desc'  => t('Entrance animation for element'),
                  'options'   => gavias_blockbuilder_animate(),
               ),
               array(
                  'id'        => 'el_class',
                  'type'      => 'text',
                  'title'     => t('Extra class name'),
                  'desc'      => t('Style particular content element differently - add a class name and refer to it in custom CSS.'),
               ),   
            ),                                     
         );

         for($i=1; $i<=10; $i++){
            $fields['fields'][] = array(
               'id'     => "info_${i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "text_{$i}",
               'type'      => 'textarea_no_html',
               'title'     => t("Text {$i}")
            );
         }
         return $fields;
      }

      public function render_content( $item ) {
         print self::sc_content_carousel( $item['fields'] );
      }

      public static function sc_content_carousel( $attr, $content = null ){
         global $base_url;
         $default = array(
            'title'        => '',
            'subtitle'     => '',
            'width'        => '',
            'el_class'     => '',
            'animate'      => '',
         );

         for($i=1; $i<=10; $i++){
            $default["text_{$i}"] = '';
         }

         extract(shortcode_atts($default, $attr));

         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }
         $_id = gavias_blockbuilder_makeid();
         $style = '';
         if($width){$style = "style=\"max-width:{$width}\"";}
         ?>
         <?php ob_start() ?>
         <div class="gsc-content-carousel <?php echo $el_class ?>" <?php print $style ?>> 
            <?php if($subtitle){ ?><div class="sub-title"><?php print $subtitle ?></div><?php } ?>
            <?php if($title){ ?><div class="title"><?php print $title ?></div><?php } ?>
            
            <div class="owl-carousel init-carousel-owl owl-loaded owl-drag" data-items="1" data-items_lg="1" data-items_md="1" data-items_sm="1" data-items_xs="1" data-loop="1" data-speed="500" data-auto_play="1" data-auto_play_speed="2000" data-auto_play_timeout="5000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="0" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
               <?php for($i=1; $i<=10; $i++){ ?>
                  <?php 
                     $text = "text_{$i}";
                  ?>
                  <?php if($$text){ ?>
                     <div class="item">
                        <div class="item-content">
                           <div class="desc"><?php print $$text ?></div>
                        </div>  
                     </div>   
                  <?php } ?>    
               <?php } ?>
            </div>   
         </div>   
         <?php return ob_get_clean();
      }

      public function load_shortcode(){
         add_shortcode( 'content_carousel', array($this, 'sc_content_carousel') );
      }
   }
 endif;