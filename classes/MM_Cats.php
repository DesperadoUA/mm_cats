<?php

class MM_Cats extends WP_Widget {
	function __construct()
	{
		$args = [
			'name' => 'Избранные рубрики',
			'description' => 'Виджет выводит последние записи выбранных рубрик'
		];
		parent::__construct('mm_cats', '', $args);
	}

	public function form($instance){
			extract($instance);
			$cats = get_categories();
		?>
		<p>
			<label for="<?= $this->get_field_id('count'); ?>">Количество записей для вывода</label>
			<input
				type="text"
				name="<?= $this->get_field_name('count'); ?>"
				id="<?= $this->get_field_id('count'); ?>"
				value="<?= $count; ?>"
				class="widefat"
				style="margin-bottom: 20px"
			>
			<?php
				foreach ($cats as $cat) {
					$field_id = $this->get_field_id('inc'.$cat->cat_ID);
					$name = $this->get_field_name('inc').'[]';
					$cat_id = $cat->cat_ID;
					$cat_title = $cat->name;
					$is_checked = in_array($cat_id, $inc);
					echo "<input
							type='checkbox'
							name='$name'
							id='$field_id'
							value='$cat_id'";
					if($is_checked) echo 'checked';
                    echo  "/>
                          <label for='$field_id'>
                          	$cat_title
						  </label><hr>
                          ";
				}
			?>
		</p>
		<?php
	}

	public function widget(){

	}
	/*
	public function update() {

	}
	*/
}