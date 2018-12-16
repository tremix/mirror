<?php 
namespace Drupal\gavias_blockbuilder\shortcodes;
if(!class_exists('gsc_carousel_about')):
   class gsc_carousel_about{
      public function render_form(){
         $fields = array(
            'type' => 'gsc_carousel_about',
            'title' => t('Carousel About'),
            'size' => 3,
            'fields' => array(
               array(
                  'id'     => 'title',
                  'type'      => 'text',
                  'title'  => t('Title For Admin'),
                   'class'     => 'display-admin'
               ),
               array(
                  'id'        => 'background',
                  'type'      => 'upload',
                  'title'     => t('Background')
               ),
               array(
                  'id'        => 'columns_lg',
                  'type'      => 'select',
                  'title'     => 'Columns lg',
                  'options'   => array('1'=>1, '2'=>2, '3'=>3, '4'=>4, '5'=>5, '6'=>6),
                  'std'       => 3
               ),
               array(
                  'id'        => 'columns_md',
                  'type'      => 'select',
                  'title'     => 'Columns md',
                  'options'   => array('1'=>1, '2'=>2, '3'=>3, '4'=>4, '5'=>5, '6'=>6),
                  'std'       => 2
               ),
               array(
                  'id'        => 'columns_sm',
                  'type'      => 'select',
                  'title'     => 'Columns sm',
                  'options'   => array('1'=>1, '2'=>2, '3'=>3, '4'=>4, '5'=>5, '6'=>6),
                  'std'       => 2
               ),
               array(
                  'id'        => 'style',
                  'type'      => 'select',
                  'title'     => 'Style',
                  'options'   => array('text-light'=>'Text Light', 'text-dark'=>'Text Dark'),
                  'std'       => 2
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

         for($i=1; $i<=8; $i++){
            $fields['fields'][] = array(
               'id'     => "info_${i}",
               'type'   => 'info',
               'desc'   => "Information for item {$i}"
            );
            $fields['fields'][] = array(
               'id'        => "number_{$i}",
               'type'      => 'text',
               'title'     => t("Number {$i}")
            );
            $fields['fields'][] = array(
               'id'           => "title_{$i}",
               'type'         => 'text',
               'title'        => t("Title {$i}")
            );
            $fields['fields'][] = array(
               'id'           => "subtitle_{$i}",
               'type'         => 'text',
               'title'        => t("Sub Title {$i}")
            );
         }
         return $fields;
      }

      public function render_content( $item ) {
         print self::sc_carousel_about( $item['fields'] );
      }

      public static function sc_carousel_about( $attr, $content = null ){
         global $base_url;
         $default = array(
            'title'        => '',
            'background'   => '',
            'columns_lg'   => '3',
            'columns_md'   => '2',
            'columns_sm'   => '2',
            'style'        => 'text-light',
            'el_class'     => 'text-light',
            'animate'      => '',
         );
         for($i=1; $i<=10; $i++){
            $default["number_{$i}"] = '';
            $default["title_{$i}"] = '';
            $default["subtitle_{$i}"] = '';
         }
         extract(shortcode_atts($default, $attr));
         if($animate){
            $el_class .= ' wow';
            $el_class .= ' ' . $animate;
         }

         $el_class .= ' ' . $style;
         $_id = gavias_blockbuilder_makeid();
         $bg_style = '';
         if($background){
            $background = $base_url . $background;
            $bg_style = "style=\"background-image: url('{$background}');\"";
         }
         ?>
         <?php ob_start() ?>

         <div class="gsc-carousel-about <?php echo $el_class ?>"> 
            <?php if($bg_style){ ?><div class="backgound" <?php print $bg_style ?>></div><?php } ?>
            <div class="owl-carousel init-carousel-owl"data-items="<?php print $columns_lg ?>" data-items_lg="<?php print $columns_lg ?>" data-items_md="<?php print $columns_md ?>" data-items_sm="<?php print $columns_sm ?>" data-items_xs="1" data-loop="1" data-speed="500" data-auto_play="0" data-auto_play_speed="0" data-auto_play_timeout="0" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="1" data-pagination="0" data-mouse_drag="1" data-touch_drag="1">
               <?php for($i=1; $i<=8; $i++){ ?>
                  <?php 
                     $number = "number_{$i}";
                     $title = "title_{$i}";
                     $subtitle = "subtitle_{$i}";
                  ?>
                  <?php if($$title){ ?>
                     <div class="item">
                        <div class="item-content">
                           <div class="content-box">
                              <div class="content-inner">
                                 <?php if($$number){ ?>
                                    <div class="number"><?php print $$number ?></div>
                                 <?php } ?>
                                 <?php if($$subtitle){ ?>
                                    <div class="subtitle"><?php print $$subtitle ?></div>
                                 <?php } ?>
                                 <?php if($$title){ ?>
                                    <div class="title"><?php print $$title ?></div>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php } ?>    
               <?php } ?>
            </div>   
         </div> 
         <?php return ob_get_clean();
      }

      public function load_shortcode(){
         add_shortcode( 'sc_carousel_about', array($this, 'sc_carousel_about') );
      }
   }
 endif;  



