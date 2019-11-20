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
					'{{WRAPPER}} h1.heading' => 'color: {{VALUE}}',
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

		$this->start_controls_section(
			'padding_section',
			[
				'label' => __( 'Padding', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading_padding',
			[
				'label' => __( 'Heading padding', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				// 'placeholder' => __( 'Hello World', 'elementortestplugin' ),
				// 'default' => '#222',
				'selectors' => [
					// '{{WRAPPER}} h1.heading' => 'padding: {{VALUE}}',
					'{{WRAPPER}} h1.heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				]
			]
		);

		$this->add_control(
			'description_padding',
			[
				'label' => __( 'Description padding', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				// 'placeholder' => __( 'Hello World', 'elementortestplugin' ),
				// 'default' => '#222',
				'selectors' => [
					// '{{WRAPPER}} h1.heading' => 'padding: {{VALUE}}',
					'{{WRAPPER}} p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
				]
			]
		);
		$this->end_controls_section();


		$this->start_controls_section(
			'image_section',
			[
				'label' => __( 'Image', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'imagex',
			[
				'label' => __( 'Image', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src()
				]
		]);
		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'default' => 'large',
				'name' => 'imagesz'
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'demo_section',
			[
				'label' => __( 'Control Demo', 'elementortestplugin' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'demo_select2',
			[
				'label' => __( 'Select 2 Demo', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => [
					'BD'  => __( 'Bangladesh', 'elementortestplugin' ),
					'BR' => __( 'Brazil', 'elementortestplugin' ),
					'AR' => __( 'Argentina', 'elementortestplugin' ),
					'AU' => __( 'Australia', 'elementortestplugin' ),
					'DK' => __( 'Denmark', 'elementortestplugin' ),
				],
			]

		);

		$this->add_control(
			'demo_choose',
			[
				'label' => __( 'Choose Demo', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label_block' => true,
				'toggle' => false,
				'options' => [
					'left' => [
						'title'  => __( 'Left', 'elementortestplugin' ),
						'icon' => 'fa fa-align-left'
					],
					'center' => [
						'title'  => __( 'Center', 'elementortestplugin' ),
						'icon' => 'fa fa-align-center'
					],
					'right' => [
						'title'  => __( 'Right', 'elementortestplugin' ),
						'icon' => 'fa fa-align-right'
					],
					'justify' => [
						'title'  => __( 'Justify', 'elementortestplugin' ),
						'icon' => 'fa fa-align-justify'
					]
				],
			]

		);

		$this->add_control(
			'demo_dimension',
			[
				'label' => __( 'Dimension', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
				'description' => __( 'Input Width & Height', 'elementortestplugin' ),
				'default' => [
					'height' => 100,
					'width' => 300
				]
			]

		);

		$this->add_control(
			'gallery',
			[
				'label' => __( 'Gallery Control', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
			]

		);

		$this->add_control(
			'gallery',
			[
				'label' => __( 'Gallery Control', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
			]

		);
		// Icon control start
		$this->add_control(
			'demo_icon',
			[
				'label' => __( 'Icon Control', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::ICON,
				'include' => [
					'fa fa-facebook',
					'fa fa-twitter',
					'fa fa-github',
					'fa fa-linkedin',
				],
				'default' => 'fa fa-twitter'
			]

		);
		// Icon control end

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$heading = $settings['heading'];
		$description = $settings['heading_description'];

		// This two lines for heading
		$this->add_inline_editing_attributes('heading','none');
		$this->add_render_attribute('heading',[
			'class' => 'heading'
		]);

		// This two lines for heading description
		$this->add_inline_editing_attributes('heading_description','none');
		$this->add_render_attribute('heading_description',[
			'class' => 'description'
		]);

		echo "<h1 ". $this->get_render_attribute_string('heading') ." >".esc_html($heading)."</h1>";		
		echo "<p ". $this->get_render_attribute_string('heading_description') ." >".wp_kses_post($description)."</p>";
		// print_r($settings['image']);
		// echo wp_get_attachment_image($settings['image']['id'],'medium'); 
		echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($settings,'imagesz', 'imagex' );

		echo "<div>";
		$countries = $settings['demo_select2'];
		print_r($countries);
		echo "<br/>";
		echo $settings['demo_choose'];
		echo "<br/>";
		print_r($settings['demo_dimension']);
		echo "</div>";
		

		echo "<div>";
		$gallery_images = $settings['gallery'];
		echo "<pre>";
		// print_r($gallery_images);
		foreach ($gallery_images as $gallery_image) {
			echo wp_get_attachment_image($gallery_image['id'],'thumbnail');
		}
		echo "</pre>";
		echo "</div>";

		// fontAwesome icon section show
		echo "<div>";
		echo "<i class='".$settings['demo_icon']."'></i>";
		echo "</div>";
	}

	protected function _content_template() {
		?>

		<#
			view.addInlineEditingAttributes('heading','none');
			view.addRenderAttribute('heading',{'class':'heading'});
		
			view.addInlineEditingAttributes('heading_description','none');
			view.addRenderAttribute('heading_description',{'class':'heading'});

			var image = {
				id:settings.imagex.id,
				url:settings.imagex.url,
				size:settings.imagesz_size,
				dimension: settings.imagesz_custom_dimension
			}

			var imageUrl = elementor.imagesManager.getImageUrl(image);
			console.log(imageUrl);
		#>
		
		<h1 {{{ view.getRenderAttributeString('heading') }}}> 
			{{{settings.heading}}} 
		</h1>
		<p {{{ view.getRenderAttributeString('heading_description') }}}>
			{{{settings.heading_description}}}
		</p>
		<img src="{{{imageUrl}}}" alt="">
		<ul>
			<#
				_.each(settings.demo_select2,function(country){ #>
					<li>{{{ country }}}</li>
				<# });
			#>
		</ul>
		<div>
			{{{ settings.demo_choose }}}
		</div>
		<div>
			Width: {{{ settings.demo_dimension.width }}}<br/>
			Height: {{{ settings.demo_dimension.height }}}
		</div>
		<!-- image gallery section start -->
		<div>
			<#
				_.each(settings.gallery, function(image){
				var image = {
					id:image.id,
					url:image.url,
					size:'medium',
				}
				var imageUrl = elementor.imagesManager.getImageUrl(image);
					#>
					<img src="{{ imageUrl }}">
					<#
				});
			#>
		</div>
		<!-- image gallery section end -->
		
		<!-- icon element section -->
		<div>
			<i class="{{{ settings.demo_icon }}}"></i>
		</div>
		<?php
	}
}