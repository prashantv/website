default: static/default.css


static/default.css: static/default.less
	lessc $< $@
