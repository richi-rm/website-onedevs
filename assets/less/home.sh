#!/usr/bin/env bash

set -x

lessc home.less ../../public/css/home.min.css --clean-css
