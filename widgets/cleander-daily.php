  <div class="calendar-todo">
  <div class="container-calender2">
    
    <div class="background-calender2">
      <header>
        <div class="menu-calender2">
          <i class="fa fa-bars fa-2x fa-inverse"></i>
        </div>
        <div class="search">
          <i class="fa fa-search fa-2x fa-inverse"></i>
        </div>
      </header>
      <br /><br />
      <h1><label id="lblGreetings"></label></h1>
      <div class="avatar-calender2"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/avatar-calendar.png" alt="avatar" />
      <div class="notification-badge">3</div>
      </div>
      <div class="month-block">
        <div class="left"><i class="fa fa-angle-left fa-2x fa-inverse"></i></div>
        
        <div class="right"><i class="fa fa-angle-right fa-2x fa-inverse"></i></div>
        <div class="month">February</div>
      </div> <!--end month-block-->
    </div> <!--end background-->
    
    
    <ul class="calendar">
      <li>
        <span class="day">Sun</span>
        <span class="number">7</span>
      </li>
      <li>
        <span class="day">Mon</span>
        <span class="number selected">8</span>
        <div class="dot"> </div>
        
      </li>
      <li>
        <span class="day">Tue</span>
        <span class="number">9</span>
      </li>
      <li>
        <span class="day">Wed</span>
        <span class="number">10</span>
      </li>
      
      <li>
        <span class="day">Thu</span>
        <span class="number">11</span>
      </li>
      <li>
        <span class="day">Fri</span>
        <span class="number">12</span>
        <div class="dot"> </div>
      </li>
      <li>
        <span class="day">Sat</span>
        <span class="number">13</span>
      </li>
      
    </ul> <!--end calendar-->
    
    
    
    <ul class="todo">
      <li>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/calendar-avatar1.png" alt="avatar" />

        <div class="todo-description">New subpage for Janet</div>
        <div class="todo-details">8 - 10am <span class="location"></span></div>

      </li>
      
      <li>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/calendar-avatar2.png" alt="avatar2" />
        <div class="todo-description">Catch up with Tom</div>
        <div class="todo-details">11 - 12am <span class="location">Hangouts</span></div>
      </li>
      
      <li>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/calendar-avatar3.png" alt="avatar3" />
        <div class="todo-description">Lunch with Diane</div>
        <div class="todo-details">12pm <span class="location">Restaurant</span></div>
      </li>
    </ul> <!--end todo-->
    
    <div class="add-button">
      +
    </div>
    
  </div> <!-- end container -->
</div> <!-- end calendar-todo -->
<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';

    document.getElementById('lblGreetings').innerHTML =
        '<b>' + greet + '</b> and welcome to FUSE!';
</script> 

