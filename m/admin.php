<?php 
   include 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Salon</title>
    <?php include 'includes/header.php';?>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <?php include 'includes/navbar.php';?>
      <?php include 'includes/sidebar.php';?>
      <div class="be-content">
        <!-- <div class="progress md-progress primary-color-dark">
            <div class="indeterminate"></div>
        </div> -->
        <div class="main-content container-fluid">
          <div class="row">
              <div class='col-12'>
                  <h3>Customer Ratings</h3>
              </div>
          </div>
          <div class="row">
            <div class='col-12'>
                <div class="card-body table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                      	<th style="width:5%;">S. No.</th>
                      	<th style="width:10%; text-align: left;">Date</th>
                        <th style="width:15%;">Name</th>
                        <th>Ratings</th>
                        <th style="width:35%;">Feedback</th>
                        <th style="width:10%;">Mobile</th>
                        <th style="width:10%;">Time</th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!--<nav class="be-right-sidebar">-->
      <!--  <div class="sb-content">-->
      <!--    <div class="tab-navigation">-->
      <!--      <ul class="nav nav-tabs nav-justified" role="tablist">-->
      <!--        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>-->
      <!--        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>-->
      <!--        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>-->
      <!--      </ul>-->
      <!--    </div>-->
      <!--    <div class="tab-panel">-->
      <!--      <div class="tab-content">-->
      <!--        <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">-->
      <!--          <div class="chat-contacts">-->
      <!--            <div class="chat-sections">-->
      <!--              <div class="be-scroller-chat">-->
      <!--                <div class="content">-->
      <!--                  <h2>Recent</h2>-->
      <!--                  <div class="contact-list contact-list-recent">-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar1.png" alt="Avatar">-->
      <!--                        <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar2.png" alt="Avatar">-->
      <!--                        <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar3.png" alt="Avatar">-->
      <!--                        <div class="user-data"><span class="status offline"></span><span class="name">Joel King   </span><span class="message">Ready for the meeti...</span></div></a></div>-->
      <!--                  </div>-->
      <!--                  <h2>Contacts</h2>-->
      <!--                  <div class="contact-list">-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar4.png" alt="Avatar">-->
      <!--                        <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar5.png" alt="Avatar">-->
      <!--                        <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>-->
      <!--                    <div class="user"><a href="#"><img src="assets/img/avatar6.png" alt="Avatar">-->
      <!--                        <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>-->
      <!--                  </div>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--            <div class="bottom-input">-->
      <!--              <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--          <div class="chat-window">-->
      <!--            <div class="title">-->
      <!--              <div class="user"><img src="assets/img/avatar2.png" alt="Avatar">-->
      <!--                <h2>Maggie jackson</h2><span>Active 1h ago</span>-->
      <!--              </div><span class="icon return mdi mdi-chevron-left"></span>-->
      <!--            </div>-->
      <!--            <div class="chat-messages">-->
      <!--              <div class="be-scroller-messages">-->
      <!--                <div class="content">-->
      <!--                  <ul>-->
      <!--                    <li class="friend">-->
      <!--                      <div class="msg">Hello</div>-->
      <!--                    </li>-->
      <!--                    <li class="self">-->
      <!--                      <div class="msg">Hi, how are you?</div>-->
      <!--                    </li>-->
      <!--                    <li class="friend">-->
      <!--                      <div class="msg">Good, I'll need support with my pc</div>-->
      <!--                    </li>-->
      <!--                    <li class="self">-->
      <!--                      <div class="msg">Sure, just tell me what is going on with your computer?</div>-->
      <!--                    </li>-->
      <!--                    <li class="friend">-->
      <!--                      <div class="msg">I don't know it just turns off suddenly</div>-->
      <!--                    </li>-->
      <!--                  </ul>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--            <div class="chat-input">-->
      <!--              <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>-->
      <!--                <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--        <div class="tab-pane tab-todo" id="tab2" role="tabpanel">-->
      <!--          <div class="todo-container">-->
      <!--            <div class="todo-wrapper">-->
      <!--              <div class="be-scroller-todo">-->
      <!--                <div class="todo-content"><span class="category-title">Today</span>-->
      <!--                  <ul class="todo-list">-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" checked="" id="tck1">-->
      <!--                        <label class="custom-control-label" for="tck1">Initialize the project</label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck2">-->
      <!--                        <label class="custom-control-label" for="tck2">Create the main structure              </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck3">-->
      <!--                        <label class="custom-control-label" for="tck3">Updates changes to GitHub              </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                  </ul><span class="category-title">Tomorrow</span>-->
      <!--                  <ul class="todo-list">-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck4">-->
      <!--                        <label class="custom-control-label" for="tck4">Initialize the project             </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck5">-->
      <!--                        <label class="custom-control-label" for="tck5">Create the main structure              </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck6">-->
      <!--                        <label class="custom-control-label" for="tck6">Updates changes to GitHub              </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                    <li>-->
      <!--                      <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>-->
      <!--                        <input class="custom-control-input" type="checkbox" id="tck7">-->
      <!--                        <label class="custom-control-label" for="tck7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!              </label>-->
      <!--                      </div>-->
      <!--                    </li>-->
      <!--                  </ul>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--            <div class="bottom-input">-->
      <!--              <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--        <div class="tab-pane tab-settings" id="tab3" role="tabpanel">-->
      <!--          <div class="settings-wrapper">-->
      <!--            <div class="be-scroller-settings"><span class="category-title">General</span>-->
      <!--              <ul class="settings-list">-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" checked="" name="st1" id="st1"><span>-->
      <!--                      <label for="st1"></label></span>-->
      <!--                  </div><span class="name">Available</span>-->
      <!--                </li>-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" checked="" name="st2" id="st2"><span>-->
      <!--                      <label for="st2"></label></span>-->
      <!--                  </div><span class="name">Enable notifications</span>-->
      <!--                </li>-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" checked="" name="st3" id="st3"><span>-->
      <!--                      <label for="st3"></label></span>-->
      <!--                  </div><span class="name">Login with Facebook</span>-->
      <!--                </li>-->
      <!--              </ul><span class="category-title">Notifications</span>-->
      <!--              <ul class="settings-list">-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" name="st4" id="st4"><span>-->
      <!--                      <label for="st4"></label></span>-->
      <!--                  </div><span class="name">Email notifications</span>-->
      <!--                </li>-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" checked="" name="st5" id="st5"><span>-->
      <!--                      <label for="st5"></label></span>-->
      <!--                  </div><span class="name">Project updates</span>-->
      <!--                </li>-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" checked="" name="st6" id="st6"><span>-->
      <!--                      <label for="st6"></label></span>-->
      <!--                  </div><span class="name">New comments</span>-->
      <!--                </li>-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" name="st7" id="st7"><span>-->
      <!--                      <label for="st7"></label></span>-->
      <!--                  </div><span class="name">Chat messages</span>-->
      <!--                </li>-->
      <!--              </ul><span class="category-title">Workflow</span>-->
      <!--              <ul class="settings-list">-->
      <!--                <li>-->
      <!--                  <div class="switch-button switch-button-sm">-->
      <!--                    <input type="checkbox" name="st8" id="st8"><span>-->
      <!--                      <label for="st8"></label></span>-->
      <!--                  </div><span class="name">Deploy on commit</span>-->
      <!--                </li>-->
      <!--              </ul>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</nav>-->
    </div>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/jqueryui.js"></script>
    <script type="text/javascript" src="assets/js/tooltip.js"></script>
    <script type="text/javascript" src="assets/js/floattime.js"></script>
    <?php include 'includes/footer_script.php' ?>
    
    <script type="text/javascript">
      // Date and time -------------
      var today = new Date();
      var day = today.getDate();
      var month = today.getMonth() + 1;

      function appendZero(value) {
          return "0" + value;
      }

      function theTime() {
          var d = new Date();
          document.getElementById("time").innerHTML = d.toLocaleTimeString("en-US");
      }

      if (day < 10) {
          day = appendZero(day);
      }

      if (month < 10) {
          month = appendZero(month);
      }

      today = day + "/" + month + "/" + today.getFullYear();

      document.getElementById("date").innerHTML = today;

      var myVar = setInterval(function () {
          theTime();
      }, 1000);
    </script>
    <script>
        function fetch_ratings() {
            $.ajax({
                url: 'ajaxfiles/get_ratings.php',
                type: 'POST',
                beforeSend: function () {
                    console.log('Getting....');
                },
                success: function (data) {
                    $('.no-border-x').html(data);
                }
            }).done(function () {
                console.log('Success');
            })
        }
        fetch_ratings();
    </script>
    <!-- https://foxythemes.net/preview/products/beagle/form-validation.html -->
    <!-- username details -->
    <!-- ar.senseprojects@spplc.in - Tariq
password - GW?Fd&fX?Gf& -->


  </body>
</html>