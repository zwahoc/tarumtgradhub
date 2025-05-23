<?php
/**
 * Template part for displaying wishlist content
 *
 * @package Botiga
 */

$products = isset( $_COOKIE['woocommerce_items_in_cart_botiga_wishlist'] ) ? sanitize_text_field( wp_unslash( $_COOKIE['woocommerce_items_in_cart_botiga_wishlist'] ) ) : false;

if( $products ) : 
    $products = explode( ',', $products ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound ?>
    
    <div class="botiga-wishlist-wrapper woocommerce-cart-form">
        <table class="shop_table shop_table_responsive botiga_wishlist_table" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name"><?php esc_html_e( 'Product Name', 'botiga' ); ?></th>
                    <th class="product-price"><?php esc_html_e( 'Unit Price', 'botiga' ); ?></th>
                    <th class="product-quantity"><?php esc_html_e( 'Stock Status', 'botiga' ); ?></th>
                    <th class="product-subtotal">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ( $products as $product_id ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
                    $_product = wc_get_product( $product_id ); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

                    if ( $_product && $_product->exists() ) {
                        $product_permalink = $_product->is_visible() ? $_product->get_permalink() : ''; // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
                        ?>
                        <tr class="botiga-wishlist-row-item woocommerce-cart-form__cart-item">

                            <td class="product-remove">
                                <?php
                                    /**
                                     * Hook 'botiga_wishlist_remove_item_button'
                                     *
                                     * @since 1.0.0
                                     */
                                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                        'botiga_wishlist_remove_item_button',
                                        sprintf(
                                            '<a href="#" class="botiga-wishlist-remove-item remove" data-type="remove" aria-label="%s" data-product-id="%s" data-product_sku="%s" data-nonce="%s">&times;</a>',
                                            esc_html__( 'Remove this item', 'botiga' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() ),
                                            esc_attr( wp_create_nonce( 'botiga-wishlist-nonce' ) )
                                        )
                                    );
                                ?>
                            </td>

                            <td class="product-thumbnail">
                                <?php
                                $thumbnail = $_product->get_image(); // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

                                if ( ! $product_permalink ) {
                                    echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                } else {
                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                } ?>
                            </td>

                            <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'botiga' ); ?>">
                                <?php
                                if ( ! $product_permalink ) {
                                    echo wp_kses_post( $_product->get_name() . '&nbsp;' );
                                } else {
                                    echo wp_kses_post( sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ) );
                                } 
                                
                                /**
                                 * Hook 'botiga_wishlist_after_item_name'
                                 *
                                 * @since 1.0.0
                                 */
                                do_action( 'botiga_wishlist_after_item_name', $_product, $product_id ); ?>
                            </td>

                            <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'botiga' ); ?>">
                                <?php
                                    echo wp_kses_post( wc_price( $_product->get_price() ) );
                                ?>
                            </td>

                            <td class="product-stock" data-title="<?php esc_attr_e( 'Stock', 'botiga' ); ?>">
                                <?php
                                if ( ! $_product->is_in_stock() ) {
                                    /**
                                     * Hook 'botiga_wishlist_out_of_stock'
                                     *
                                     * @since 1.0.0
                                     */
                                    echo apply_filters( 'botiga_wishlist_out_of_stock', esc_html__( 'Out of Stock', 'botiga' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                } else {
                                    /**
                                     * Hook 'botiga_wishlist_in_stock'
                                     *
                                     * @since 1.0.0
                                     */
                                    echo apply_filters( 'botiga_wishlist_in_stock', esc_html__( 'In Stock', 'botiga' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                } 
                                ?>
                            </td>

                            <td class="product-addtocart" data-title="<?php esc_attr_e( 'Add to Cart', 'botiga' ); ?>">
                                <?php
                                    switch ( $_product->get_type() ) { // @codingStandardsIgnoreStart WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
                                        case 'grouped':
                                            $button_class = '';
                                            $button_text  = __( 'View Products', 'botiga' );
                                            $button_url   = $_product->add_to_cart_url();
                                            $has_strong   = true;
                                            break;
                                        
                                        case 'variable':
                                            $button_class = '';
                                            $button_text  = __( 'Select Options', 'botiga' );
                                            $button_url   = $_product->add_to_cart_url();
                                            $has_strong   = true;
                                            break;
                                
                                        case 'external':
                                            $button_class = '';
                                            $button_text  = $_product->get_button_text();
                                            $button_url   = $_product->get_product_url();
                                            $has_strong   = true;
                                            break;
                                        
                                        default:
                                            $button_class = 'yes' === get_option( 'woocommerce_enable_ajax_add_to_cart' ) ? 'button add_to_cart_button ajax_add_to_cart' : 'add_to_cart_button';
                                            $button_text  = __( 'Add to Cart', 'botiga' );
                                            $button_url   = $_product->add_to_cart_url();
                                            $has_strong   = false;
                                            break;
                                    } // @codingStandardsIgnoreEnd WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
                                    
                                    printf(
                                        '<div class="bt-d-inline-flex flex-direction-column align-items-center gap-5"><a href="%1$s" class="%2$s" data-product-id="%3$s" data-product_id="%3$s" data-context="wishlist-page" data-loading-text="%4$s" data-added-text="%5$s" data-nonce="%6$s">%7$s</a></div>',
                                        esc_url( $button_url ),
                                        $has_strong ? esc_attr( $button_class ) . ' strong' : esc_attr( $button_class ),
                                        absint( $product_id ),
                                        esc_attr__( 'Loading...', 'botiga' ),
                                        esc_attr__( 'Added!', 'botiga' ),
                                        esc_attr( wp_create_nonce( 'botiga-custom-addtocart-nonce' ) ),
                                        esc_html( $button_text ),
                                    );
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="footer-buttons">
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="button"><?php echo esc_html__( 'View Cart', 'botiga' ); ?></a>
        </div>
    </div>

<?php else : ?>
   
    <div class="botiga-wishlist-wrapper woocommerce-cart-form">
        <table class="shop_table shop_table_responsive botiga_wishlist_table empty" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name"><?php esc_html_e( 'Product Name', 'botiga' ); ?></th>
                    <th class="product-price"><?php esc_html_e( 'Unit Price', 'botiga' ); ?></th>
                    <th class="product-quantity"><?php esc_html_e( 'Stock Status', 'botiga' ); ?></th>
                    <th class="product-subtotal">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr class="botiga-wishlist-row-item woocommerce-cart-form__cart-item">
                    <td colspan="6"><?php echo esc_html__( 'No products added to the wishlist', 'botiga' ); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php endif; ?>