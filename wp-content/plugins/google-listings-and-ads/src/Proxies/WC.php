<?php
declare( strict_types=1 );

namespace Automattic\WooCommerce\GoogleListingsAndAds\Proxies;

use Automattic\WooCommerce\Container;
use Automattic\WooCommerce\GoogleListingsAndAds\Exception\InvalidValue;
use WC_Countries;
use WC_Coupon;
use WC_Product;
use WC_Shipping_Zone;
use WC_Shipping_Zones;
use WP_Term;
use function WC as WCCore;

defined( 'ABSPATH' ) || exit;

/**
 * Class WC
 *
 * @package Automattic\WooCommerce\GoogleListingsAndAds\Proxies
 */
class WC {

	/**
	 * The base location for the store.
	 *
	 * @var string
	 */
	protected $base_country;

	/**
	 * @var array
	 */
	protected $countries;

	/**
	 * List of countries the WC store sells to.
	 *
	 * @var array
	 */
	protected $allowed_countries;

	/** @var WC_Countries */
	protected $wc_countries;

	/**
	 * @var array
	 */
	protected $continents;

	/**
	 * WC constructor.
	 *
	 * @param WC_Countries|null $countries
	 */
	public function __construct( ?WC_Countries $countries = null ) {
		$this->wc_countries = $countries ?? new WC_Countries();
	}

	/**
	 * Get WooCommerce countries.
	 *
	 * @return array
	 */
	public function get_countries(): array {
		if ( null === $this->countries ) {
			$this->countries = $this->wc_countries->get_countries() ?? [];
		}

		return $this->countries;
	}

	/**
	 * Get WooCommerce allowed countries.
	 *
	 * @return array
	 */
	public function get_allowed_countries(): array {
		if ( null === $this->allowed_countries ) {
			$this->allowed_countries = $this->wc_countries->get_allowed_countries() ?? [];
		}

		return $this->allowed_countries;
	}

	/**
	 * Get the base country for the store.
	 *
	 * @return string
	 */
	public function get_base_country(): string {
		if ( null === $this->base_country ) {
			$this->base_country = $this->wc_countries->get_base_country() ?? 'US';
		}

		return $this->base_country;
	}

	/**
	 * Get all continents.
	 *
	 * @return array
	 */
	public function get_continents(): array {
		if ( null === $this->continents ) {
			$this->continents = $this->wc_countries->get_continents() ?? [];
		}

		return $this->continents;
	}

	/**
	 * Get the WC_Countries object
	 *
	 * @return WC_Countries
	 */
	public function get_wc_countries(): WC_Countries {
		return $this->wc_countries;
	}

	/**
	 * Get a WooCommerce product and confirm it exists.
	 *
	 * @param int $product_id
	 *
	 * @return WC_Product
	 *
	 * @throws InvalidValue When the product does not exist.
	 */
	public function get_product( int $product_id ): WC_Product {
		$product = wc_get_product( $product_id );
		if ( ! $product instanceof WC_Product ) {
			throw InvalidValue::not_valid_product_id( $product_id );
		}

		return $product;
	}

	/**
	 * Get a WooCommerce product if it exists or return null if it doesn't
	 *
	 * @param int $product_id
	 *
	 * @return WC_Product|null
	 */
	public function maybe_get_product( int $product_id ): ?WC_Product {
		$product = wc_get_product( $product_id );
		if ( ! $product instanceof WC_Product ) {
			return null;
		}

		return $product;
	}

	/**
	 * Get a WooCommerce coupon if it exists or return null if it doesn't
	 *
	 * @param int $coupon_id
	 *
	 * @return WC_Coupon|null
	 */
	public function maybe_get_coupon( int $coupon_id ): ?WC_Coupon {
		$coupon = new WC_Coupon( $coupon_id );
		if ( $coupon->get_id() === 0 ) {
			return null;
		}
		return $coupon;
	}

	/**
	 * Get shipping zones from the database.
	 *
	 * @return array Array of arrays.
	 *
	 * @since 1.9.0
	 */
	public function get_shipping_zones(): array {
		return WC_Shipping_Zones::get_zones();
	}

	/**
	 * Get shipping zone using it's ID
	 *
	 * @param int $zone_id Zone ID.
	 *
	 * @return WC_Shipping_Zone|bool
	 *
	 * @since 1.9.0
	 */
	public function get_shipping_zone( int $zone_id ): ?WC_Shipping_Zone {
		return WC_Shipping_Zones::get_zone( $zone_id );
	}

	/**
	 * Get an array of shipping classes.
	 *
	 * @return array|WP_Term[]
	 *
	 * @since 1.10.0
	 */
	public function get_shipping_classes(): array {
		return WCCore()->shipping()->get_shipping_classes();
	}

	/**
	 * Get Base Currency Code.
	 *
	 * @return string
	 *
	 * @since 1.10.0
	 */
	public function get_woocommerce_currency(): string {
		return get_woocommerce_currency();
	}

	/**
	 * Get available payment gateways.
	 */
	public function get_available_payment_gateways(): array {
		return WCCore()->payment_gateways->get_available_payment_gateways();
	}

	/**
	 * Returns the WooCommerce object container.
	 *
	 * @return Container
	 *
	 * @since 2.3.10
	 */
	public function wc_get_container(): Container {
		return wc_get_container();
	}
}
