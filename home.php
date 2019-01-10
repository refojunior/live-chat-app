<?php 
$title = "Start Chat";

include_once "layouts/header.php";

if(!isset($_SESSION['username'])) {
    header("location:" .base_url());
}


?>
<!-- DIRECT CHAT -->
<div class="container">
    <br>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <a href="process/authentication.php?process=logout" class="btn btn-danger">Logout</a>
      </div>
    </div>
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary direct-chat-contacts-open"> 
            <!-- <div class="card direct-chat direct-chat-primary">-->
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" id="Contacts" onclick="return showContact()">
                    <i class="fa fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!--CHAT ADA DISINI -->
                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#" onclick="return selectedContact('Count Dracula')">
                        <img class="contacts-list-img" src="picture/user1-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#" onclick="return selectedContact('Sarah Doe')">
                        <img class="contacts-list-img" src="picture/user1-128x128.jpg">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                   
                   
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" id="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" id="btnSend" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
        </div>
    </div>
</div>
            
<?php include_once "layouts/footer.php" ?>

<script>
function showContact(){
  $('.card, .direct-chat').addClass('direct-chat-contacts-open');
}

function selectedContact(param){
  $('.card-title').html(param);
  $('.card, .direct-chat').removeClass('direct-chat-contacts-open');
  $.post("process/chat.php", {
    user: param,
  },
  function(data, status){
    $('.direct-chat-messages').html(data);
  });
}

$(document).ready(function(){
  $('#btnSend').click(function(){
    if($('#message').val() != ''){
      $.post("process/send.php", 
      {
        message: $("#message").val()
      },
      function(data, status){
        $(".direct-chat-messages").append(data);
      });
    } else {
      alert('Write a message first!');
    }
    
  });



});

  
</script>