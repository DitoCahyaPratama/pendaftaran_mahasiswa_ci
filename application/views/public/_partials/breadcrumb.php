<p class="breadcrumbs">
    <?php foreach ($this->uri->segments as $segment): ?>
        <?php
            $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
            $is_active =  $url == $this->uri->uri_string;
        ?>
    <span class="mr-2">
        <?php if($is_active): ?>
			<a href="<?php echo site_url('home') ?>">Home <i class="ion-ios-arrow-forward"></i></a> <?php echo ucfirst($segment) ?>
		<?php else: ?>
            <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?> <i class="ion-ios-arrow-forward"></i></a>
		<?php endif; ?>
    </li>
    <?php endforeach; ?>

</p>