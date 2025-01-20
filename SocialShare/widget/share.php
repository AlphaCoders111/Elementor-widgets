<?php
class Cr_SS_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'Cr_SS_Widget';
	}
	public function get_title() {
		return __( 'Social Share', 'tcg' );
	}
	public function get_icon() {
		return 'eicon-gallery-grid';
	}
	public function get_categories() {
		return [ 'cr_category' ];
	}
	public function get_keywords() {
		return [ 'social', 'share', 'socialshare' ];
    }
	public function get_style_depends() {
		return ['ss-style'];
	}
    public function get_script_depends() {
		return [ 'ss-script'];
	}
	protected function _register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'trs' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'select_icon',
			[
				'label' => __( 'Select Icon', 'mcq' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
						'face' => __('Facebook', 'tcg' ),
						'tweet' => __('Twitter', 'tcg' ),
						'pint' => __('Pinterest', 'tcg' ),
						'what' => __('Whatsapp', 'tcg' ),
						'link' => __('Linkedin', 'tcg' ),
						'redit' => __('Reddit', 'tcg' ),
						'email' => __('Email', 'tcg' ),
						'tumb' => __('Thumblir', 'tcg' ),
						'skype' => __('Skype', 'tcg' ),
						'print' => __('Print', 'tcg' ),
						'webo' => __('Weibo', 'tcg' ),
						'xing' => __('Xing', 'tcg' ),
				],
			]
		);

		$repeater->add_control(
			'face',
			[
				'label' => __( 'Facebook', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'face'
				],
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'tweet',
			[
				'label' => __( 'Twitter', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'tweet'
				],
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'link',
			[
				'label' => __( 'LinkedIn', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'link'
				],
				'default' => [
					'value' => 'fab fa-linkedin',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'what',
			[
				'label' => __( 'WhatsApp', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'what'
				],
				'default' => [
					'value' => 'fab fa-whatsapp',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'pint',
			[
				'label' => __( 'WhatsApp', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'pint'
				],
				'default' => [
					'value' => 'fab fa-pinterest',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'redit',
			[
				'label' => __( 'Instragram', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'redit'
				],
				'default' => [
					'value' => 'fab fa-reddit-alien',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'tumb',
			[
				'label' => __( 'Tumblr', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'tumb'
				],
				'default' => [
					'value' => 'fab fa-tumblr',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'print',
			[
				'label' => __( 'Print', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'print'
				],
				'default' => [
					'value' => 'fas fa-print',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'skype',
			[
				'label' => __( 'Skype', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'skype'
				],
				'default' => [
					'value' => 'fab fa-skype',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'xing',
			[
				'label' => __( 'Xing', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'xing'
				],
				'default' => [
					'value' => 'fab fa-xing',
					'library' => 'brand',
				],
			]
		);
		$repeater->add_control(
			'email',
			[
				'label' => __( 'Email', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'email'
				],
				'default' => [
					'value' => 'fas fa-envelope-open',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'webo',
			[
				'label' => __( 'Weibo', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => [
					'select_icon' => 'webo'
				],
				'default' => [
					'value' => 'fab fa-weibo',
					'library' => 'brand',
				],
			]
		);
		$this->add_control(
			'group',
			[
				'label' => __( 'Share Button', 'ets' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'setting_section',
			[
				'label' => __( 'Setting', 'tcg' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'icon',
			[
				'label' => __( 'Share Icon', 'trs' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-share-alt',
					'library' => 'solid',
				],
			]
		);
		$this->add_responsive_control(
			'ttl_align',
			[
				'label' => __( 'Share Icon Align', 'mcq' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left'    => [
						'title' => __( 'Left', 'mcq' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'mcq' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'mcq' ),
						'icon' => 'fa fa-align-right',
					],

				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .cr-social-share-icon' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'vtl_align',
			[
				'label' => __( 'Share Icon Wrapper Position', 'mcq' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'cr-left'    => [
						'title' => __( 'Left', 'mcq' ),
						'icon' => 'fa fa-align-left',
					],
					'cr-right' => [
						'title' => __( 'Right', 'mcq' ),
						'icon' => 'fa fa-align-right',
					],
					'cr-top' => [
						'title' => __( 'Top', 'mcq' ),
						'icon' => 'fa fa-align-center',
					],
					'cr-bottom' => [
						'title' => __( 'Bottom', 'mcq' ),
						'icon' => 'fa fa-align-center',
					],
				],
				'default' => 'cr-left',
			]
		);

		$this->add_responsive_control(
			'ico_width',
			[
				'label' => __( 'Trigger Icon Size', 'tcg' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [  'px', '%', 'vh'  ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-trigger i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .cr-share-trigger svg' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'all_width',
			[
				'label' => __( 'Share Icon Size', 'tcg' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [  'px', '%', 'vh'  ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .cr-share-iconr svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'tr_padding',
			[
				'label' => __( 'Trigger padding', 'tcg' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-trigger' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ico_padding',
			[
				'label' => __( 'Share Icon padding', 'tcg' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-icon a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ico_margin',
			[
				'label' => __( 'Share Icon margin', 'tcg' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-icon a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'trig_radius',
			[
				'label' => __( 'Trigger Icon Radius', 'tcg' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-trigger' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'ico_radius',
			[
				'label' => __( 'Share Icon Radius', 'tcg' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cr-share-icon a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		$this->start_controls_section(
			'style_section',
			[
				'label' => __( 'Style', 'bbw' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->start_controls_tabs(
			'style_tabs'
		);
        $this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => __( 'Normal', 'tcg' ),
			]
		);
		$this->add_control(
			'blg_ttl_color',
			[
				'label' => __( 'Trigger Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-trigger i' => 'color:{{VALUE}};',
					'{{WRAPPER}} .cr-share-trigger svg' => 'fill:{{VALUE}};',
				],
			]
		);
		$this->add_control(
			'blg_txt_color',
			[
				'label' => __( 'Text BG Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-trigger' => 'background-color:{{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_1_color',
			[
				'label' => __( 'Share Icon Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-icon i' => 'color:{{VALUE}};',
					'{{WRAPPER}} .cr-share-icon svg' => 'fill:{{VALUE}};' ],
			]
		);
		$this->add_control(
			'btn_1_bg_color',
			[
				'label' => __( 'Btn BG Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-icon a' => 'background-color:{{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'btn_t_border',
					'label' => __( 'Trigger Border', 'tmr' ),
					'selector' => '{{WRAPPER}} .cr-share-trigger',
				]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'btn_s_border',
					'label' => __( 'Share Icon Border', 'tmr' ),
					'selector' => '{{WRAPPER}} .cr-share-icon a',
				]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => __( 'Hover', 'tcg' ),
			]
		);
		$this->add_control(
			'blg_hv_ttl_color',
			[
				'label' => __( 'Trigger Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-trigger:hover i' => 'color:{{VALUE}};',
					'{{WRAPPER}} .cr-share-trigger:hover svg' => 'fill:{{VALUE}};',
				],
			]
		);
		$this->add_control(
			'blg_hv_txt_color',
			[
				'label' => __( 'Text BG Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-trigger:hover' => 'background-color:{{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_1_hv_color',
			[
				'label' => __( 'Share Icon Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-icon a:hover i' => 'color:{{VALUE}};',
					'{{WRAPPER}} .cr-share-icon a:hover svg' => 'fill:{{VALUE}};' ],
			]
		);
		$this->add_control(
			'btn_1_hv_bg_color',
			[
				'label' => __( 'Btn BG Color', 'tcg' ),
				'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
					'{{WRAPPER}} .cr-share-icon a:hover' => 'background-color:{{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'btn_t_hv_border',
					'label' => __( 'Trigger Border Hover', 'tmr' ),
					'selector' => '{{WRAPPER}} .cr-share-trigger:hover',
				]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'btn_s_hv_border',
					'label' => __( 'Share Icon Border Hover', 'tmr' ),
					'selector' => '{{WRAPPER}} .cr-share-icon a:hover',
				]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}
	protected function render() {
        $settings = $this->get_settings_for_display();
?>

    <div class="cr-social-share-icon">
		<div class="cr-share-wrapper">
			<div class="cr-share-trigger">
				<?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
			</div>
			<div class="cr-share-icon">
				<div class="cr-share-display <?php echo $settings['vtl_align']; ?>">
					<?php foreach( $settings['group'] as $Ss ) {
						
						if ( 'face' == $Ss['select_icon'] ) { ?>
							<a href="#" onClick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class="cr-s-icon"><?php \Elementor\Icons_Manager::render_icon( $Ss['face'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php  } elseif ( 'tweet' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('https://twitter.com/intent/tweet?url=<?php echo get_the_permalink( get_the_id() ); ?>&text=<?php echo get_the_title( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class="cr-s-icon"><?php \Elementor\Icons_Manager::render_icon( $Ss['tweet'], [ 'aria-hidden' => 'true' ] ); ?></a>
						<?php  } elseif ( 'link' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_the_permalink( get_the_id() ); ?>',  'MyWindow','width=900,height=600'); return false;" class="cr-s-icon"><?php \Elementor\Icons_Manager::render_icon( $Ss['link'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'what' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('https://api.whatsapp.com/send?text=<?php echo get_the_permalink( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['what'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'pint' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('http://pinterest.com/pin/create/button/?url=<?php echo get_the_permalink( get_the_id() ); ?>&media=<?php echo get_the_post_thumbnail_url( get_the_ID(),'large'); ?>&description=','MyWindow','width=900,height=600'); return false;" class="cr-s-icon"><?php \Elementor\Icons_Manager::render_icon( $Ss['pint'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'redit' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('https://www.reddit.com/submit?url=<?php echo get_the_permalink( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['redit'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'email' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo get_the_permalink( get_the_id() ); echo get_the_post_thumbnail_url( get_the_ID(),'large'); ?>','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['email'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'tumb' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('http://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_the_permalink( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['tumb'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'skype' == $Ss['select_icon']) { ?>
					<a href="#" onClick="MyWindow=window.open('skype:<?php echo get_the_permalink( get_the_id() ); ?>?chat','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['skype'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'print' == $Ss['select_icon']) { ?>
					<a href="javascript:if(window.print)window.print()" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['print'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'webo' == $Ss['select_icon']) { ?>
					<a href="javascript:void(function(){var d=document,e=encodeURIComponent,s1=window.getSelection,s2=d.getSelection,s3=d.selection,s=s1?s1():s2?s2():s3?s3.createRange().text:'',r='http://service.weibo.com/share/share.php?url='+e(d.location.href)+'&title='+e(d.title),x=function(){if(!window.open(r,'weibo','toolbar=0,resizable=1,scrollbars=yes,status=1,width=450,height=330'))location.href=r+'&r=1'};if(/Firefox/.test(navigator.userAgent)){setTimeout(x,0)}else{x()}})()" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['webo'], [ 'aria-hidden' => 'true' ] ); ?></a>

						<?php  } elseif ( 'xing' == $Ss['select_icon']) { ?>

					<a href="#" onClick="MyWindow=window.open('https://www.addtoany.com/add_to/xing?linkurl=<?php echo get_the_permalink( get_the_id() ); ?>&linkname=<?php echo get_the_title( get_the_id() ); ?>','MyWindow','width=900,height=600'); return false;" class=""><?php \Elementor\Icons_Manager::render_icon( $Ss['xing'], [ 'aria-hidden' => 'true' ] ); ?></a>

					<?php } } ?>
				</div>
			</div>
		</div>
    </div>
	

<?php
	}
	public function _content_template() {}
}