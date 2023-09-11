  <div class="p__sidebar">
      <div class="p__sidebar-contents">
          <!-- secondary -->
          <aside id="secondary">
              <?php
                if (is_active_sidebar('sidebar_1')) {
                    dynamic_sidebar('sidebar_1');
                }
                ?>
          </aside><!-- secondary -->
          <a href="/single.php"></a>
      </div>
      <div class="p__sidebar-contents">
          <!-- secondary -->
          <aside id="secondary">
              <?php
                if (is_active_sidebar('sidebar_2')) {
                    dynamic_sidebar('sidebar_2');
                }
                ?>
          </aside><!-- secondary -->
      </div>
  </div>