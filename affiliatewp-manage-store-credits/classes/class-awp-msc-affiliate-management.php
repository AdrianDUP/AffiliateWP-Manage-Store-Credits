<?php

/**
 * This is a static class that will contain functions allowing the admin to manage the affiliate's store credit.
 */

if (!class_exists('AWP_MSC_Affiliate_Management')) {
	class AWP_MSC_Affiliate_Management {
		/**
		 * Withdraw funds from the affiliate
		 *
		 * @param integer $user_id The user id from which the funds have to be withdrawn from.
		 * @return bool
		 * @since 1.0.0
		 */
		public static function withdraw_funds($user_id = 0) {
			if (empty($user_id)) {
				return false;
			}

			$current_store_credits = get_user_meta($user_id, 'affwp_wc_credit_balance', true);
		}

		/**
		 * Award store credits to the affiliate
		 *
		 * @param integer $user_id The user id for which the funds have to be awarded
		 * @return bool
		 * @since 1.0.0
		 */
		public static function award_funds($user_id = 0) {
			if (empty($user_id)) {
				return false;
			}
		}

		/**
		 * Set the affiliate's store credits to a specific amount
		 *
		 * @param integer $user_id The user id for which the funds have to be set
		 * @return bool
		 * @since 1.0.0
		 */
		public static function set_funds($user_id = 0) {
			if (empty($user_id)) {
				return false;
			}
		}

		/**
		 * Logs the current update being performed by the admin
		 *
		 * @param integer $user_id The user id for which the action was performed
		 * @param integer $admin_id ID of the administrator that performed the action
		 * @param string $action The action that was performed
		 * @param integer $amount The amount for which the funds have been adjusted
		 * @return bool
		 * @since 1.0.0
		 */
		public static function log_fund_adjustment($user_id = 0, $admin_id = 0, $action = '', $amount = 0) {
			if (empty($user_id) || empty($admin_id) || empty($action) || empty($amount)) {
				return false;
			}
		}
	}
}