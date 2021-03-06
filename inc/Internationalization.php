<?php
/**
 * Internationalization (i18n) class
 * Loads plugin textdomain
 *
 * Since WordPress 4.6 translations are loaded via repository
 */

namespace underDEV\BoilerPlate;
use underDEV\Utils\Files;

class Internationalization {

	/**
	 * Files class
	 * @var object
	 */
	protected $files;

	/**
	 * Textomain
	 * @var string
	 */
	protected $textdomain;

	/**
	 * Class constructor
	 * @param object $files      instance of Files object
	 * @param string $textdomain textdomain string
	 */
	public function __construct( Files $files, $textdomain ) {
		$this->files      = $files;
		$this->textdomain = $textdomain;
	}

	/**
	 * Loads plugin textdomain
	 * @return void
	 */
	public function load_textdomain() {
		load_plugin_textdomain( $this->textdomain, false, $this->files->dir_path( 'languages' ) );
	}

}
