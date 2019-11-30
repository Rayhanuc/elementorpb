<?php 


class Elementor_Progressbar_Widget extends \Elementor\Widget_Base{
	public function get_name() {
		return "ProgressbarWidget";
	}

	public function get_title() {
		return __("Progressbar Widget","elementortestplugin");

	}

	public function get_icon() {
		return 'fa fa-spinner';
	}

	public function get_categories() {
		return ['general'];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );

        $this->add_control(
        	'bar_color',[
        		'label' => __( 'Color', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::COLOR,
        		'default' => '#222222'
        ]);

        $this->add_control(
        	'bar_fill',[
        		'label' => __( 'Fill Amount', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::TEXT,
        		'default' => '0.8'
        ]);

        $this->add_control(
        	'bar_height',[
        		'label' => __( 'Bar Height', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::TEXT,
        		'default' => '10px'
        ]);
        
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$color = $this->get_settings('bar_color');
		$fill_color = $this->get_settings('bar_fill');
		$height = $this->get_settings('bar_height');
        ?>
        <div class="progress" data-bar_height="<?php echo esc_attr($height); ?>" data-bar_color="<?php echo esc_attr($color); ?>" data-bar_fill="<?php echo esc_attr($fill_color); ?>"></div>
        <?php
		
	}

	/* protected function _content_template() {
		
	} */
}