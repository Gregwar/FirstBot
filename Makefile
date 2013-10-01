# Dummy makefile to trigger the build script
all:
	php build.php 

redo:
	rm -rf ../firstbot/
	php build.php

clean:
	rm -rf ../firstbot/
