<?php 


class Elementor_Infobox_Widget extends \Elementor\Widget_Base{
	public function get_name() {
		return "InfoboxWidget";
	}

	public function get_title() {
		return __("Infobox Widget","elementortestplugin");

	}

	public function get_icon() {
		return 'fa fa-info';
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
        	'box_color',[
        		'label' => __( 'Box Color', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::COLOR,
        		'default' => '#b6b8dc',
        		'selectors' => [
        			'{{WRAPPER}} .stamp' => 'background: {{VALUE}}'
        		]
        ]);

        $this->add_control(
        	'box_svg',[
        		'label' => __( 'Box Imgage SVG', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::TEXTAREA,
        		'default' => '
        		<svg width="40" height="40">
    				<rect x="10" y="0" rx="0" ry="0" width="40" height="40" style="fill:red;stroke:black;stroke-width:5;opacity:0.5"></rect>
    			</svg>
        		        '
        ]);

        $this->add_control(
        	'box_headline',[
        		'label' => __( 'Box Headline', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::TEXT,
        		'label_block' => true,
        		'default' => __( 'Headline', 'elementortestplugin' ),
        ]);

        $this->add_control(
        	'box_text',[
        		'label' => __( 'Box Text', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::TEXTAREA,
        ]);

        $this->add_control(
        	'box_link',[
        		'label' => __( 'Box Link', 'elementortestplugin' ),
        		'type' => \Elementor\Controls_Manager::URL,
        ]);

        
        
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$link = $this->get_settings('box_link');
		$headline = $this->get_settings('box_headline');
		
		$items = $this->get_settings('box_text');
		$items_array = explode("\n", $items);
		$items_list = '';
		foreach ($items_array as $item) {
			if(trim($item)!=''){
				$items_list .="<li>{$item}</li>";
			}
		}
		$svg_image = $this->get_settings('box_svg');

        ?>
        <a href="<?php echo esc_url($link['url']); ?>">
        	<div class="infostamp">
        		<div class="stamp">
        			<?php echo $svg_image; ?>
        		</div>
        		<div class="data">	
        			<h3><?php echo esc_html($headline); ?></h3>
        			<ul>
        				<?php echo $items_list; ?>
        			</ul>
        		</div>
        		<div class="clear">	</div>
        	</div>
        </a>
        <?php
		
	}

	/* protected function _content_template() {
		
	} */
}