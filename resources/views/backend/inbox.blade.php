@extends('backend.layouts.master')

@section('title', 'Inbox')

@section('css')

    <link rel="stylesheet" href="{{ asset('allscript/css/vendor/magnific-popup.css') }}">

<style>
form.search-form.v2 {
    padding: 10px;
}
.search-form input[type="image"] {
    position: absolute;
    top: 9px !important;
    right: 12px !important;
}
.inbox-messages-preview .inbox-message-preview {

    float: left;
    height: 450px !important;

}

.inbox-message-preview .inbox-message-preview-body {

    height: 315px !important;
    padding-bottom: 60px;
    border-bottom: 1px solid #ebebeb;
    overflow-y: auto;
    overflow-x: hidden;

}

.inbox-messages-preview .inbox-messages, .inbox-messages-preview .inbox-message-preview {
    float: left;
    height: 450px !important;
}

.getmessages{
    padding: 5px;
}
.getmessages img, .inbox-message img{
    border-radius: 50%;

width: 45px;

height: 45px;

}

.inbox-message.v2 {
    height: 80px !important;
   
}

.dashboard-content {
    padding: 10px 0px 0px !important;

}

.inbox-message.v2:hover{
     background: #f5f5f5;
}

.active{
     background: #f5f5f5;
}

</style>

@endsection

@section('content')
  
        <!-- DASHBOARD CONTENT -->
        <div class="dashboard-content">
            <!-- HEADLINE -->
            <div class="headline buttons two primary">
                <h4>Your Inbox (36)</h4>
				<a href="#new-message-popup" class="button mid-short secondary open-new-message">New Message</a>
				<a href="#" class="button mid-short primary">Delete Selected</a>
            </div>
            <!-- /HEADLINE -->

            <!-- INBOX MESSAGES PREVIEW -->
            <div class="inbox-messages-preview">
                <!-- INBOX MESSAGES -->
                <div class="inbox-messages message">
                    <!-- INBOX MESSAGE -->
                    <form class="search-form v2">
						<input type="text" class="rounded" name="search" id="search_products" placeholder="Search products here...">
						<input type="image" src="{{ asset('allscript')}}/images/search-icon.png" alt="search-icon">
					</form>
				@foreach($conversation_list as $conversations_show)

                <?php
                    $last_msg = DB::table('messages')->where('conversion_id', $conversations_show->con_id)->orderBy('msg_id', 'DESC')->first();

                ?>
                <a href="{{$conversations_show->id}}" onclick="message('{{$conversations_show->id}}')" class="message" >
                    <div class="inbox-message v2">

                        <div class="inbox-message-author">
                            <figure class="user-avatar">
                                <img src="{{ asset('image/'.$conversations_show->user_image)}}" alt="user-img">
                            </figure>
                            <p class="text-header">
                                {{$conversations_show->name}}
                            </p>
                        </div>

                        <div class="inbox-message-content">
                            <p class="description">{{$conversations_show->msg}}</p>
                        </div>

                        <div class="inbox-message-date">
                            <p>May 18th, 2014</p>
                        </div>
                    </div>
                </a>
                @endforeach
                    <!-- INBOX MESSAGE -->

                </div>
                <!-- /INBOX MESSAGES -->

                <!-- INBOX MESSAGE PREVIEW -->
                <div class="inbox-message-preview">
                    <div class="inbox-message-preview-header">
                        <p class="text-header">
                            Product Question
                            <img src="{{ asset('allscript')}}/images/dashboard/star-filled.png" alt="star-icon">
                        </p>
                        <a href="#" class="report">Report this Conversation</a>
                    </div>

                    <div class="inbox-message-preview-body">


                            <span class="show_conversation"></span>
                         

                    </div>

                    <form class="inbox-reply-form">
                        <input type="text" id="reply" name="reply" placeholder="Write your message here...">
                        <button class="button secondary">Send Message</button>
                    </form>
                </div>
                <!-- /INBOX MESSAGE PREVIEW -->
            </div>
            <!-- /INBOX MESSAGES PREVIEW -->
        </div>
        <!-- DASHBOARD CONTENT -->
    
    <!-- /DASHBOARD BODY -->

	<div class="shadow-film closed"></div>
@endsection

@section('js')

<!-- Tweet -->
<script src="{{ asset('allscript/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<!-- xmAlerts -->
<script src="{{ asset('allscript/js/vendor/jquery.xmalert.min.js') }}"></script>

<script src="{{ asset('allscript/js/dashboard-inbox.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){

    $(document).on('click', '.message a', function(e){
    e.preventDefault();
    });
});

    function message(id){
        var  link = '<?php echo URL::to("/dashbord/getmessages/");?>/'+id;
        $.ajax({
            url:link,
            method:"get",
            data:{
                conversaion:id
            },
            success:function(data){
                if(data){
                    $('.show_conversation').html(data);
               }else{
                    $('.show_conversation').html('<p>No Conversation </p>');
               }
            }
        });
    }


</script>
@endsection
