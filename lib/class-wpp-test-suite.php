<?php
/**
 * Name: Test Suite
 * Class: UsabilityDynamics\WPP\Test_Suite
 * Version: 3.6.0
 * Description: Administrative Tools.
 * Capability: manage_options
 * Slug: wp-property-test-suite
 * URL: http://github.com/UsabilityDynamics/wp-property-test-suite
 *
 */
namespace UsabilityDynamics\WPP {

  if( !class_exists( 'UsabilityDynamics\WPP\Test_Suite' ) ) {

    class Test_Suite {

      /**
       * Module Path.
       *
       * @public
       * @static
       * @property $path
       * @type {string}
       */
      static public $path = null;

      /**
       * Intialize Test_Suite.
       *
       * @param $parent
       * @param $module
       *
       */
      public function __construct( $parent = array(), $module = array() ) {

        // @todo Add development RPC methods.

        try {

          // Initialize Module.

        }  catch( \Exception $error ) {
          trigger_error($error->getMesage() );
        }

      }

    }

  }

}