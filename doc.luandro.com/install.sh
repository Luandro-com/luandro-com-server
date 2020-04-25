#!/bin/bash

docker build --build-arg ETHERPAD_PLUGINS="ep_codepad ep_author_neat" --tag etherpad .