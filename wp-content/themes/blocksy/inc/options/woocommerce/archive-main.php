<?php

$page_title_options = blocksy_get_options('general/page-title', [
	'prefix' => 'woo_categories',
	'is_woo' => true,
	'location_name' => __('Product Archives', 'blocksy'),
]);

$options = [
	'woo_categories_section_options' => [
		'type' => 'ct-options',
		'setting' => [ 'transport' => 'postMessage' ],
		'inner-options' => [
			blocksy_manager()->get_prefix_title_actions([
				'prefix' => 'woo_categories',
				'areas' => [
					[
						'title' => __('Page Title', 'blocksy'),
						'options' => $page_title_options,
						'sources' => array_merge(
							blocksy_manager()
								->screen
								->get_archive_prefixes_with_human_labels([
									'has_categories' => true,
									'has_author' => true,
									'has_search' => true,
									'has_woocommerce' => true,
								]),

								blocksy_manager()
									->screen
									->get_single_prefixes_with_human_labels([
										'has_woocommerce' => true,
									])
						)
					]
				]
			]),

			$page_title_options,

			[
				blocksy_rand_md5() => [
					'type' => 'ct-title',
					'label' => __( 'Shop Settings', 'blocksy' ),
				],

				blocksy_rand_md5() => [
					'title' => __( 'General', 'blocksy' ),
					'type' => 'tab',
					'options' => [

						[
							'shop_cards_type' => [
								'label' => false,
								'type' => 'ct-image-picker',
								'value' => 'type-1',
								'divider' => 'bottom',
								'setting' => [ 'transport' => 'postMessage' ],
								'choices' =>
								apply_filters(
									'blocksy:options:woocommerce:archive:card-type:choices',
									[
										'type-1' => [
											'src'   => blocksy_image_picker_url( 'woo-type-1.svg' ),
											'title' => __( 'Type 1', 'blocksy' ),
										],

										'type-2' => [
											'src'   => blocksy_image_picker_url( 'woo-type-2.svg' ),
											'title' => __( 'Type 2', 'blocksy' ),
										],
									]
								),

								'sync' => blocksy_sync_whole_page([
									'prefix' => 'woo_categories',
									'loader_selector' => '.products > li'
								]),
							],

							'blocksy_woo_columns' => [
								'label' => __('Columns & Rows', 'blocksy'),
								'type' => 'ct-woocommerce-columns-and-rows',
								'value' => [
									'desktop' => 4,
									'tablet' => 3,
									'mobile' => 1,
									'__changed' => ['tablet', 'mobile']
								],
								'min' => 1,
								'max' => 6,
								'responsive' => true,
								'setting' => [
									'transport' => 'postMessage'
								],
							],

							'woocommerce_catalog_columns' => [
								'type' => 'hidden',
								'value' => 4,
								'setting' => [
									'type' => 'option',
									'transport' => 'postMessage'
								],
							],

							'woocommerce_catalog_rows' => [
								'type' => 'hidden',
								'value' => 4,
								'setting' => [
									'type' => 'option',
								],

								'sync' => blocksy_sync_whole_page([
									'prefix' => 'woo_categories',
									'loader_selector' => '.products > li'
								]),
							],

							blocksy_rand_md5() => [
								'type' => 'ct-divider',
								'attr' => [ 'data-type' => 'small' ]
							],
						],

						blocksy_get_options('woocommerce/card-product-elements'),

						'woo_categories_content_area_spacing' => [
							'label' => __( 'Content Area Vertical Spacing', 'blocksy' ),
							'type' => 'ct-radio',
							'value' => 'both',
							'view' => 'text',
							'design' => 'block',
							'divider' => 'top:full',
							'attr' => [ 'data-type' => 'content-spacing' ],
							'choice_attr' => [ 'data-tooltip-reveal' => 'top' ],
							'sync' => "live",
							'choices' => [
								'both'   => '<span></span>
								<i class="ct-tooltip">' . __( 'Top & Bottom', 'blocksy' ) . '</i>',

								'top'    => '<span></span>
								<i class="ct-tooltip">' . __( 'Only Top', 'blocksy' ) . '</i>',

								'bottom' => '<span></span>
								<i class="ct-tooltip">' . __( 'Only Bottom', 'blocksy' ) . '</i>',

								'none'   => '<span></span>
								<i class="ct-tooltip">' . __( 'Disabled', 'blocksy' ) . '</i>',
							],
							'desc' => blocksy_safe_sprintf(
								// translators: placeholder here means the actual URL.
								__( 'You can customize the global spacing value in General ➝ Layout ➝ %sContent Area Spacing%s.', 'blocksy' ),
								blocksy_safe_sprintf(
									'<a data-trigger-section="general:layout_panel" href="%s">',
									admin_url('/customize.php?autofocus[section]=general&ct_autofocus=general:layout_panel')
								),
								'</a>'
							),
						],

					],
				],

				blocksy_rand_md5() => [
					'title' => __( 'Design', 'blocksy' ),
					'type' => 'tab',
					'options' => [
						'shop_archive_background' => [
							'label' => __('Page Background', 'blocksy'),
							'type' => 'ct-background',
							'design' => 'block:right',
							'responsive' => true,
							'sync' => 'live',
							'divider' => 'bottom',
							'value' => blocksy_background_default_value([
								'backgroundColor' => [
									'default' => [
										'color' => Blocksy_Css_Injector::get_skip_rule_keyword(),
									],
								],
							]),
							'desc' => blocksy_safe_sprintf(
								// translators: placeholder here means the actual URL.
								__( 'Please note, by default this option is inherited from Colors ➝ %sSite Background%s.', 'blocksy' ),
								blocksy_safe_sprintf(
									'<a data-trigger-section="color" href="%s">',
									admin_url('/customize.php?autofocus[section]=color')
								),
								'</a>'
							),
						],
					],
				],

				blocksy_rand_md5() => [
					'type'  => 'ct-title',
					'label' => __( 'Page Elements', 'blocksy' ),
				],
			],

			apply_filters(
				'blocksy:options:woocommerce:archive:filters-canvas',
				[]
			),

			apply_filters(
				'blocksy:options:woocommerce:archive:active-filters',
				[]
			),

			blocksy_get_options('woocommerce/results-count'),

			blocksy_get_options('woocommerce/products-sorting'),

			blocksy_get_options('general/sidebar-particular', [
				'prefix' => 'woo_categories',
			]),

			blocksy_get_options('general/pagination', [
				'prefix' => 'woo_categories',
			]),

			[
				blocksy_rand_md5() => [
					'type'  => 'ct-title',
					'label' => __( 'Functionality Options', 'blocksy' ),
				],
			],

			apply_filters(
				'blocksy:options:woocommerce:archive:ajax-filtering',
				[]
			),

			[
				'product_catalog_panel' => [
					'label' => __( 'Product Catalog', 'blocksy' ),
					'type' => 'ct-panel',
					'wrapperAttr' => [ 'data-panel' => 'only-arrow' ],
					'setting' => [ 'transport' => 'postMessage' ],
					'inner-options' => [

						'woocommerce_shop_page_display' => [
							'label' => __( 'Shop page display', 'blocksy' ),
							'type' => 'ct-select',
							'value' => '',
							'view' => 'text',
							'placeholder' => __('Show products', 'blocksy'),
							'design' => 'block',
							'setting' => [
								'type' => 'option'
							],
							'desc' => __( 'Choose what to display on the main shop page.', 'blocksy' ),
							'choices' => blocksy_ordered_keys(
								[
									'' => __('Show products', 'blocksy'),
									'subcategories' => __('Show categories', 'blocksy'),
									'both' => __('Show categories & products', 'blocksy'),
								]
							),
						],

						'woocommerce_category_archive_display' => [
							'label' => __( 'Category display', 'blocksy' ),
							'type' => 'ct-select',
							'value' => '',
							'view' => 'text',
							'placeholder' => __('Show products', 'blocksy'),
							'design' => 'block',
							'setting' => [
								'type' => 'option'
							],
							'desc' => __( 'Choose what to display on product category pages.', 'blocksy' ),
							'choices' => blocksy_ordered_keys(
								[
									'' => __('Show products', 'blocksy'),
									'subcategories' => __('Show subcategories', 'blocksy'),
									'both' => __('Show subcategories & products', 'blocksy'),
								]
							),
						],

						'woocommerce_default_catalog_orderby' => [
							'label' => __( 'Default product sorting', 'blocksy' ),
							'type' => 'ct-select',
							'value' => 'menu_order',
							'view' => 'text',
							'design' => 'block',
							'desc' => __( 'How should products be sorted in the catalog by default?', 'blocksy' ),
							'setting' => [
								'type' => 'option'
							],
							'choices' => blocksy_ordered_keys(
								apply_filters(
									'woocommerce_default_catalog_orderby_options',
									[
										'menu_order' => __('Default sorting (custom ordering + name)', 'blocksy'),
										'popularity' => __('Popularity (sales)', 'blocksy'),
										'rating' => __('Average rating', 'blocksy'),
										'date' => __('Sort by most recent', 'blocksy'),
										'price' => __('Sort by price (asc)', 'blocksy'),
										'price-desc' => __('Sort by price (desc)', 'blocksy'),
									]
								)
							),
						],

					],
				],

			],

		],
	],
];
