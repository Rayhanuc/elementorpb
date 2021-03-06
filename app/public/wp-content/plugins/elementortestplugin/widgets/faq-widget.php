<?php 


class Elementor_Faq_Widget extends \Elementor\Widget_Base{
	public function get_name() {
		return "FaqWidget";
	}

	public function get_title() {
		return __("FAQ Widget","elementortestplugin");

	}

	public function get_icon() {
		return 'fa fa-question';
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

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'title',
			[
				'label' => __( 'Content', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'description',
			[
				'label' => __( 'Description', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
			]
		);

		$this->add_control(
			'faqs',
			[
				'label' => __( 'FAQs', 'elementortestplugin' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{title}}}',
				'default' => [
					[
						'title' => __( 'FAQ 1', 'elementortestplugin' ),
						'description' => __( 'DESC 1', 'elementortestplugin' ),
					],
					[
						'title' => __( 'FAQ 2', 'elementortestplugin' ),
						'description' => __( 'DESC 2', 'elementortestplugin' ),
					],
				]
			]
		);

		

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$faqs = $settings['faqs'];
		if ($settings['faqs']) {
			foreach ($faqs as $index=>$faq) {
				$key_h = $this->get_repeater_setting_key("title","faqs",$index);

				$this->add_inline_editing_attributes($key_h,'none');
				echo "<h3 ".$this->get_render_attribute_string($key_h).">".$faq['title']."</h3>";
				echo "<p>".$faq['description']."</p>";
			}
		}
	}

	protected function _content_template() {
		?>

		<#
			if (settings.faqs.length) {
				_.each(settings.faqs,function(faq, index){

					var key_h = view.getRepeaterSettingKey('title','faqs', index);
					view.addInlineEditingAttributes(key_h,'none');

					#>
					<h2 {{{ view.getRenderAttributeString(key_h) }}}>{{{ faq.title }}}</h2>
					<p>{{{ faq.description }}}</p>
					<#
				});
			}
		#>

		
		<?php
	}
}