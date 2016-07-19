<?php
/*
Name: Thesis Box
Author: Ryan Strandt
Version: 1.0
Description: Thesis Box.
Class: default_thesis_box
*/

class default_thesis_box extends thesis_box {

	protected function translate() {
		$this->title = $this->name = __('Default Thesis Box', 'cru_thesis');
	}

	protected function options() {
		global $thesis;

		return array(
			'twitter' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Twitter URL:', 'cru_thesis'),
				'default' => ''
				),
			'facebook' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Facebook URL:', 'cru_thesis'),
				'default' => ''
				),
			'gplus' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Google Plus URL:', 'cru_thesis'),
				'default' => ''
				),
			'pinterest' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Pinterest URL:', 'cru_thesis'),
				'default' => ''
				),
			'linkedin' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('LinkedIn URL:', 'cru_thesis'),
				'default' => ''
				),
			'dribbble' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Dribbble URL:', 'cru_thesis'),
				'default' => ''
				),
			'github' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Github URL:', 'cru_thesis'),
				'default' => ''
				),
			'skype' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Skype URL:', 'cru_thesis'),
				'default' => ''
				),
			'video' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Video URL:', 'cru_thesis'),
				'default' => ''
				),
			'photos' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Photos URL:', 'cru_thesis'),
				'default' => ''
				),
			'rss' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('RSS URL:', 'cru_thesis'),
				'default' => ''
				),
			'email' => array(
				'type' => 'text',
				'width' => 'full',
				'label' => __('Email URL:', 'cru_thesis'),
				'default' => ''
				));
	}

	protected function html_options() {
		global $thesis;
		return $thesis->api->html_options();
	}


	public function html($args = false) {
		if (!apply_filters("{$this->_class}_show", true)) return;
		$social_items = array();
		if (!empty($this->options['twitter'])) $social_items[] = array($this->options['twitter'], 'http://cdn.greatlakescru.com/files/2013/09/twitter.png', 'Twitter');
		if (!empty($this->options['facebook'])) $social_items[] = array($this->options['facebook'], 'http://cdn.greatlakescru.com/files/2013/09/facebook.png', 'Facebook');
		if (!empty($this->options['gplus'])) $social_items[] = array($this->options['gplus'], '&#xe006;', 'Google Plus');
		if (!empty($this->options['pinterest'])) $social_items[] = array($this->options['pinterest'], '&#xe005;', 'Pinterest');
		if (!empty($this->options['linkedin'])) $social_items[] = array($this->options['linkedin'], '&#xe007;', 'LinkedIn');
		if (!empty($this->options['dribbble'])) $social_items[] = array($this->options['dribbble'], '&#xe015;' , 'Dribbble');
		if (!empty($this->options['github'])) $social_items[] = array($this->options['github'], '&#xe014;', 'Git');
		if (!empty($this->options['skype'])) $social_items[] = array($this->options['skype'], '&#xe019;' , 'Skype');
		if (!empty($this->options['video'])) $social_items[] = array($this->options['video'], 'http://cdn.greatlakescru.com/glr-media/wblob/53DBC98E4BFE98/1A/57F/1Q8VVmVVPJfcQmpIgMffFg/video.png' , 'Video');
		if (!empty($this->options['photos'])) $social_items[] = array($this->options['photos'], 'http://cdn.greatlakescru.com/glr-media/wblob/53DBC98E4BFE98/1A/57E/5bgGjMCRJqoJeVpibIr4sg/instagram.png' , 'Photos');
		if (!empty($this->options['rss'])) $social_items[] = array($this->options['rss'], 'http://cdn.greatlakescru.com/files/2013/09/rss.png' , 'RSS');
		if (!empty($this->options['email'])) $social_items[] = array($this->options['email'], 'http://cdn.greatlakescru.com/files/2013/09/email.png', 'Email');
		?>
		<div class="social-media-container">
			<?php if (!empty($social_items)) { ?>
	    	<div class="social_list">
	      	<?php
						foreach ($social_items as $social_item)
							echo "<a href=\"{$social_item[0]}\" class=\"data-icon\"><img src=\"{$social_item[1]}\" width=\"25\"><span class=\"screen-reader-text\">{$social_item[2]}</span></a>";
					?>
	      </div>
	    <?php } ?>
		</div>
		<?php
	}
}
