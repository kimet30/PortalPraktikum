<?php
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'asepnur.isk@gmail.com'; //change this
    $config['smtp_pass'] = '1o122o14'; //change this
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
	
	//send mail
	function sendmail()
	{
		$this->load->library('email'); // load email library
		$this->email->from('user@gmail.com', 'sender name');
		$this->email->to('test1@gmail.com');
		$this->email->cc('test2@gmail.com'); 
		$this->email->subject('Your Subject');
		$this->email->message('Your Message');
		$this->email->attach('/path/to/file1.png'); // attach file
		$this->email->attach('/path/to/file2.pdf');
		if ($this->email->send())
			echo "Mail Sent!";
		else
			echo "There is error in sending mail!";
	}

?>