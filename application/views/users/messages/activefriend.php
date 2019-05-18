<link rel="stylesheet" href="<?= base_url('assets/users/messages/style.css')?>">
    <div class="content-wrapper">
        <div class="h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat">
                    <div class="card mb-sm-4 mb-md-0 contacts_card">
                        <div class="card-header"> 
                            <div class="input-group">
                                <input type="text" placeholder="Search..." name="" class="form-control search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body contacts_body">
                            <ui class="contacts">
                                <?php foreach($count_friend->result() as $row){ 
									$active_friend = $this->SMS_Model->active_friend($row->parent_id, $row->sub_id);
								?>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="<?= $active_friend['photo'] ?>" class="rounded-circle user_img">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span> <a href="<?= base_url('users/SMS/chating/').$active_friend['user_id'] ?>"><?= $active_friend['fname'].' '.$active_friend['lname'] ?></a> </span>
                                            <p><?= $active_friend['fname']?> is online</p>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                
                            </ui>
                        </div>
                        <div class="card-footer">
                            <i class="fa fa-home"></i>
                            <i class="fa fa-setting"></i>
                        </div>
                    </div>
                </div>
                <!-- End Active friend list-->
                <!-- Start Chatting -->
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<?php foreach($friendinfo->result() as $frinfo){?>
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?= $frinfo->photo?>" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?= $frinfo->fname.' '.$frinfo->lname?></span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> <a target="new" class="card-link" href="<?= base_url('Public_Profile/index/').$frinfo->user_id?>">View profile</a></li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<?php } ?>
						<div class="card-body msg_card_body">
							<?php foreach($message->result() as $sms){?>
							<?php if($sms->send_id == $this->session->userdata('user_id')){?>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									<p><?= nl2br($sms->message)?></p>
									<p class="" style="font-size: 10px"><?= $sms->send_time?></p>
									<span class="msg_time_send"></span>
								</div>
								<div class="img_cont_msg">
									<img src="<?= $this->session->userdata('photo')?>" class="rounded-circle user_img_msg">
								</div>
							</div>
							<?php }else{?>
							
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="<?= $frinfo->photo?>" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									<p><?= nl2br($sms->message)?></p>
									<p class="" style="font-size: 10px"><?= $sms->send_time?></p>
									<span class="msg_time"></span>
								</div>
							</div>
						<?php } }?>
						</div>
						
						<div class="card-footer">
							<form action="<?= base_url('users/SMS/chating/').$frinfo->user_id?>" method="post">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<input type="submit" name="send" value="Send" class="btn btn-info">
									<!--
										<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
									-->
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div> 

</body>


	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>

    
<script>
    $(document).ready(function(){
        $('#action_menu_btn').click(function(){
            $('.action_menu').toggle();
        });
	});
</script>
</html>


