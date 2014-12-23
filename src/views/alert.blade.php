@extends("MessageBox::layout")

@section("section")
     <button class="messageClose messageButton">{{ \Config::get('MessageBox::okText') }}</button>
@stop