#!/usr/bin/env bash

set -x

lessc 404.less ../../public/css/404.min.css --clean-css
