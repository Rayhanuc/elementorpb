<?php


class LWHH_Protected_Content_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Protected Content name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'lwhhpc_widget';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Protected Content title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Protected Content', 'lwhhpc' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Protected Content icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'fa fa-lock';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Protected Content belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Register Protected Content controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {

		$this->register_content_controls();
		$this->register_style_controls();

	}

	/**
	 * Register Protected Content content ontrols.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	function register_content_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'lwhhpc' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'dummy_text',
			[
				'label'       => __( 'Dummy Text', 'lwhhpc' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
				'placeholder' => __( 'Some Dummy Text', 'lwhhpc' ),
				'default'     => __( 'Elementor Protected Content', 'lwhhpc' ),
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Register Protected Content style ontrols.
	 *
	 * Adds different input fields in the style tab to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_style_controls() {

		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Text Style', 'lwhhpc' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'color',
			[
				'label'     => __( 'Color', 'lwhhpc' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ff0000',
				'selectors' => [
					'{{WRAPPER}} .dummy_text' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Typography', 'lwhhpc' ),
				'scheme'   => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .dummy_text',
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render Protected Content output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings   = $this->get_settings_for_display(); //and echo $settings['dummy_text']
		$dummy_text = $this->get_settings( 'dummy_text' );
		$this->add_render_attribute( 'dummy_text', 'class', 'dummy_text' );
		$this->add_inline_editing_attributes( 'dummy_text' );
		?>
        <div <?php echo $this->get_render_attribute_string( 'dummy_text' ) ?>> <?php echo esc_html( $dummy_text ); ?></div>
		<?php


	}

	/**
	 * Render Protected Content output on the frontend.
	 *
	 * Written in JS and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _content_template() {
		$this->add_render_attribute( 'dummy_text', 'class', 'dummy_text' );
		$this->add_inline_editing_attributes( 'dummy_text', 'none' );
		?>
        <div <?php echo $this->get_render_attribute_string( 'dummy_text' ) ?>> {{ settings.dummy_text }}</div>
		<?php
	}

}