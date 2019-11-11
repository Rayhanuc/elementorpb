<?php 


class Elementor_Test_Widget extends \Elementor\Widget_Base{
	public function get_name() {
		return "TestWidget";
	}

	public function get_title() {
		return __("TestWidget","elementortestplugin");

	}

	public function get_icon() {
		return 'fa fa-image';
	}

	public function get_categories() {
		return ['general','testcategory','sliders'];
		// another way
		// return array('general');
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
			'heading',
			[
				'label' => __( 'Heading', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Hello World', 'elementortestplugin' ),
			]
		);

		$this->add_control(
			'heading_description',
			[
				'label' => __( 'Type Something', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Description', 'elementortestplugin' ),
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'position_section',
			[
				'label' => __( 'Position', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'alignment',
			[
				'label' => __( 'Heading Alignment', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'elementortestplugin' ),
					'center' => __( 'Center', 'elementortestplugin' ),
					'right' => __( 'Right', 'elementortestplugin' ),
				],
				'selectors' => [
					'{{WRAPPER}} h1.heading' => 'text-align:{{VALUE}}'
				] 
			]

		);

		$this->add_control(
			'description_alignment',
			[
				'label' => __( 'Description Alignment', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => __( 'Left', 'elementortestplugin' ),
					'center' => __( 'Center', 'elementortestplugin' ),
					'right' => __( 'Right', 'elementortestplugin' ),
				],
				'selectors' => [
					'{{WRAPPER}} p' => 'text-align:{{VALUE}}'
				] 
			]

		);

		$this->end_controls_section();

		$this->start_controls_section(
			'color_section',
			[
				'label' => __( 'Color', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading_color',
			[
				'label' => __( 'Heading Color', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				// 'placeholder' => __( 'Hello World', 'elementortestplugin' ),
				'default' => '#222',
				'selectors' => [
					'{{WRAPPER}} h1.heading' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => __( 'Description Color', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				// 'placeholder' => __( 'Hello World', 'elementortestplugin' ),
				'default' => '#888888',
				'selectors' => [
					'{{WRAPPER}} p' => 'color: {{VALUE}}'
				]
			]
		);


		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$heading = $settings['heading'];
		$description = $settings['heading_description'];

		echo "<h1 class='heading'>".esc_html($heading)."</h1>";
		echo "<p class='description'>".wp_kses_post($description)."</p>";
	}

	protected function _content_template() {}
}