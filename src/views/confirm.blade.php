@extends("MessageBox::layout")

@section("section")
      <button class="messageButton" onclick="location.href='{{ $url }}'">{{ \Config::get('MessageBox::confirmText') }}</button>
	  <button class="messageClose messageButton">{{ \Config::get('MessageBox::cancelText') }}</button>
@stop