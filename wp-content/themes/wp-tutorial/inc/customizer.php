 <?php 
function wpb_customize_register($wp_customize)
{
    // Showcase Section
  $wp_customize->add_section('showcase', array(
    'title' => __('Showcase', 'WordPress Tutorial'),
    'description' => sprintf(__('Options For Showcase', 'WordPress Tutorial')),
    'priority' => 130
  ));

  $wp_customize->add_setting(
    'showcase_image',
    array(
      'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
      'type' => 'theme_mod',
    )
  );

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
    'label' => __('Showcase Image', 'Wordpress Tutorial'),
    'section' => 'showcase',
    'settings' => 'showcase_image',
    'priority' => 1
  )));

  $wp_customize->add_setting('showcase_heading', array(
    'default' => _x('Custom Bootstrap Wordpress Theme', 'Wordpress Tutorial'),
    'type' => 'theme_mod',

  ));

  $wp_customize->add_control('showcase_heading', array(
    'label' => __('Heading', 'Wordpress Tutorial'),
    'section' => 'showcase',
    'priority' => 1
  ));
  $wp_customize->add_setting('showcase_text', array(
    'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'Wordpress Tutorial'),
    'type' => 'theme_mod',

  ));

  $wp_customize->add_control('showcase_text', array(
    'label' => __('Text', 'Wordpress Tutorial'),
    'section' => 'showcase',
    'priority' => 2
  ));
  $wp_customize->add_setting('btn_url', array(
    'default' => _x('http://test.com', 'Wordpress Tutorial'),
    'type' => 'theme_mod',

  ));

  $wp_customize->add_control('btn_url', array(
    'label' => __('Button URL', 'Wordpress Tutorial'),
    'section' => 'showcase',
    'priority' => 3
  ));
  $wp_customize->add_setting('btn_text', array(
    'default' => _x('Read More', 'Wordpress Tutorial'),
    'type' => 'theme_mod',

  ));

  $wp_customize->add_control('btn_text', array(
    'label' => __('Button Text', 'Wordpress Tutorial'),
    'section' => 'showcase',
    'priority' => 3
  ));
}

add_action('customize_register', 'wpb_customize_register')
?> 