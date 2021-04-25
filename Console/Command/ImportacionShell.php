<?php
App::uses ( 'AppShell', 'Console/Command' );
App::uses ( 'CakeEmail', 'Network/Email' );
App::uses ( 'Component', 'Controller' );
class ImportacionShell extends AppShell {
	
	/**
	 * Test send email
	 * @example call: /var/www/html/sistrado/app/Console/cake -app /var/www/html/sistrado/app Importacion test_email
     * @example On MAC call: /Applications/XAMPP/xamppfiles/htdocs/sistrado-gescom/lib/Cake/Console/cake -app /Applications/XAMPP/xamppfiles/htdocs/sistrado-gescom/app Importacion test_email
	 * @author Zerolf
	 * @version 07 Agosto 2020
	 */
	public function test_email() {
		//$id = $this->args[0];
		$email = new CakeEmail('gmail');
		$email->to(array('ahugo.soft@gmail.com'));
		$email->subject(utf8_decode('test email from console shell'));
		$email->template('default','default');
		$email->emailFormat('html');
		
		$email->send();
    }

}