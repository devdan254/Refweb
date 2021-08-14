<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => '', 
			'label' => 'DASHBOARD', 
			'icon' => '<i><img src="'.SITE_ADDR.'assets/images/dashboard.png" /></i>'
		),
		
		array(
			'path' => 'netflix', 
			'label' => 'NETFLIX', 
			'icon' => '<i><img src="'.SITE_ADDR.'assets/images/camera.png" /></i>'
		),
		
		array(
			'path' => 'withdrawals', 
			'label' => 'WITHDRAWALS', 
			'icon' => '<i><img src="'.SITE_ADDR.'assets/images/watm.png" /></i>'
		),
		
		array(
			'path' => '/', 
			'label' => 'TRANSACTIONS', 
			'icon' => '<i><img src="'.SITE_ADDR.'assets/images/transfer.png" /></i>','submenu' => array(
		array(
			'path' => '/', 
			'label' => 'ALL TRANSACTIONS', 
			'icon' => ''
		),
		
		array(
			'path' => '/', 
			'label' => 'WITHDRAWALS', 
			'icon' => ''
		),
		
		array(
			'path' => '/', 
			'label' => 'NETFLIX PAYMENTS', 
			'icon' => ''
		),
		
		array(
			'path' => '/', 
			'label' => 'REFERALS INCOME', 
			'icon' => ''
		),
		
		array(
			'path' => '/', 
			'label' => 'TRANSACTION FEE', 
			'icon' => ''
		)
	)
		)
	);
		
			public static $navbartopleft = array(
		array(
			'path' => 'notify', 
			'label' => '', 
			'icon' => '<i><img src="'.SITE_ADDR.'assets/images/notify.png" /></i>'
		)
	);
		
	
	
			public static $package_name = array(
		array(
			"value" => "bronze", 
			"label" => "BRONZE INVESTMENT PLAN", 
		),
		array(
			"value" => "silver", 
			"label" => "SILVER INVESTMENT PLAN", 
		),
		array(
			"value" => "gold", 
			"label" => "GOLD INVESTMENT PLAN", 
		),
		array(
			"value" => "platinum", 
			"label" => "PLATINUM INVESTMENT PLAN", 
		),
		array(
			"value" => "diamond", 
			"label" => "DIAMOND INVESTMENT PLAN", 
		),
		array(
			"value" => "titanium", 
			"label" => "TITANIUM INVESTMENT PLAN", 
		),
		array(
			"value" => "emerald", 
			"label" => "EMERALD INVESTMENT PLAN", 
		),
		array(
			"value" => "ruby", 
			"label" => "RUBY INVESTMENT PLAN", 
		),
		array(
			"value" => "sapphire", 
			"label" => "SAPPHIRE INVESTMENT PLAN", 
		),
		array(
			"value" => "ambassador", 
			"label" => "AMBASSADOR INVESTMENT PLAN", 
		),);
		
			public static $role = array(
		array(
			"value" => "User", 
			"label" => "User", 
		),);
		
			public static $account_status = array(
		array(
			"value" => "Active", 
			"label" => "Active", 
		),
		array(
			"value" => "Pending", 
			"label" => "Pending", 
		),
		array(
			"value" => "Blocked", 
			"label" => "Blocked", 
		),);
		
}