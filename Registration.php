<?php include('auth.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="main">
      <form class="" action="auth.php" method="post">
        <div class="reg_content">
          <div class="up_content">
            <div class="l_up_content">
              <img src="img/twitter.jpg" alt="">
            </div>
            <div class="r_up_content">
              <input type="submit" class="submit_reg" name="submit_reg" value="Next">
            </div>
          </div>
          <div class="label_reg">
            <p>Create your account</p>
          </div>
          <div class="reg_login">
            <input type="text" class="reg-input-box" name="username"
              value="<?php echo $username; ?>"
              placeholder="Username"
              onfocus="this.className='reg-input-box-focus'"
              onblur="this.className='reg-input-box'" />
          </div>
          <div class="reg_name">
            <input type="text" class="reg-input-name" name="name"
              value="<?php echo $name; ?>"
              placeholder="Name"
              onfocus="this.className='reg-input-box-focus'"
              onblur="this.className='reg-input-name'" />
          </div>
          <div class="reg_pass">
            <input type="text" class="reg-pass-box" name="password"
              value=""
              placeholder="Password"
              onfocus="this.className='reg-input-box-focus'"
              onblur="this.className='reg-pass-box'" />
          </div>
          <div class="label_date">
            <p>Date of birth</p>
          </div>
          <div class="label_date_to">
            <div>
              <p>Day</p>
            </div>
            <div>
              <p>Month</p>
            </div>
            <div>
              <p>Year</p>
            </div>
          </div>
          <div class="input_date">
            <select class="day" name="day"
              onfocus="this.className='day-focus'"
              onblur="this.className='day'">
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
            <select class="month" name="month"
              onfocus="this.className='month-focus'"
              onblur="this.className='month'">
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
            <select class="year" name="year"
              onfocus="this.className='year-focus'"
              onblur="this.className='year'">
              <option>2014</option>
              <option>2013</option>
              <option>2012</option>
              <option>2011</option>
              <option>2010</option>
              <option>2009</option>
              <option>2008</option>
              <option>2007</option>
              <option>2006</option>
              <option>2005</option>
              <option>2004</option>
              <option>2003</option>
              <option>2002</option>
              <option>2001</option>
              <option>2000</option>
              <option>1999</option>
              <option>1998</option>
              <option>1997</option>
              <option>1996</option>
              <option>1995</option>
              <option>1994</option>
              <option>1993</option>
              <option>1992</option>
              <option>1991</option>
              <option>1990</option>
              <option>1989</option>
              <option>1988</option>
              <option>1987</option>
              <option>1986</option>
              <option>1985</option>
            </select>
          </div>
        </div>

      </form>
    </div>
  </body>
</html>
