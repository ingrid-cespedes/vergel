.PHONY: less

less:
	lessc less/bootstrap.less css/vergel.css --clean-css

css: less