.PHONY: less

less:
	lessc less/bootstrap.less css/vergel.css --clean-css -x

css: less