<style type='text/css'>
.messageBox {
    font: {{ \Config::get('MessageBox::fontStyle') }};
    position: fixed;
    right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
    min-height: 10em;
    width: 90%;
    top:-50%;
}
 
.messageClose {
  content: "x";
  bottom:140px;
  right:-96%;
  padding:0 6px 2px 6px;
  font-family:tahoma;
  cursor:pointer;
  line-height: 2px;
}

.messageButton{
  bottom:140px;
  right:-96%;
  padding:0 6px 2px 6px;
  font-family:tahoma;
  cursor:pointer;
  line-height: inherit !important;

}

.messageContainer {
  margin: 20px auto;
  width: {{ \Config::get('MessageBox::width') }};
}

.messageContainer .notif {
  margin: 10px 0;
}
 
.notif {
  position: relative;
  padding: 25px 30px 25px 100px;
  min-height: 50px;
  line-height: 22px;
  background: white;
  border-radius: 2px;

}
 
.notif:before {
  content: '';
  position: absolute;
  top: 25px;
  left: 30px;
  width: 40px;
  height: 40px;
  border: 5px solid;
  border-radius: 25px;
}
 
.notif p {
  font-size: 11px;
  color: #666;
}
 
.notif-title {
  margin: 0 0 5px;
  font-size: 14px;
  font-weight: bold;
  color: #333;
}
 
.notif-title:before, .notif-title:after {
  content: '';
  position: absolute;
  background: white;
  border-radius: 2px;
}
 
.notif-success:before {
  background: #a7d155;
  border-color: #8fb14f;
}
 
.notif-success .notif-title:before, .notif-success .notif-title:after {
  top: 44px;
  left: 55px;
  width: 4px;
  height: 12px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
 
.notif-success .notif-title:after {
  top: 50px;
  left: 48px;
  width: 8px;
  height: 4px;
}
 
.notif-fail:before {
  background: #e34f4f;
  border-color: #c14343;
}
 
.notif-fail .notif-title:before, .notif-fail .notif-title:after {
  top: 43px;
  left: 53px;
  width: 4px;
  height: 14px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
 
.notif-fail .notif-title:after {
  top: 48px;
  left: 48px;
  width: 14px;
  height: 4px;
}
 
.notif-warning:before {
  background: #f1e472;
  border-color: #cec260;
}
 
.notif-warning .notif-title:before, .notif-warning .notif-title:after {
  top: 42px;
  left: 53px;
  width: 4px;
  height: 11px;
  background: #5c562b;
}
 
.notif-warning .notif-title:after {
  top: 54px;
  height: 4px;
}
 
.notif-controls {
  position: absolute;
  top: 0;
  right: 0;
  height: 16px;
  padding: 4px 3px 5px;
  background: #f0f0f0;
  border: solid #dcdcdc;
  border-width: 0 0 1px 1px;
  border-radius: 0 2px;
}
 
.notif-controls > a {
  position: relative;
  float: left;
  margin: 0 1px;
  width: 16px;
  height: 16px;
  font: 0/0 serif;
  text-shadow: none;
  color: transparent;
}
 
.notif-close:before, .notif-close:after {
  content: '';
  position: absolute;
  top: 4px;
  left: 7px;
  width: 2px;
  height: 10px;
  background: #bbb;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
 
.notif-close:after {
  top: 8px;
  left: 3px;
  width: 10px;
  height: 2px;
}
 
.notif-close:hover:before, .notif-close:hover:after {
  background: #888;
}
 
.lt-ie9 .notif-success .notif-title:before {
  content: '\2714';
  display: block;
  top: 25px;
  left: 30px;
  width: 50px;
  font: bold 18px/50px "Arial Unicode MS";
  color: white;
  text-align: center;
  background: none;
}
 
.lt-ie9 .notif-success .notif-title:after {
  display: none;
}
 
.lt-ie9 .notif-fail .notif-title:before {
  content: '\2716';
  display: block;
  top: 25px;
  left: 30px;
  width: 50px;
  color: white;
  text-align: center;
  background: none;
}
 
.lt-ie9 .notif-fail .notif-title:after {
  display: none;
}
 
.lt-ie9 .notif-close:before {
  content: '\2716';
  display: block;
  top: 0;
  left: 0;
  width: 16px;
  color: #bbb;
  text-align: center;
  background: none;
}
 
.lt-ie9 .notif-close:after {
  display: none;
}
 
.lt-ie9 .notif-close:hover:before {
  color: #999;
}
  </style>
  
<script type="text/javascript">
window.jQuery || document.write('<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>')
</script>


<script type='text/javascript'>
$(function() {
$(".messageBox").animate({top: "10%", opacity:"1"}, 500);
$(".messageClose").click(function(){
  $(".messageBox").animate({top: "-50%", opacity:"0"}, 500);
});});
</script>

<div class="messageBox">
  <div class="messageContainer">
     <section class="notif notif-{{ $status }}">
      <h6 class="notif-title">{{ $title }}</h6>
      <p>{{ $message }}</p>
      @yield("section")
      <div class="notif-controls">
        <span href="#" class="notif-close messageClose"></span>
      </div>
    </section>
  </div>
</div>
  


