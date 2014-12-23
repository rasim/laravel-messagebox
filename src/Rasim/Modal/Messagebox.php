<?php

namespace Rasim\Modal;

Class Messagebox{

	public function confirm($status,$title,$message,$url = "")
	{
		$data["status"] = $status;
		$data["message"] = $message;
		$data["title"] = $title;
		$data["url"] = $url;

		return \View::make('MessageBox::confirm',$data);
	}

	public function alert($status,$title,$message)
	{

		$data["status"] = $status;
		$data["message"] = $message;
		$data["title"] = $title;

		return \View::make('MessageBox::alert',$data);
	}

}