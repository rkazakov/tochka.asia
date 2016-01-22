<form method="get" id="searchform" class="search-form" action="<?php echo home_url(); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="Статья, автор, ключевые слова..." onblur="if (this.value == '') {this.value = 'Статья, автор, ключевые слова...';}" onfocus="if (this.value == 'Статья, автор, ключевые слова...') {this.value = '';}" >
		<input type="submit" value="Поиск" onclick="if(this.value=='Статья, автор, ключевые слова...')this.value='';" />
	</fieldset>
</form>