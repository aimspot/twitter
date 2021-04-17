<!DOCTYPE html>
<html>
  <head>
    <title>Twitter</title>
    <link rel="stylesheet" href="global.css" />
  </head>
  <body>
    <div class="layout">
      <div class="layout__left-sidebar">
        <img src="./svg/twitter.svg" class="brand" />
        <div class="sidebar-menu">
          <div class="sidebar-menu__item sidebar-menu__item--active">
            <img src="./svg/home.svg" class="sidebar-menu__item-icon" />
            Home
          </div>
          <div class="sidebar-menu__item">
            <img src="./svg/explore.svg" class="sidebar-menu__item-icon" />
            Explore
          </div>

          <div class="sidebar-menu__item">
            <img
              src="./svg/notifications.svg"
              class="sidebar-menu__item-icon"
            />
            Notifications
          </div>

          <div class="sidebar-menu__item">
            <img src="./svg/messages.svg" class="sidebar-menu__item-icon" />
            Messages
          </div>

          <div class="sidebar-menu__item">
            <img src="./svg/profile.svg" class="sidebar-menu__item-icon" />
            Profile
          </div>

          <div class="sidebar-menu__item">
            <img src="./svg/more.svg" class="sidebar-menu__item-icon" />
            More
          </div>
        </div>
      </div>
      <form class="" action="auth.php" method="post">
        <div class="layout__main">
          <div class="tweet">
            <div class="input_tweet">
              <input type="text" name="input_tweet"
                class="tweet_input"    value=""
                onfocus="this.className='tweet_input_focus'"
                onblur="this.className='tweet_input'">
                <input type="submit" name="tweet_submit" class="tweet_submit" value="Tweet">
            </div>
          </div>
          <div class="tweet">
            <img class="tweet__author-logo" src="#" />
            <div class="tweet__main">
              <div class="tweet__header">
                <div class="tweet__author-name">
                  First
                </div>
                <div class="tweet__author-slug">
                  @aaaaaaaa
                </div>
                <div class="tweet__publish-time">
                  22-30
                </div>
              </div>
              <div class="tweet__content">
                Hellos
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
