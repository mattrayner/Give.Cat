# This is an experimental feature
In order to stop annoying people with update messages we have an experimental Cross Comain Storage (XDS) server loosley based on https://github.com/lsl/xds.

## What's different?
We've seriously stripped back the server's ability to save files - all keys and values are hard coded.

## Why is it experimental?
Well, it involves injecting an iframe into the page, doing some weird domain messaging stuff and to be honest, some things I'm not too sure about myself.. To be on the safe side while I investigate it will only be available in the experimental branch. Although the idea of it and what it lets you do is pretty cool!