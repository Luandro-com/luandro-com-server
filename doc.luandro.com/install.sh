#!/bin/bash

git clone https://github.com/ether/etherpad-lite.git
docker build --build-arg ETHERPAD_PLUGINS="ep_align ep_bookmark ep_delete_empty_pads ep_headings2 ep_markdown ep_new_pad ep_scrollto ep_spellcheck ep_webrtc" --tag etherpad .