@extends("MessageBox::layout")

@section("section")
     <button class="messageClose">{{ \Config::get('MessageBox::okText') }}</button>
@stop